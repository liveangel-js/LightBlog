<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><title>ueditor</title><link href="__PUBLIC__/css/Publish/wordEdit.css" rel="stylesheet" type="text/css" /><link href="../../../Public/css/Publish/wordEdit.css" rel="stylesheet" type="text/css" /><script type="text/javascript" charset="utf-8" src="/ueditor/editor_config.js"></script><script type="text/javascript" charset="utf-8" src="../../../ueditor/editor_config.js"></script><script type="text/javascript" charset="utf-8" src="/ueditor/editor.js"></script><script type="text/javascript" charset="utf-8" src="../../../ueditor/editor.js"></script><link rel="stylesheet" type="text/css" href="/ueditor/themes/default/ueditor.css"/><link rel="stylesheet" type="text/css" href="../../../ueditor/themes/default/ueditor.css"/><link href="__PUBLIC__/css/Index/index.css" rel="stylesheet" type="text/css" /><link href="../../../Public/css/Index/index.css" rel="stylesheet" type="text/css" /></head><body><div class="all"><!--header--><!--head--><div class="header" ><div class="headercontent"><div class="headerlogo"><h1 style="margin:0px;  position:relative; top:20px; float:left">biu~biu~biu~</h1></div><div class="headernav"><a href="__URL__/../User/index" class="headenavItemHome" title="主页"></a><a href="__URL__/../User/message" class="headenavItemEmail<?php echo ($hasMessage); ?>" title="信息"></a><a class="headenavItemHelp" title="帮助" onclick="help()"></a><a href="__URL__/../User/setting" class="headenavItemSetting" title="设置"></a><a href="__URL__/../User/logout" class="headenavItemLogout" title="注销"></a></div></div></div><!--head over--><div class="body"><div class="avatar"><a class="avatarImg" title="<?php echo ($user["nickname"]); ?>" href="__URL__/../User/visitBlog/uid/<?php echo ($user["uid"]); ?>" style="background-image:url(<?php echo ($user["avatar"]); ?>)"></a></div><div id="content"><div class="triangle"></div><form method="post" action="__URL__/wordPublish" onsubmit="return dataCheck()" ><h2>发布音乐</h2><div style="margin-bottom:10px"><span>标题：</span><input id="title" name="title" type="text" size="60" /></div><div style="margin-bottom:20px"><span>标签：</span><input name="tags" type="text" size="60" /><span>（用-分割标签）</span></div><script type="text/plain" id="editor" style="width:550px;margin-bottom:10px"></script><div style="float:right;"><input style="line-height:36px; height:36px; width:80px; margin-right:20px" type="submit" value="提交"/><input style="line-height:36px; height:36px; width:80px;" type="button" value="取消" onclick="window.history.back(-1);"/></div></form></div></div></div></body><script type="text/javascript">    var editor = new UE.ui.Editor({textarea:'editor'});
    editor.render('editor');
	function dataCheck(){
		var input=document.getElementById("title");
		if(input.value==""){
		    alert("标题内容不能为空");
		    return false;	
		}
		var editor=document.getElementById("editor");
		if(editor.value==""){
		    alert("发表内容不能为空");
		    return false;	
		}
		return true;
	}
</script></html>