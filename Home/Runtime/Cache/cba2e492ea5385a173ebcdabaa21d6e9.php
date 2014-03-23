<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><title>biu~biu~biu~首页~喵~</title><link href="__PUBLIC__/css/Index/index.css" rel="stylesheet" type="text/css" /><link href="../../../Public/css/Index/index.css" rel="stylesheet" type="text/css" /><script type="text/javascript" src="__PUBLIC__/js/index.js"></script><script type="text/javascript" src="../../../Public/js/index.js"></script><style type="text/css">#imghead {filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(sizingMethod=image);}  
</style></head><body><div class="all"><!--header--><!--head--><div class="header" ><div class="headercontent"><div class="headerlogo"><h1 style="margin:0px;  position:relative; top:20px; float:left">biu~biu~biu~</h1></div><div class="headernav"><a href="__URL__/../User/index" class="headenavItemHome" title="主页"></a><a href="__URL__/../User/message" class="headenavItemEmail<?php echo ($hasMessage); ?>" title="信息"></a><a class="headenavItemHelp" title="帮助" onclick="help()"></a><a href="__URL__/../User/setting" class="headenavItemSetting" title="设置"></a><a href="__URL__/../User/logout" class="headenavItemLogout" title="注销"></a></div></div></div><!--head over--><!--body--><div class="body"><!--content--><div id="content"><!--publish article--><!-- article publish --><div class="articlePublish"><div class="avatar"><a class="avatarImg" title="<?php echo ($user["nickname"]); ?>" href="__URL__/../User/visitBlog/uid/<?php echo ($user["uid"]); ?>" style="background-image:url(<?php echo ($user["avatar"]); ?>)"></a></div><div  class="publishActionHolder" ><div class="triangle"></div><div class="publishImgPositon"><a href="__URL__/../Publish/wordEdit" class="wordPublish">文字</a><a href="__URL__/../Publish/pictureEdit" class="picturePublish">图片</a><a href="__URL__/../Publish/linkEdit" class="linkPublish">链接</a><a href="__URL__/../Publish/quoteEdit" class="quotoPublish">引用</a><a href="__URL__/../Publish/musicEdit" class="musicPublish">音乐</a><a href="__URL__/../Publish/videoEdit" class="videoPublish">视频</a></div></div></div><!-- article publish over--><div style="border-radius:5px; background:rgb(200,200,200); float:left; margin:40px 0px; padding:20px 30px; height:150px;"><div style=" "><span>邮 箱 ：<?php echo ($user["email"]); ?></span></div><form action="__URL__/../User/setPassword" method="post"><p>原密码:<input name="oldpassword"  type="password"/></p><p>原密码:<input name="newpassword" type="password"/></p><p>原密码:<input name="repassword" type="password"/><input type="submit" value="修改"/></p></form></div><div  style="border-radius:5px; background:rgb(200,200,200); float:right; margin:40px 0px; padding:20px 30px;height:150px;"><form action="__URL__/../User/setAvatar" method="post" enctype="multipart/form-data"><div><span>头像:</span><img id="imghead" src="<?php echo ($user["avatar"]); ?>" width="64px" height="64px"></img><input  type="submit" value="确认修改"/></div><div style="margin-top:20px"><input name="avatar" type="file" onchange="previewImage(this)"     accept="image/*"></input></div></form></div></div><!--content over--><!--nav--><div id="nav"><!--nav user--><!--avatar info --><div class="blogModule"><ul class="list"><li class="item"><a href="__URL__/../User/likeBlog" style="text-decoration:none; color:black; display:block"><span class="icon" style="background:url(/Public/img/sidemenu.$6372.png) 12px 10px no-repeat;"></span><span>我关注了</span><span id="followNumbers"><?php echo ($user["followNumbers"]); ?></span><span>个博客</span><span class="extendicon"></span></a></li><li class="item"><a href="__URL__/../User/likeTag" style="text-decoration:none; color:black;display:block"><span class="icon" ></span><span>我关注了<span id="tagNumbers"><?php echo ($user["tagNumbers"]); ?></span>个标签</span><span class="extendicon"></span></a></li><li class="item"><a href="__URL__/../User/likeArticle" style="text-decoration:none; color:black;display:block"><span class="icon" style="background:url(/Public/img/sidemenu.$6372.png) -58px 10px no-repeat;"></span><span>我喜欢了<span id="articleNumbers"><?php echo ($user["articleNumbers"]); ?></span>篇文章</span><span class="extendicon"></span></a></li></ul></div><!--avatar info over--><!--nav tag--><!--tag recommend and search--><div class="tagModule"><ul class="list"><li class="search"><form action="__URL__/../Search/searchTag" method="get"><input type="submit" class="searchButton" style="cursor:pointer" value="" onClick="searchTag()"/><input type="text" id="searchInput"  name="tag" value="搜索标签" onfocus="this.value='',this.style.color='black'" size="20" /></form></li><?php if(is_array($recommendTags)): $i = 0; $__LIST__ = $recommendTags;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="item" ><a href="../Search/searchTag/tag/<?php echo ($vo["tag"]); ?>" style="text-decoration:none; display:block; color:black;"><span class="icon"></span><span><?php echo ($vo["tag"]); ?></span><span id="tag<?php echo ($vo["tag"]); ?>" class="tag<?php echo ($vo["like"]); ?>icon"  onclick="return likeTag('<?php echo ($vo["tag"]); ?>')"></span></a></li><?php endforeach; endif; else: echo "" ;endif; ?><li class="itemMore"><a href="__URL__/../Search/moreTag" style="text-decoration:none; color:black; display:block"><span class="icon"></span><span>更 多 标 签</span></a></li></ul></div><!--tag recommend and search over--><!--nav tag--><!--blog recommend and search--><div class="blogModule"><ul class="list"><li class="search"><form action="__URL__/../Search/searchBlog" method="get"><input type="submit" class="searchButton" style="cursor:pointer" value="" onClick="searchTag()"/><input type="text" name="nickname" id="searchInput"  value="搜索博客" onfocus="this.value='',this.style.color='black'" size="20" /></form></li><?php if(is_array($recommendBlogs)): $i = 0; $__LIST__ = $recommendBlogs;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="blogitem"><a href="__URL__/../User/visitBlog/uid/<?php echo ($vo["uid"]); ?>" style="text-decoration:none; display:block; color:black;"><img class="blogicon" src="<?php echo ($vo["avatar"]); ?>" width="36px" height="36px" /><span style="margin-left:10px"><?php echo ($vo["nickname"]); ?></span><span id="blog<?php echo ($vo["uid"]); ?>" class="blog<?php echo ($vo["follow"]); ?>icon" onclick="return followBlog('<?php echo ($vo["uid"]); ?>')"></span></a></li><?php endforeach; endif; else: echo "" ;endif; ?><li class="itemMore"><a href="__URL__/../Search/moreBlog" style="text-decoration:none; color:black; display:block"><span class="icon" style="background:url(/Public/img/sidemenu.$6372.png) -24px 10px no-repeat;"></span><span>更 多 博 客</span></a></li></ul></div><!--blog recommend and search over--></div><!--nav over--></div><!--body over--></div></body><script type="text/javascript">function previewImage(file)  
{  
  
  var MAXWIDTH  = 64;  
  var MAXHEIGHT = 64;  
 // var div = document.getElementById('preview');  
  if (file.files && file.files[0])  
  {  
   // div.innerHTML = '<img id=imghead>';  
    var img = document.getElementById('imghead');  
    img.onload = function(){  
      var rect = clacImgZoomParam(MAXWIDTH, MAXHEIGHT, img.offsetWidth, img.offsetHeight);  
      img.width = rect.width;  
      img.height = rect.height;  
      img.style.marginLeft = rect.left+'px';  
      img.style.marginTop = rect.top+'px';  
    }  
    var reader = new FileReader();  
    reader.onload = function(evt){img.src = evt.target.result;}  
    reader.readAsDataURL(file.files[0]);  
  }  
  else  
  {  
    var sFilter='filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(sizingMethod=scale,src="';  
    file.select();  
    var src = document.selection.createRange().text;  
    div.innerHTML = '<img id=imghead>';  
    var img = document.getElementById('imghead');  
    img.filters.item('DXImageTransform.Microsoft.AlphaImageLoader').src = src;  
    var rect = clacImgZoomParam(MAXWIDTH, MAXHEIGHT, img.offsetWidth, img.offsetHeight);  
    status =('rect:'+rect.top+','+rect.left+','+rect.width+','+rect.height);  
    div.innerHTML = "<div id=divhead style='width:"+rect.width+"px;height:"+rect.height+"px;margin-top:"+rect.top+"px;margin-left:"+rect.left+"px;"+sFilter+src+"\"'></div>";  
  }  
}  
function clacImgZoomParam( maxWidth, maxHeight, width, height ){  
    var param = {top:0, left:0, width:width, height:height};  
    if( width>maxWidth || height>maxHeight )  
    {  
        rateWidth = width / maxWidth;  
        rateHeight = height / maxHeight;  
          
        if( rateWidth > rateHeight )  
        {  
            param.width =  maxWidth;  
            param.height = Math.round(height / rateWidth);  
        }else  
        {  
            param.width = Math.round(width / rateHeight);  
            param.height = maxHeight;  
        }  
    }  
      
    param.left = Math.round((maxWidth - param.width) / 2);  
    param.top = Math.round((maxHeight - param.height) / 2);  
    return param;  
} 
</script></html>