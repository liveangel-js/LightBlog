<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><title>首页~biu~biu~biu~喵~</title><link href="__PUBLIC__/css/Index/index.css" rel="stylesheet" type="text/css" /><link href="../../../Public/css/Index/index.css" rel="stylesheet" type="text/css" /><script type="text/javascript" src="__PUBLIC__/js/Index/index.js"></script><script type="text/javascript" src="../../../Public/js/Index/index.js"></script></head><body><div class="all"><!--head--><div class="header" ><div class="headercontent"><div class="headerlogo"><h1 style="margin:0px;  position:relative; top:20px; float:left">biu~biu~biu~</h1></div></div></div><!--head over--><!--body--><div class="body"><!--content--><div id="content"><!-- article list--><div><?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><!-- article item --><div class="articleItem"><!-- avatar --><div class="avatar"><a class="avatarImg" style="background-image:url(<?php echo ($vo["user"]["avatar"]); ?>)" title="<?php echo ($vo["user"]["nickname"]); ?>"></a></div><!-- avatar over--><!-- blog --><div class="articleHolder"><div class="triangle"></div><div style="position:relative; top:-15px"><!--uid:<?php echo ($vo["uid"]); ?>--><h3 style="float:left; position:relative; top:-20px;"><?php echo ($vo["title"]); ?></h3><!--aid:<?php echo ($vo["aid"]); ?>--><div style="float:right"><?php echo ($vo["time"]); ?></div></div><!-- blog content--><div class="articleContent"><?php echo (htmlspecialchars_decode($vo["content"])); ?></div><!-- blog content over--><div class="articleFooter"><div class="articleTags"><?php if(is_array($vo["tags"])): $i = 0; $__LIST__ = $vo["tags"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$tag): $mod = ($i % 2 );++$i;?><a class="articleTag">#<?php echo ($tag["tag"]); ?></a><?php endforeach; endif; else: echo "" ;endif; ?></div><div class="articleAction"><a id="<?php echo ($vo["aid"]); ?>like" class="<?php echo ($vo["like"]); ?>" onclick="like(<?php echo ($vo["aid"]); ?>)" title="喜欢" style="display:<?php echo ($vo["user"]["own"]); ?>"></a><a class="articleActionItem">热度(<span id="<?php echo ($vo["aid"]); ?>hotButton" ><?php echo ($vo["hot"]); ?></span>)</a><a class="articleActionItem" onclick="getComment(<?php echo ($vo["aid"]); ?>)">回应(<span id="<?php echo ($vo["aid"]); ?>commentButton"><?php echo ($vo["comment"]); ?></span>)</a><a class="articleActionItem" onclick="openArticle(<?php echo ($vo["aid"]); ?>)" style="display:<?php echo ($vo["user"]["own"]); ?>">转载</a></div></div><div id=<?php echo ($vo["aid"]); ?> class="articleComment"><input id="<?php echo ($vo["aid"]); ?>input" type="text" class="commentInput"  size="68" onfocus="this.value='',this.style.color='black'"  value="输入评论"></input><input type="button" value="评 论"   class="commentButton" onclick="login()"></input><ul id="<?php echo ($vo["aid"]); ?>list" class="commentlist"></ul></div><div id="<?php echo ($vo["aid"]); ?>reArticle" class="articleComment"><input id="<?php echo ($vo["aid"]); ?>inputReArticle" type="text" class="commentInput"  size="68" onfocus="this.value='',this.style.color='black'"  value="转载理由"></input><input type="button" value="转 载"  class="commentButton" onclick="reArticle(<?php echo ($vo["aid"]); ?>)"></input><ul  class="commentlist"></ul></div></div><!-- blog  over--></div><!-- article item over--><?php endforeach; endif; else: echo "" ;endif; ?><div style="float:right; margin:10px"><?php echo ($page); ?></div></div><!-- article list over--></div><!--content over--><!--nav--><div id="nav"><!--login and register--><div  class="loginModule"><a href="__URL__/login" class="login">登陆</a><a href="__URL__/register" class="register">注册</a></div><!--login and register over--><!--tag recommend and search--><div class="tagModule"><ul class="list"><li class="search"><input type="button" class="searchButton" style="cursor:pointer" value="" onClick="searchTag()"/><input type="text" id="searchInput"  name="tag" value="搜索标签" onfocus="this.value='',this.style.color='black'" size="20" /></li><?php if(is_array($recommendTags)): $i = 0; $__LIST__ = $recommendTags;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="item" ><a  style="text-decoration:none; display:block; color:black;"><span class="icon"></span><span><?php echo ($vo["tag"]); ?></span><span id="tag<?php echo ($vo["tag"]); ?>" class="tag<?php echo ($vo["like"]); ?>icon"  onclick="return likeTag('<?php echo ($vo["tag"]); ?>')"></span></a></li><?php endforeach; endif; else: echo "" ;endif; ?><li class="itemMore"><a  style="text-decoration:none; color:black; display:block"><span class="icon"></span><span>更 多 标 签</span></a></li></ul></div><!--tag recommend and search over--><!--blog recommend and search--><div class="blogModule"><ul class="list"><li class="search"><input type="button" class="searchButton" style="cursor:pointer" value="" onClick="searchTag()"/><input type="text" name="nickname" id="searchInput"  value="搜索博客" onfocus="this.value='',this.style.color='black'" size="20" /></li><?php if(is_array($recommendBlogs)): $i = 0; $__LIST__ = $recommendBlogs;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="blogitem"><a  style="text-decoration:none; display:block; color:black;"><img class="blogicon" src="<?php echo ($vo["avatar"]); ?>" width="36px" height="36px" /><span style="margin-left:10px"><?php echo ($vo["nickname"]); ?></span><span id="blog<?php echo ($vo["uid"]); ?>" class="blog<?php echo ($vo["follow"]); ?>icon" onclick="return followBlog('<?php echo ($vo["uid"]); ?>')"></span></a></li><?php endforeach; endif; else: echo "" ;endif; ?><li class="itemMore"><a  style="text-decoration:none; color:black; display:block"><span class="icon" style="background:url(/Public/img/sidemenu.$6372.png) -24px 10px no-repeat;"></span><span>更 多 博 客</span></a></li></ul></div><!--blog recommend and search over--></div><!--nav over--></div><!--body over--></div></body></html>