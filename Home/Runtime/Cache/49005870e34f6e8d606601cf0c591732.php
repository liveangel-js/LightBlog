<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><title>biu~biu~biu~阅读轻博客~喵~</title><link href="__PUBLIC__/css/Index/index.css" rel="stylesheet" type="text/css" /><link href="../../../Public/css/Index/index.css" rel="stylesheet" type="text/css" /><script type="text/javascript" src="__PUBLIC__/js/index.js"></script><script type="text/javascript" src="../../../Public/js/index.js"></script></head><body><div class="all"><!--header--><!--head--><div class="header" ><div class="headercontent"><div class="headerlogo"><h1 style="margin:0px;  position:relative; top:20px; float:left">biu~biu~biu~</h1></div><div class="headernav"><a href="__URL__/../User/index" class="headenavItemHome" title="主页"></a><a href="__URL__/../User/message" class="headenavItemEmail<?php echo ($hasMessage); ?>" title="信息"></a><a class="headenavItemHelp" title="帮助" onclick="help()"></a><a href="__URL__/../User/setting" class="headenavItemSetting" title="设置"></a><a href="__URL__/../User/logout" class="headenavItemLogout" title="注销"></a></div></div></div><!--head over--><!--body--><div class="body"><!--content--><div id="content"><!--publish article--><!-- article publish --><div class="articlePublish"><div class="avatar"><a class="avatarImg" title="<?php echo ($user["nickname"]); ?>" href="__URL__/../User/visitBlog/uid/<?php echo ($user["uid"]); ?>" style="background-image:url(<?php echo ($user["avatar"]); ?>)"></a></div><div  class="publishActionHolder" ><div class="triangle"></div><div class="publishImgPositon"><a href="__URL__/../Publish/wordEdit" class="wordPublish">文字</a><a href="__URL__/../Publish/pictureEdit" class="picturePublish">图片</a><a href="__URL__/../Publish/linkEdit" class="linkPublish">链接</a><a href="__URL__/../Publish/quoteEdit" class="quotoPublish">引用</a><a href="__URL__/../Publish/musicEdit" class="musicPublish">音乐</a><a href="__URL__/../Publish/videoEdit" class="videoPublish">视频</a></div></div></div><!-- article publish over--><!-- article item --><div class="articleItem"><!-- avatar --><div class="avatar"><a class="avatarImg" style="background-image:url(<?php echo ($vo["user"]["avatar"]); ?>)" title="<?php echo ($vo["user"]["nickname"]); ?>" href="__URL__/../User/visitBlog/uid/<?php echo ($vo["user"]["uid"]); ?>"></a></div><!-- avatar over--><!-- blog --><div class="articleHolder"><div class="triangle"></div><div style="position:relative; top:-15px"><h3 style="float:left; position:relative; top:-20px;"><?php echo ($vo["title"]); ?></h3><div style="float:right"><?php echo ($vo["time"]); ?></div></div><!-- blog content--><div class="articleContent"><?php echo (htmlspecialchars_decode($vo["content"])); ?></div><!-- blog content over--><div class="articleFooter"><div class="articleTags"><?php if(is_array($vo["tags"])): $i = 0; $__LIST__ = $vo["tags"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$tag): $mod = ($i % 2 );++$i;?><a href="__URL__/../Search/searchTag/tag/<?php echo ($tag["tag"]); ?>" class="articleTag">#<?php echo ($tag["tag"]); ?></a><?php endforeach; endif; else: echo "" ;endif; ?></div><div class="articleAction"><a id="<?php echo ($vo["aid"]); ?>like" class="<?php echo ($vo["like"]); ?>" onclick="like(<?php echo ($vo["aid"]); ?>)" title="喜欢" style="display:<?php echo ($vo["user"]["own"]); ?>"></a><a class="articleActionItem">热度(<span id="<?php echo ($vo["aid"]); ?>hotButton" ><?php echo ($vo["hot"]); ?></span>)</a><a class="articleActionItem" onclick="getComment(<?php echo ($vo["aid"]); ?>)">回应(<span id="<?php echo ($vo["aid"]); ?>commentButton"><?php echo ($vo["comment"]); ?></span>)</a><a class="articleActionItem" onclick="openArticle(<?php echo ($vo["aid"]); ?>)" style="display:<?php echo ($vo["user"]["own"]); ?>">转载</a></div></div><div id=<?php echo ($vo["aid"]); ?> class="articleComment"><input id="<?php echo ($vo["aid"]); ?>input" type="text" class="commentInput"  size="68" onfocus="this.value='',this.style.color='black'"  value="输入评论"></input><input type="button" value="评 论"   class="commentButton" onclick="addComment(<?php echo ($vo["aid"]); ?>,<?php echo ($user["uid"]); ?>,'<?php echo ($user["nickname"]); ?>','<?php echo ($user["avatar"]); ?>')"></input><div id="<?php echo ($vo["aid"]); ?>respondcomment" style="display:none"><input id="<?php echo ($vo["aid"]); ?>reinput" type="text" class="commentInput"  size="68" onfocus="this.value='',this.style.color='black'"  value="输入评论"></input><input type="button" id="<?php echo ($vo["aid"]); ?>rebutton"   class="commentButton" onclick="readdComment(<?php echo ($vo["aid"]); ?>,<?php echo ($user["uid"]); ?>,'<?php echo ($user["nickname"]); ?>','<?php echo ($user["avatar"]); ?>')"></input></div><ul id="<?php echo ($vo["aid"]); ?>list" class="commentlist"></ul></div><div id="<?php echo ($vo["aid"]); ?>reArticle" class="articleComment"><input id="<?php echo ($vo["aid"]); ?>inputReArticle" type="text" class="commentInput"  size="68" onfocus="this.value='',this.style.color='black'"  value="转载理由"></input><input type="button" value="转 载"  class="commentButton" onclick="reArticle(<?php echo ($vo["aid"]); ?>)"></input><ul  class="commentlist"></ul></div></div><!-- blog  over--></div><!-- article item over--></div><!--content over--><!--nav--><div id="nav"><!--nav user--><!--avatar info --><div class="blogModule"><ul class="list"><li class="item"><a href="__URL__/../User/likeBlog" style="text-decoration:none; color:black; display:block"><span class="icon" style="background:url(/Public/img/sidemenu.$6372.png) 12px 10px no-repeat;"></span><span>我关注了</span><span id="followNumbers"><?php echo ($user["followNumbers"]); ?></span><span>个博客</span><span class="extendicon"></span></a></li><li class="item"><a href="__URL__/../User/likeTag" style="text-decoration:none; color:black;display:block"><span class="icon" ></span><span>我关注了<span id="tagNumbers"><?php echo ($user["tagNumbers"]); ?></span>个标签</span><span class="extendicon"></span></a></li><li class="item"><a href="__URL__/../User/likeArticle" style="text-decoration:none; color:black;display:block"><span class="icon" style="background:url(/Public/img/sidemenu.$6372.png) -58px 10px no-repeat;"></span><span>我喜欢了<span id="articleNumbers"><?php echo ($user["articleNumbers"]); ?></span>篇文章</span><span class="extendicon"></span></a></li></ul></div><!--avatar info over--><!--nav tag--><!--tag recommend and search--><div class="tagModule"><ul class="list"><li class="search"><form action="__URL__/../Search/searchTag" method="get"><input type="submit" class="searchButton" style="cursor:pointer" value="" onClick="searchTag()"/><input type="text" id="searchInput"  name="tag" value="搜索标签" onfocus="this.value='',this.style.color='black'" size="20" /></form></li><?php if(is_array($recommendTags)): $i = 0; $__LIST__ = $recommendTags;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="item" ><a href="../Search/searchTag/tag/<?php echo ($vo["tag"]); ?>" style="text-decoration:none; display:block; color:black;"><span class="icon"></span><span><?php echo ($vo["tag"]); ?></span><span id="tag<?php echo ($vo["tag"]); ?>" class="tag<?php echo ($vo["like"]); ?>icon"  onclick="return likeTag('<?php echo ($vo["tag"]); ?>')"></span></a></li><?php endforeach; endif; else: echo "" ;endif; ?><li class="itemMore"><a href="__URL__/../Search/moreTag" style="text-decoration:none; color:black; display:block"><span class="icon"></span><span>更 多 标 签</span></a></li></ul></div><!--tag recommend and search over--><!--nav tag--><!--blog recommend and search--><div class="blogModule"><ul class="list"><li class="search"><form action="__URL__/../Search/searchBlog" method="get"><input type="submit" class="searchButton" style="cursor:pointer" value="" onClick="searchTag()"/><input type="text" name="nickname" id="searchInput"  value="搜索博客" onfocus="this.value='',this.style.color='black'" size="20" /></form></li><?php if(is_array($recommendBlogs)): $i = 0; $__LIST__ = $recommendBlogs;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="blogitem"><a href="__URL__/../User/visitBlog/uid/<?php echo ($vo["uid"]); ?>" style="text-decoration:none; display:block; color:black;"><img class="blogicon" src="<?php echo ($vo["avatar"]); ?>" width="36px" height="36px" /><span style="margin-left:10px"><?php echo ($vo["nickname"]); ?></span><span id="blog<?php echo ($vo["uid"]); ?>" class="blog<?php echo ($vo["follow"]); ?>icon" onclick="return followBlog('<?php echo ($vo["uid"]); ?>')"></span></a></li><?php endforeach; endif; else: echo "" ;endif; ?><li class="itemMore"><a href="__URL__/../Search/moreBlog" style="text-decoration:none; color:black; display:block"><span class="icon" style="background:url(/Public/img/sidemenu.$6372.png) -24px 10px no-repeat;"></span><span>更 多 博 客</span></a></li></ul></div><!--blog recommend and search over--></div><!--nav over--></div><!--body over--></div></body></html>