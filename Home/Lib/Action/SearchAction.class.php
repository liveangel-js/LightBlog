<?php
class SearchAction extends Action{
    
	
	
	public function searchBlog(){
	    session_start();
		$uid=$_SESSION['user']['uid'];
		$hasMessage=D("User")->hasMessage($uid);
		$this->assign("hasMessage",$hasMessage);
		
		
		$nickname=$_GET['nickname'];

		

		import("ORG.Util.Page");            //导入分页类   
        $count = M('Article')->table("article a,user u")->where("u.nickname='$nickname' AND u.uid=a.uid")->count();
        $p = new Page ( $count, 10 );		   
        $list=M('Article')->table("article a,user u")->field("a.aid,a.title,a.content,a.time,a.hot,a.uid")->limit($p->firstRow.','.$p->listRows)->where("u.nickname='$nickname' AND u.uid=a.uid")->order('time desc')->select();
		$list=D('User')->addArticleInfo($list,$uid);
		//dump($count);
		//dump($list);
		
		$p->setConfig('header','篇记录');   
        $p->setConfig('prev',"<");   
        $p->setConfig('next','>');   
        $p->setConfig('first','<<');   
        $p->setConfig('last','>>'); 
        $page = $p->show ();   
        $this->assign ( "page", $page );   
        $this->assign ( "list", $list );   
		
		
		//获得个人信息，包括id，昵称，头像，关注博客数，标签数，喜欢文章数
        $user=D('User')->getUser($uid);
		$this->assign( "user", $user );   
		
		//获得推荐标签
		$recommendTags=D('User')->getrecommendTags($uid);
		$this->assign( "recommendTags", $recommendTags);
		
		//获得推荐博客
		$searchBlogs=D('User')->getsearchBlogs($nickname,$uid);
		$this->assign( "searchBlogs", $searchBlogs);
		
		
		$this->display();	
	}
	
	
	
	public function moreBlog(){
	    session_start();
		$uid=$_SESSION['user']['uid'];
		$hasMessage=D("User")->hasMessage($uid);
		$this->assign("hasMessage",$hasMessage);

		

		import("ORG.Util.Page");            //导入分页类   
        $count = M('Article')->count();
        $p = new Page ( $count, 10 );		   
        $list=M('Article')->limit($p->firstRow.','.$p->listRows)->order('time desc')->select();
		//dump($list);
		$list=D('User')->addArticleInfo($list,$uid);
		//dump($count);
		//dump($list);
		
		$p->setConfig('header','篇记录');   
        $p->setConfig('prev',"<");   
        $p->setConfig('next','>');   
        $p->setConfig('first','<<');   
        $p->setConfig('last','>>'); 
        $page = $p->show ();   
        $this->assign ( "page", $page );   
        $this->assign ( "list", $list );   
		
		
		//获得个人信息，包括id，昵称，头像，关注博客数，标签数，喜欢文章数
        $user=D('User')->getUser($uid);
		$this->assign( "user", $user );   
		
		//获得推荐标签
		$recommendTags=D('User')->getrecommendTags($uid);
		$this->assign( "recommendTags", $recommendTags);
		
		//获得推荐博客
		$moreBlogs=D('User')->getmoreBlogs($uid);
		$this->assign( "moreBlogs", $moreBlogs);
		
		
		$this->display();
	}
	public function searchTag(){
	    session_start();
		$uid=$_SESSION['user']['uid'];
		$hasMessage=D("User")->hasMessage($uid);
		$this->assign("hasMessage",$hasMessage);
		$tag=$_GET['tag'];

		

		import("ORG.Util.Page");            //导入分页类   
        $count = M('Article')->table("article a,attach at")->where("a.aid=at.aid AND at.tag='$tag'")->count();
        $p = new Page ( $count, 10 );		   
        $list=M('Article')->table("article a,attach at")->field("a.aid,a.title,a.content,a.time,a.hot,a.uid")->limit($p->firstRow.','.$p->listRows)->where("a.aid=at.aid AND at.tag='$tag'")->order('time desc')->select();
		$list=D('User')->addArticleInfo($list,$uid);
		//dump($count);
		//dump($list);
		
		$p->setConfig('header','篇记录');   
        $p->setConfig('prev',"<");   
        $p->setConfig('next','>');   
        $p->setConfig('first','<<');   
        $p->setConfig('last','>>'); 
        $page = $p->show ();   
        $this->assign ( "page", $page );   
        $this->assign ( "list", $list );   
		
		
		//获得个人信息，包括id，昵称，头像，关注博客数，标签数，喜欢文章数
        $user=D('User')->getUser($uid);
		$this->assign( "user", $user );   
		
		//获得推荐标签
		$searchTag['tag']=$tag;
		if(M('Liketag')->where("uid='$uid' AND tag='$tag'")->select()){
			$searchTag['like']="like";
		}else{
		   $searchTag['like']="notlike";	
		}
		$this->assign("searchTag",$searchTag);
		
		//获得推荐博客
		$recommendBlogs=D('User')->getrecommendBlogs($uid);
		$this->assign( "recommendBlogs", $recommendBlogs);
		
		
		$this->display();	
	}
	public function moreTag(){
	    session_start();
		$uid=$_SESSION['user']['uid'];
		$hasMessage=D("User")->hasMessage($uid);
		$this->assign("hasMessage",$hasMessage);

		

		import("ORG.Util.Page");            //导入分页类   
        $count = M('Article')->table("article a,attach at")->where("a.aid=at.aid")->count();
        $p = new Page ( $count, 10 );		   
        $list=M('Article')->distinct(true)->table("article a,attach at")->field("a.aid,a.title,a.content,a.time,a.hot,a.uid")->limit($p->firstRow.','.$p->listRows)->where("a.aid=at.aid")->order('time desc')->select();
		$list=D('User')->addArticleInfo($list,$uid);
		//dump($count);
		//dump($list);
		
		$p->setConfig('header','篇记录');   
        $p->setConfig('prev',"<");   
        $p->setConfig('next','>');   
        $p->setConfig('first','<<');   
        $p->setConfig('last','>>'); 
        $page = $p->show ();   
        $this->assign ( "page", $page );   
        $this->assign ( "list", $list );   
		
		
		//获得个人信息，包括id，昵称，头像，关注博客数，标签数，喜欢文章数
        $user=D('User')->getUser($uid);
		$this->assign( "user", $user );   
		
		//获得推荐标签
		
		$moreTags=M('Attach')->distinct(true)->field('tag')->select();
		for($i=0;$i<count($moreTags);$i++){
            $tag=$moreTags[$i]['tag'];
		    if(M('Liketag')->where("uid='$uid' AND tag='$tag'")->select()){
			    $moreTags[$i]['like']="like";
		    }else{
		        $moreTags[$i]['like']="notlike";	
		    }	
		}		
		$this->assign("moreTags",$moreTags);	
		
		//获得推荐博客
		$recommendBlogs=D('User')->getrecommendBlogs($uid);
		$this->assign( "recommendBlogs", $recommendBlogs);
		
		
		$this->display();	
	}
}
?>