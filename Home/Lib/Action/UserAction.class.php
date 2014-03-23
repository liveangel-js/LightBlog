<?php
// 本类由系统自动生成，仅供测试用途
class UserAction extends Action {
	/**
	 *用户主界面，显示发表的相关轻博客
	 */		
    public function index(){
	    session_start();
		$uid=$_SESSION['user']['uid'];
		$hasMessage=D("User")->hasMessage($uid);
		$this->assign("hasMessage",$hasMessage);
		$aids=D("User")->getArticleIdListForIndex($uid);
		
		if($aids){
		$map["aid"]=array('in',$aids);
		import("ORG.Util.Page");            //导入分页类   
        $count = count($aids);
        $p = new Page ( $count, 10 );		   
        $list=M('Article')->limit($p->firstRow.','.$p->listRows)->where($map)->order('time desc')->select();
		$list=D('User')->addArticleInfo($list,$uid);
		
		
		$p->setConfig('header','篇记录');   
        $p->setConfig('prev',"<");   
        $p->setConfig('next','>');   
        $p->setConfig('first','<<');   
        $p->setConfig('last','>>'); 
        $page = $p->show ();   
        $this->assign ( "page", $page );   
        $this->assign ( "list", $list );  			
		}else{
			
		}
		
		
 
		
		
		//获得个人信息，包括id，昵称，头像，关注博客数，标签数，喜欢文章数
        $user=D('User')->getUser($uid);
		$this->assign( "user", $user );   
		
		//获得推荐标签
		$recommendTags=D('User')->getrecommendTags($uid);
		$this->assign( "recommendTags", $recommendTags);
		
		//获得推荐博客
		$recommendBlogs=D('User')->getrecommendBlogs($uid);
		$this->assign( "recommendBlogs", $recommendBlogs);
		
		
		$this->display();
    }
	/**
	 *用户推出，回到游客主界面
	 */		
	public function logout(){
		session_destroy();
		unset($_SESSION);		
		$this->redirect("../Index/index");
	}
	
	
	public function likeBlog(){
	    session_start();
		$uid=$_SESSION['user']['uid'];
		$hasMessage=D("User")->hasMessage($uid);
		$this->assign("hasMessage",$hasMessage);
		
		//$aids=D("User")->getArticleIdListForIndex($uid);
		//$map["aid"]=array('in',$aids);
		import("ORG.Util.Page");            //导入分页类   
        $count = M('Article')->table("article a,follow f")->where("f.uid1='$uid' AND f.uid2=a.uid")->count();
        $p = new Page ( $count, 10 );		   
        $list=M('Article')->table("article a,follow f")->field("aid,title,content,time,a.uid,hot")->limit($p->firstRow.','.$p->listRows)->where("f.uid1='$uid' AND f.uid2=a.uid")->order('time desc')->select();
		$list=D('User')->addArticleInfo($list,$uid);
		
		
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
		
		//获得关注博客
		$likeBlogs=D('User')->getlikeBlogs($uid);
		$this->assign( "likeBlogs", $likeBlogs);
		
		
		$this->display();			
	}
	public function likeTag(){
	    session_start();
		$uid=$_SESSION['user']['uid'];
		$hasMessage=D("User")->hasMessage($uid);
		$this->assign("hasMessage",$hasMessage);
		

		import("ORG.Util.Page");            //导入分页类   
        $count = M('Article')->table("article a,liketag l,attach at")->where("l.uid='$uid' AND l.tag=at.tag AND at.aid=a.aid")->count();
        $p = new Page ( $count, 10 );	
		$list=M('Article')->table("article a,liketag l,attach at")->field("a.aid,a.title,a.content,a.time,a.uid,a.hot")->limit($p->firstRow.','.$p->listRows)->where("l.uid='$uid' AND l.tag=at.tag AND at.aid=a.aid")->order('time desc')->select();	   
		$list=D('User')->addArticleInfo($list,$uid);

		
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
		$likeTags=D('User')->getlikeTags($uid);
		$this->assign( "likeTags", $likeTags);
		
		//获得推荐博客
		$recommendBlogs=D('User')->getrecommendBlogs($uid);
		$this->assign( "recommendBlogs", $recommendBlogs);
		
		
		$this->display();		
	}
	public function likeArticle(){
	    session_start();
		$uid=$_SESSION['user']['uid'];
		$hasMessage=D("User")->hasMessage($uid);
		$this->assign("hasMessage",$hasMessage);		
		
		import("ORG.Util.Page");            //导入分页类   
        $count = M('Article')->table("article a,likearticle l")->where("l.uid='$uid' AND a.aid=l.aid")->count();
        $p = new Page ( $count, 10 );		   
        $list=M('Article')->table("article a,likearticle l")->field("a.aid,a.title,a.content,a.time,a.uid,a.hot")->where("l.uid='$uid' AND a.aid=l.aid")->limit($p->firstRow.','.$p->listRows)->order('time desc')->select();
		$list=D('User')->addArticleInfo($list,$uid);
		
		
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
		$recommendBlogs=D('User')->getrecommendBlogs($uid);
		$this->assign( "recommendBlogs", $recommendBlogs);
		
		
		$this->display();		
	}	
	public function visitBlog(){
        session_start();
		$uid=$_GET['uid'];			
		
		$hostid=$_SESSION['user']['uid'];
	    $hasMessage=D("User")->hasMessage($hostid);
		$this->assign("hasMessage",$hasMessage);
		if($uid==$hostid){
			$this->redirect("../User/home");
		}else{
		

		    import("ORG.Util.Page");            //导入分页类   
            $count = M('Article')->where("uid='$uid'")->count();
            $p = new Page ( $count, 10 );		   
            $list=M('Article')->limit($p->firstRow.','.$p->listRows)->where("uid='$uid'")->order('time desc')->select();
		    $list=D('User')->addArticleInfo($list,$hostid);
			//dump($count);
			//dump($list);
			//dump($uid);
		
		    $p->setConfig('header','篇记录');   
            $p->setConfig('prev',"<");   
            $p->setConfig('next','>');   
            $p->setConfig('first','<<');   
            $p->setConfig('last','>>'); 
            $page = $p->show ();   
            $this->assign ( "page", $page );   
            $this->assign ( "list", $list );   
		
		
		    //获得个人信息，包括id，昵称，头像，关注博客数，标签数，喜欢文章数
            $user=D('User')->getUser($hostid);
		    $this->assign( "user", $user );   
			
            $bloger=D('User')->getUser($uid);
			if(M("Follow")->where("uid1='$hostid' AND uid2='$uid'")->select()){
			    $bloger["follow"]="follow";	
			}else{
			   $bloger["follow"]="notfollow";	
			}
		    $this->assign( "bloger", $bloger );	
			
		    //获得关注标签
		    $likeTags=D('User')->getlikeTagsForVisit($uid,$hostid);
		    $this->assign( "likeTags", $likeTags);
		    //dump($likeTags);
		    //获关注荐博客
		    $likeBlogs=D('User')->getlikeBlogsForVisit($uid,$hostid);
		    $this->assign( "likeBlogs", $likeBlogs);			
			//dump($likeBlogs);
		
		
		    $this->display();				
			
		}
	}
	public function home(){
        session_start();
		$uid=$_SESSION['user']['uid'];
		$hasMessage=D("User")->hasMessage($uid);
		$this->assign("hasMessage",$hasMessage);		

		import("ORG.Util.Page");            //导入分页类   
        $count = M('Article')->where("uid='$uid'")->count();
        $p = new Page ( $count, 10 );		   
        $list=M('Article')->limit($p->firstRow.','.$p->listRows)->where("uid='$uid'")->order('time desc')->select();
		$list=D('User')->addArticleInfo($list,$uid);
		
		
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
		$recommendBlogs=D('User')->getrecommendBlogs($uid);
		$this->assign( "recommendBlogs", $recommendBlogs);
		
		
		$this->display();		
		
	}
	
	
	public function visitArticle(){
	    session_start();
		$uid=$_SESSION['user']['uid'];
		$aid=$_GET["aid"];	
		$hasMessage=D("User")->hasMessage($uid);
		$this->assign("hasMessage",$hasMessage);		
		$vo=M('Article')->where("aid='$aid'")->select();
		$vo=$vo[0];
		//dump($vo);
		$vo=D('User')->addInfo($vo,$uid);
		//dump($vo["user"]['uid']);
		//dump($uid);
		//dump($_SESSION);
		//dump($vo);
		
		$this->assign("vo",$vo);
		
		//获得个人信息，包括id，昵称，头像，关注博客数，标签数，喜欢文章数
        $user=D('User')->getUser($uid);
		$this->assign( "user", $user );   
		
		//获得推荐标签
		$recommendTags=D('User')->getrecommendTags($uid);
		$this->assign( "recommendTags", $recommendTags);
		
		//获得推荐博客
		$recommendBlogs=D('User')->getrecommendBlogs($uid);
		$this->assign( "recommendBlogs", $recommendBlogs);
		
		
		$this->display();			
	}
	
