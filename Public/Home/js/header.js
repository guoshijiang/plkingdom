/*
@功能：头部js
@作者：郭世江
@时间：2016年11月19日
*/
/* 注意，要在页面中先引入jquery*/
$(function(){
	//头部用户
	$(".user").mouseover(function(){
		$(this).find("dd").show();
		$(this).find("dt").addClass("on");
	}).mouseout(function(){
		$(this).find("dd").hide();
		$(this).find("dt").removeClass("on");
	});

	//购物车
	$(".cart").mouseover(function(){
		$(this).find("dd").show();
		$(this).find("dt").addClass("on");
	}).mouseout(function(){
		$(this).find("dd").hide();
		$(this).find("dt").removeClass("on");
	});
});
