<?php
	//对string内容防止xss攻击
	//把string中的非法标签内容都给过滤掉
	function fangXSS($string)
	{
		require_once './Common/Plugin/htmlpurifier/HTMLPurifier.auto.php';
		// 生成配置对象
		$cfg = HTMLPurifier_Config::createDefault();
		// 以下就是配置：
		$cfg->set('Core.Encoding', 'UTF-8');
		// 设置允许使用的HTML标签
		$cfg->set('HTML.Allowed','div,b,strong,i,em,a[href|title],ul,ol,li,p[style],br,span[style],img[width|height|alt|src]');
		// 设置允许出现的CSS样式属性
		$cfg->set('CSS.AllowedProperties', 'font,font-size,font-weight,font-style,font-family,text-decoration,padding-left,color,background-color,text-align');
		// 设置a标签上是否允许使用target="_blank"
		$cfg->set('HTML.TargetBlank', TRUE);
		// 使用配置生成过滤用的对象
		$obj = new HTMLPurifier($cfg);
		// 过滤字符串
		return $obj->purify($string);
}
?>