	public function message(){
	    session_start();
		$uid=$_SESSION['user']['uid'];
		$hasMessage=D("User")->hasMessage($uid);
		$this->assign("hasMessage",$hasMessage);
		
				
        import("ORG.Util.Page");            //导入分页类   
        $count = M('Message')->where("uid='$uid'")->count();
        $p = new Page ( $count, 10 );		   
        $list=M('Message')->limit($p->firstRow.','.$p->listRows)->where("uid='$uid'")->order('time desc')->select();
		for($i=0;$i<count($list);$i++){
			$list[$i]["time"]=date("Y-m-d H:m:s",$list[$i]["time"]);	
		}
		$p->setConfig('header','条记录');   
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
		$recommendBlogs=D('User')->getrecommendBlogs($uid);
		$this->assign( "recommendBlogs", $recommendBlogs);
		
		
		$this->display();
	}
	
	public function setting(){
	    session_start();
		$uid=$_SESSION['user']['uid'];
		$hasMessage=D("User")->hasMessage($uid);
		$this->assign("hasMessage",$hasMessage);
		
				
		
		//获得个人信息，包括id，昵称，头像，关注博客数，标签数，喜欢文章数
        $user=D('User')->getUser($uid);
		$email=D('User')->where("uid='$uid'")->select();
		$user['email']=$email[0]['email'];
		$this->assign( "user", $user );   
		
		//获得推荐标签
		$recommendTags=D('User')->getrecommendTags($uid);
		$this->assign( "recommendTags", $recommendTags);
		
		//获得推荐博客
		$recommendBlogs=D('User')->getrecommendBlogs($uid);
		$this->assign( "recommendBlogs", $recommendBlogs);
		
		
		$this->display();		
	}
	public function setPassword(){
	    session_start();
		$uid=$_SESSION['user']['uid'];
		$password=$_POST['oldpassword'];
		$data['password']=$_POST['newpassword'];
		$repassword=$_POST['repassword'];
		if($data['password']!=$repassword){
			$this->error('两次输入的密码不同');
			return;
		}
		if(!$data['password']){
			$this->error('新密码不能为空');
			return;		
		}
		if(!M('User')->where("uid='$uid' AND password='$password'")->select()){
			$this->error('密码错误');
			return;					
		}
		M('User')->where("uid='$uid'")->save($data);
		$this->success('修改成功','../User/index');
		
	}
	
