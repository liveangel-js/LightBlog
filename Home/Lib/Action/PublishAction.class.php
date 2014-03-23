<?php
class PublishAction extends Action {
	/**
	 *编辑文字类轻博客
	 */		
	public function wordEdit(){
		session_start();
	    $uid=$_SESSION['user']['uid'];
		$hasMessage=D("User")->hasMessage($uid);
		$this->assign("hasMessage",$hasMessage);
		//dump($hasMessage);
		
		$this->assign("user",$_SESSION['user']);
		$this->display();
	}
	
	
	/**
	 *发表辑文字类轻博客
	 */		
	public function wordPublish(){
	    session_start();
		$uid=$_SESSION['user']['uid'];
		$hasMessage=D("User")->hasMessage($uid);
		$this->assign("hasMessage",$hasMessage);
		
		$data["title"]=$_POST["title"];
		//$data["content"]=htmlspecialchars(stripslashes($_POST['editor']));
		$data["content"]=$_POST['editor'];
		$data["time"]=time();
		$data["uid"]=$_SESSION['user']['uid'];
		$article=D('Article');
		$aid=$article->add($data);

		
		$attachModel=D('Attach');
		$tags=$_POST["tags"];
		if($tags!=""){
			$tag=split ("-", $tags);
		    for($i=0;$i<count($tag);$i++){
				if($tag[$i]==""){
				    continue;	
				}
			    $attachItem["aid"]=$aid;
			    $attachItem["tag"]=$tag[$i];
				$attachModel->add($attachItem);
		    }
		}
		$list=$article->getUserArticleList(0,100,$_SESSION['uid']);
		$this->assign("list",$list);
		$this->redirect("../User/index");
	}
	/**
	 *编辑图片类轻博客
	 */		
	public function pictureEdit(){
		session_start();
		$uid=$_SESSION['user']['uid'];
		$hasMessage=D("User")->hasMessage($uid);
		$this->assign("hasMessage",$hasMessage);
		$this->assign("user",$_SESSION['user']);
		$this->display();
	}
	/**
	 *发表图片字类轻博客
	 */		
	public function picturePublish(){
	    session_start();
		$uid=$_SESSION['user']['uid'];
		$hasMessage=D("User")->hasMessage($uid);
		$this->assign("hasMessage",$hasMessage);
		$data["title"]=$_POST["title"];
		//$data["content"]=htmlspecialchars(stripslashes($_POST['editor']));
		$data["content"]=$_POST['editor'];
		$data["time"]=time();
		$data["uid"]=$_SESSION['user']['uid'];
		$article=D('Article');
		$aid=$article->add($data);

		
		$attachModel=D('Attach');
		$tags=$_POST["tags"];
		if($tags!=""){
			$tag=split ("-", $tags);
		    for($i=0;$i<count($tag);$i++){
				if($tag[$i]==""){
				    continue;	
				}
			    $attachItem["aid"]=$aid;
			    $attachItem["tag"]=$tag[$i];
				$attachModel->add($attachItem);
		    }
		}
		$list=$article->getUserArticleList(0,100,$_SESSION['uid']);
		$this->assign("list",$list);
		$this->redirect("../User/index");
	}	
	/**
	 *编辑链接类轻博客
	 */		
	public function linkEdit(){
		session_start();
		$uid=$_SESSION['user']['uid'];
		$hasMessage=D("User")->hasMessage($uid);
		$this->assign("hasMessage",$hasMessage);
		$this->assign("user",$_SESSION['user']);
		$this->display();
	}
	/**
	 *发表辑链接类轻博客
	 */		
	public function linkPublish(){
	    session_start();
		$uid=$_SESSION['user']['uid'];
		$hasMessage=D("User")->hasMessage($uid);
		$this->assign("hasMessage",$hasMessage);
		$data["title"]=$_POST["title"];
		//$data["content"]=htmlspecialchars(stripslashes($_POST['editor']));
		$data["content"]=$_POST['editor'];
		$data["time"]=time();
		$data["uid"]=$_SESSION['user']['uid'];
		$article=D('Article');
		$aid=$article->add($data);

		
		$attachModel=D('Attach');
		$tags=$_POST["tags"];
		if($tags!=""){
			$tag=split ("-", $tags);
		    for($i=0;$i<count($tag);$i++){
				if($tag[$i]==""){
				    continue;	
				}
			    $attachItem["aid"]=$aid;
			    $attachItem["tag"]=$tag[$i];
				$attachModel->add($attachItem);
		    }
		}
		$list=$article->getUserArticleList(0,100,$_SESSION['uid']);
		$this->assign("list",$list);
		$this->redirect("../User/index");
	}	
	/**
	 *编辑引用类轻博客
	 */		
	public function quoteEdit(){
		session_start();
		$uid=$_SESSION['user']['uid'];
		$hasMessage=D("User")->hasMessage($uid);
		$this->assign("hasMessage",$hasMessage);
		$this->assign("user",$_SESSION['user']);
		$this->display();
	}
	/**
	 *发表辑引用类轻博客
	 */		
	public function quotePublish(){
	    session_start();
		$uid=$_SESSION['user']['uid'];
		$hasMessage=D("User")->hasMessage($uid);
		$this->assign("hasMessage",$hasMessage);
		$data["title"]=$_POST["title"];
		//$data["content"]=htmlspecialchars(stripslashes($_POST['editor']));
		$data["content"]=$_POST['editor'];
		$data["time"]=time();
		$data["uid"]=$_SESSION['user']['uid'];
		$article=D('Article');
		$aid=$article->add($data);

		
		$attachModel=D('Attach');
		$tags=$_POST["tags"];
		if($tags!=""){
			$tag=split ("-", $tags);
		    for($i=0;$i<count($tag);$i++){
				if($tag[$i]==""){
				    continue;	
				}
			    $attachItem["aid"]=$aid;
			    $attachItem["tag"]=$tag[$i];
				$attachModel->add($attachItem);
		    }
		}
		$list=$article->getUserArticleList(0,100,$_SESSION['uid']);
		$this->assign("list",$list);
		$this->redirect("../User/index");
	}
	/**
	 *编辑引用类轻博客
	 */		
	public function musicEdit(){
		session_start();
		$uid=$_SESSION['user']['uid'];
		$hasMessage=D("User")->hasMessage($uid);
		$this->assign("hasMessage",$hasMessage);
		$this->assign("user",$_SESSION['user']);
		$this->display();
	}
	/**
	 *发表辑引用类轻博客
	 */		
	public function musicPublish(){
	    session_start();
		$uid=$_SESSION['user']['uid'];
		$hasMessage=D("User")->hasMessage($uid);
		$this->assign("hasMessage",$hasMessage);
		$data["title"]=$_POST["title"];
		//$data["content"]=htmlspecialchars(stripslashes($_POST['editor']));
		$data["content"]=$_POST['editor'];
		$data["time"]=time();
		$data["uid"]=$_SESSION['user']['uid'];
		$article=D('Article');
		$aid=$article->add($data);

		
		$attachModel=D('Attach');
		$tags=$_POST["tags"];
		if($tags!=""){
			$tag=split ("-", $tags);
		    for($i=0;$i<count($tag);$i++){
				if($tag[$i]==""){
				    continue;	
				}
			    $attachItem["aid"]=$aid;
			    $attachItem["tag"]=$tag[$i];
				$attachModel->add($attachItem);
		    }
		}
		$list=$article->getUserArticleList(0,100,$_SESSION['uid']);
		$this->assign("list",$list);
		$this->redirect("../User/index");
	}	
	/**
	 *编辑引用类轻博客
	 */		
	public function videoEdit(){
		session_start();
		$uid=$_SESSION['user']['uid'];
		$hasMessage=D("User")->hasMessage($uid);
		$this->assign("hasMessage",$hasMessage);
		$this->assign("user",$_SESSION['user']);
		$this->display();
	}
	/**
	 *发表辑引用类轻博客
	 */		
	public function videoPublish(){
	    session_start();
		$uid=$_SESSION['user']['uid'];
		$hasMessage=D("User")->hasMessage($uid);
		$this->assign("hasMessage",$hasMessage);
		$data["title"]=$_POST["title"];
		//$data["content"]=htmlspecialchars(stripslashes($_POST['editor']));
		$data["content"]=$_POST['editor'];
		$data["time"]=time();
		$data["uid"]=$_SESSION['user']['uid'];
		$article=D('Article');
		$aid=$article->add($data);

		
		$attachModel=D('Attach');
		$tags=$_POST["tags"];
		if($tags!=""){
			$tag=split ("-", $tags);
		    for($i=0;$i<count($tag);$i++){
				if($tag[$i]==""){
				    continue;	
				}
			    $attachItem["aid"]=$aid;
			    $attachItem["tag"]=$tag[$i];
				$attachModel->add($attachItem);
		    }
		}
		$list=$article->getUserArticleList(0,100,$_SESSION['uid']);
		$this->assign("list",$list);
		$this->redirect("../User/index");
	}				
}

?>