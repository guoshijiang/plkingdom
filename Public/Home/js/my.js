//alert("引用成功");

//要做事先找人
var slide = document.getElementById("slide");
var ul = slide.children[0];
var lis = ul.children;
var arrow = document.getElementById("arrow");
var right = arrow.children[1];
var left = arrow.children[0];

var json = [
    {   //  1
        width: 400,
        top: 20,
        left: 50,
        opacity: 0.2,
        zIndex: 2
    },
    {  // 2
        width: 600,
        top: 70,
        left: 0,
        opacity: 0.8,
        zIndex: 3
    },
    {   // 3
        width: 800,
        top: 100,
        left: 200,
        opacity: 1,
        zIndex: 4
    },
    {  // 4
        width: 600,
        top: 70,
        left: 600,
        opacity: 0.8,
        zIndex: 3
    },
    {   //5
        width: 400,
        top: 20,
        left: 750,
        opacity: 0.2,
        zIndex: 2
    }
];
//[{},{},{},{},{}]

//鼠标经过slide让arrow显示
slide.onmouseover = function () {
    //让arrow显示
    animate(arrow, {opacity: 1});
}
slide.onmouseout = function () {
    animate(arrow, {opacity: 0});
}

//给每一个li赋值
function assign() {
    for (var i = 0; i < lis.length; i++) {
        animate(lis[i], {
            width: json[i].width,// json是[{},{},{},{},{}] json[i]是里面的{} json[i].width
            top: json[i].top,
            left: json[i].left,
            opacity: json[i].opacity,
            zIndex: json[i].zIndex
        }, function () {
            flag = true;//执行完成后 将节流阀再次打开
        });
    }
}

//右侧按钮点击 对json进行修改 然后按照新的json再次分配位置
right.onclick = function () {
    if (flag == true) {//点击的时候判断 如果节流阀是打开的 我就执行
        json.push(json.shift());//删掉第一个加到最后
        assign();
        flag = false;//点击完成后立即将节流阀关闭
    }
}
//左侧按钮点击 对json进行修改 然后按照新的json再次分配位置
left.onclick = function () {
    json.unshift(json.pop());//删掉最后一个加到开始
    assign();
}

//页面加载的时候先运行一次
assign();

//设置一个节流阀
var flag = true;