	public function setAvatar(){
	    session_start();
		$uid=$_SESSION['user']['uid'];
	    import("ORG.Net.UploadFile"); 
        $upload = new UploadFile(); // 实例化上传类 
        $upload->maxSize = 3145728 ; // 设置附件上传大小 
        $upload->allowExts = array('jpg', 'gif', 'png', 'jpeg'); // 设置附件上传类型 
		$upload->saveRule='uniqid';
        $upload->savePath = './Public/upload/'; // 设置附件上传目录 
		//$upload->thumb = true ;
		//$upload->isfixed=false;
        //$upload->thumbMaxWidth = "64";
        //$upload->thumbMaxHeight = "64";
        if(!$upload->upload()) { // 上传错误 提示错误信息 
            $this->error($upload->getErrorMsg()); 
       }else{ // 上传成功 获取上传文件信息 
            $info = $upload->getUploadFileInfo(); 
			//dump($info);
       } 	
	   
	   $filename=$info[0]["savepath"].$info[0]["savename"];
		list($width, $height) = getimagesize($filename);
		$new_width = "64";
        $new_height= "64";
        $image_new = imagecreatetruecolor($new_width, $new_height);
		//imagealphablending($image_p,true);
       // imagesavealpha($image_p,true);
		$back=imagecolorallocatealpha($image_new,255,255,255,127);
        imagefill($image_new,0,0,$back);
		//imagefilledrectangle($image_p, 0, 0, $size - 1, $size - 1, $back);
			   
	   if($info[0]['type']=="image/jpeg"){	 
           $image = imagecreatefromjpeg($filename);
           imagecopyresampled($image_new, $image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
		   imagejpeg($image_new,$info[0]["savepath"].$info[0]["savename"]);	    
	   }
       if($info[0]['type']=="image/png"){	
	       $image = imagecreatefrompng($filename);
           imagecopyresampled($image_new, $image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
		   imagepng($image_new,$info[0]["savepath"].$info[0]["savename"]);	
	   }
       if($info[0]['type']=="image/gif"){	
	       
          // $image = new Imagick(filename);
         //  $image = $image->coalesceImages();
         //  foreach ($image as $frame) {
         //      $frame->thumbnailImage(50, 50);
         //  }
          // $image = $image->optimizeImageLayers();
         //  $image->writeImages('new.gif', true);
		 $image = imagecreatefromgif($filename);
           imagecopyresampled($image_new, $image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
		   imagegif($image_new,$info[0]["savepath"].$info[0]["savename"]);			   
	   }
	   $data['avatar']='/Public/upload/'.$info[0]["savename"];
	   M('User')->where("uid='$uid'")->save($data);
	   $this->success('修改成功','../User/index');

	   


		
	//*	
		$avatar=$_FILES['avatar'];
	//	echo "Upload: " . $_FILES["avatar"]["name"] . "<br />";
   //     echo "Type: " . $_FILES["avatar"]["type"] . "<br />";
    //    echo "Size: " . ($_FILES["avatar"]["size"] / 1024) . " Kb<br />";
    //    echo "Temp file: " . $_FILES["avatar"]["tmp_name"] . "<br />";
	//	echo $avatar["name"]; // */
	}
}
?>