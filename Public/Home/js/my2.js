//alert("引用完成");

//获取元素
var slide = document.getElementById("slide");
var arrow = document.getElementById("arrow");
var left = arrow.children[0];
var right = arrow.children[1];
var ul = slide.children[0];
var lis = ul.children;

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

//1.1当鼠标经过slide的时候 把arrow显示出来
slide.onmouseover = function () {
    animate(arrow, {opacity: 1});
}
//1.2当鼠标离开slide的时候 把arrow隐藏
slide.onmouseout = function () {
    animate(arrow, {opacity: 0});
}

//2让所有图片根据JSON配置 用动画的效果各就各位
assign();
function assign() {
    for (var i = 0; i < lis.length; i++) {
        animate(lis[i], {
            width: json[i].width,
            top: json[i].top,
            left: json[i].left,
            opacity: json[i].opacity,
            zIndex: json[i].zIndex
        }, function () {
            flag = true;
        })
    }
}

//3.1点击right 对json进行修改 按照新的json重新分配
right.onclick = function () {
    if (flag) {
        json.push(json.shift());//删掉第一个加到最后
        assign();
        flag = false;
    }
}
//3.2点击leftt 对json进行修改 按照新的json重新分配
left.onclick = function () {
    if (flag) {
        json.unshift(json.pop());//删掉最后一个加到开始
        assign();
        flag = false;
    }
}

//4.设置节流阀
var flag = true;