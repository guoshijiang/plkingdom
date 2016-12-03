<?php
namespace Admin\Controller;
use Think\Controller;


//后台商品控制器
class GoodsController extends Controller {

    public function showlist1(){
        //测试数据库是否连接成功
        $goods = new \Model\GoodsModel();  //完全限定名称 方式实例化类对象
        dump($goods);

        //实例化父类Model对象，同时操作sp_goods数据表
        $goods = D('Goods');
        dump($goods);  

        $this -> display();
    }
    
    public function showlist(){
        //$cdt['goods_id'] = array('in','4,5,6');
        //获得商品列表信息
        $info = D('Goods')
            ->field('goods_id,goods_name,goods_price,goods_number,goods_weight,goods_small_logo')
            ->order('goods_id desc')
            ->select();
        $this -> assign('info',$info);

        $this -> display();
    }    


    public function tianjia(){
        //两个逻辑：展示表单页、收集数据
        $goods = D('Goods');
        if(IS_POST){
            $shuju = $goods -> create(); //先过滤全部$_POST的数据
            //富文本编辑器的信息不能过滤
            $shuju['goods_introduce'] = \fangXSS($_POST['goods_introduce']);
            //填充必须的表单域信息值
            $shuju['add_time'] = $shuju['update_time'] =$shuju['sale_time'] = time();
            //$shuju--->普通表单域信息
            //实现商品logo图片的上传处理
            $this -> deal_logo($shuju);
            //$shuju--->普通/上传文件域信息 都有
            //$shuju['goods_big_logo'] = "./Public/log/2016-05-24/xxxx.jpg";

            if($newid = $goods -> add($shuju)){

                //必须等着商品添加到数据库后，才可以对相册进行维护
                $this -> deal_pics($newid);

                $this -> success('添加数据成功',U('showlist'),1);
            }else{
                $this -> error('添加数据失败',U('tianjia'),1);
            }
        }else{
            $this -> display();
        }
    }


    //商品数据修改
    function upd(){
        $goods_id = I('get.goods_id');
        $goods = D('Goods');
        //两个逻辑：展示、收集
        if(IS_POST){
            $shuju = $goods -> create(); //普通表单域信息
            $shuju['goods_introduce'] = \fangXSS($_POST['goods_introduce']);
            $shuju['upd_time'] = time(); //维护修改时间

            //实现logo图片上传处理
            $this -> deal_logo($shuju);
            //实现pics相册上传处理
            $this -> deal_pics($shuju['goods_id']);

            if($goods -> save($shuju)){
                $this -> success('修改数据成功',U('showlist'),1);
            }else{
                $this -> error('修改数据失败',U('upd',array('goods_id'=>$goods_id)),1);
            }
        }else{
            //根据$goods_id获得被修改商品信息
            $info = $goods->find($goods_id);
            $this -> assign('info',$info);
            //获得商品相册信息
            $picsinfo = D('GoodsPics')
                ->where(array('goods_id'=>$goods_id))
                ->select();
            $this -> assign('picsinfo',$picsinfo);  

            $this -> display();
        }
    }

    /***
        实现商品相册图片的批量上传处理
        param [int] $goods_id 给该$goods_id的商品进行相册上传和缩略图制作处理
    */
    private function deal_pics($goods_id){
        //判断有上传相册图片
        $ishave = false;
        foreach($_FILES['goods_pics']['error'] as $k => $v){
            //判断至少有一个相册上传，并且该相册是ok的
            if($v=== 0){
                $ishave = true;
            }
        }

        if($ishave === true){
            //有上传相册图片
            //dump($_FILES);
            //实现批量相册上传
            $cfg = array(
                'rootPath'      =>  './Public/pics/', //保存根路径
            );
            $up = new \Think\Upload($cfg);
            //从$_FILES里边获得goods_pics的相册信息
            //upload($_FILES)
            $z = $up -> upload(array($_FILES['goods_pics']));
            //dump($z);

            //遍历$z,对各个上传好的"相册"进行对应的处理
            //要制作3幅缩略图
            $im = new \Think\Image();
            foreach($z as $k => $v){
                //原图路径名
                $yuan_path_name = $up->rootPath.$v['savepath'].$v['savename'];
                //给原图制作缩略图
                $im -> open($yuan_path_name);
                $im -> thumb(800,800,6);
                //保存制作好的缩略图
                $b_name = $up->rootPath.$v['savepath'].'b_'.$v['savename'];
                $im -> save($b_name);

                $im -> thumb(350,350,6);
                $m_name = $up->rootPath.$v['savepath'].'m_'.$v['savename'];
                $im -> save($m_name); 

                $im -> thumb(50,50,6);
                $s_name = $up->rootPath.$v['savepath'].'s_'.$v['savename'];
                $im -> save($s_name);
                //存储3幅缩略图到数据库(sp_goods_pics)
                $arr = array(
                    'goods_id'=>$goods_id,
                    'goods_pics_b' => $b_name,
                    'goods_pics_m' => $m_name,
                    'goods_pics_s' => $s_name,
                );
                D('GoodsPics')->add($arr);
            }
        }
    }

    /***
        实现商品logo图片的上传处理
        param [array] $data 是一个引用传递
        引用传递：方法调用的实参 与 方法的形参 是同一个变量的两个名称而已
        $this -> deal_logo($shuju);
        $shuju 和 $data 是同一个变量的两个名字
    */
    private function deal_logo(&$data){
        if($_FILES['goods_logo']['error']===0){
            //如果是"修改商品"还上传新logo图片
            //就要判断并删除旧logo物理图片
            if(!empty($data['goods_id'])){
                //修改商品
                $old_logo = D('Goods')
                    ->field('goods_big_logo,goods_small_logo')
                    ->find($data['goods_id']);
                unlink($old_logo['goods_big_logo']);
                unlink($old_logo['goods_small_logo']);
            }

            //A. logo图片上传
            //附件没有问题，才进行后续处理
            $cfg = array(
                'rootPath'      =>  './Public/logo', //保存根路径
            );
            $up = new \Think\Upload($cfg);
            $logo = $up->uploadOne($_FILES['goods_logo']);
            
            //把上传好的附件保存到数据库中(保存路径名信息而已)
            $big_path_name = $up->rootPath.$z['savepath'].$z['savename'];
            $data['goods_big_logo'] = $big_path_name;

            //B. 给logo图片做缩略图
            $im = new \Think\Image();       //①创建对象
            $im -> open($big_path_name);    //②打开原图
            $im -> thumb(200,200,6);          //③做缩略图,6：固定尺寸缩放
            //原图：./Public/logo/2016-05-24/5743af3fa9667.jpg
            //缩略图：./Public/logo/2016-05-24/s_5743af3fa9667.jpg
            $small_path_name = $up->rootPath.$z['savepath'].'s_'.$z['savename'];
            $im -> save($small_path_name);  //④输出保存缩略图

            //保存缩略图到数据库
            $data['goods_small_logo'] = $small_path_name;
        }
    }

    //实现单个相册的图片删除操作
    function removePics(){
        $pics_id = I('get.pics_id');
        //查询并删除物理图片
        $picsinfo = D('GoodsPics')->find($pics_id);
        unlink($picsinfo['goods_pics_b']);
        unlink($picsinfo['goods_pics_m']);
        unlink($picsinfo['goods_pics_s']);
        //删除记录
        D('GoodsPics')->delete($pics_id);

        echo "删除商品相册成功";
    }
}
