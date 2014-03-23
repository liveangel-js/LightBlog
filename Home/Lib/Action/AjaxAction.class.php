<?php
class AjaxAction extends Action {	
    public function likeTag(){
		session_start();
		header("Content-Type:text/plain");
		$data['uid']=$_SESSION['user']['uid'];
		$data['tag']=$_GET['tag'];
		$data=M('Liketag')->add($data);
		$this->ajaxReturn($data,"成功",1);
	}
	public function cancelLikeTag(){
		session_start();
		header("Content-Type:text/plain");
		$uid=$_SESSION['user']['uid'];
		$tag=$_GET['tag'];
		$data=M('Liketag')->where("uid='$uid' AND tag='$tag'")->delete();
				
		$this->ajaxReturn($data,"成功",1);		
	}
	public function likeBlog(){
		session_start();
		header("Content-Type:text/plain");
		$data['uid1']=$_SESSION['user']['uid'];
		$data['uid2']=$_GET['uid'];
		$data=M('Follow')->add($data);
		
		$uid=$_GET['uid'];
		$content=D('User')->getUserName($_SESSION['user']['uid'])."关注了你的博客";
		$href="__URL__/../User/visitBlog/uid/".$_SESSION['user']['uid'];
		D('User')->addMessage($uid,$content,$href);
		$this->ajaxReturn($data,"成功",1);		
	}
	public function cancelLikeBlog(){
		session_start();
		header("Content-Type:text/plain");
		$uid1=$_SESSION['user']['uid'];
		$uid2=$_GET['uid'];
		$data=M('Follow')->where("uid1='$uid1' AND uid2='$uid2'")->delete();
		
		$uidreceiver=$_GET['uid'];
		$content=D('User')->getUserName($_SESSION['user']['uid'])."取消关注了你的博客";
		$href="__URL__/../User/visitBlog/uid/".$_SESSION['user']['uid'];
		D('User')->addMessage($uidreceiver,$content,$href);
		
		
		
		$this->ajaxReturn($data,"成功",1);					
	}	
	public function likeArticle(){
	    session_start();
		header("Content-Type:text/plain");
		$data["uid"]=$_SESSION['user']['uid'];
		$data["aid"]=$_GET["aid"];
		$Likearticle=M('Likearticle');
		$data=$Likearticle->add($data);
			
		$this->ajaxReturn($data,"成功",1);
	}
	public function cancelLikeArticle(){
	    session_start();
		header("Content-Type:text/plain");
		$uid=$_SESSION['user']['uid'];
		$aid=$_GET["aid"];
		$data=M('Likearticle')->where("uid='$uid' AND aid='$aid'")->delete();
		$this->ajaxReturn($data,"成功",1);
	}	
	public function getComment(){	
	    session_start();
		header("Content-Type:text/plain");
		$aid=$_GET["aid"];
		$data=M('User')->join('comment ON comment.uid = user.uid')->where("aid='$aid'")->field('comment.uid,content,comment.time,avatar,nickname')->order("time desc")->select();
		$this->ajaxReturn($data,"成功",1);
	}	
	public function addComment(){
	    session_start();
		header("Content-Type:text/plain");
		$data["uid"]=$_SESSION['user']['uid'];
		$data["aid"]=$_GET["aid"];
		$data["content"]=$_GET["comment"];
		$data["time"]=time();
		$data=M('Comment')->add($data);
		
		$uidreceiver=D('User')->getUid($_GET["aid"]);
		if($uidreceiver!=$_SESSION['user']['uid']){
		    $content=D('User')->getUserName($_SESSION['user']['uid'])."在你的文章中回复了你";
		    $href="__URL__/../User/visitArticle/aid/".$_GET["aid"];
		    D('User')->addMessage($uidreceiver,$content,$href);			
		}

				
		$this->ajaxReturn($data,"成功",1);
	} 	
	public function readdComment(){
	    session_start();
		header("Content-Type:text/plain");
		$data["uid"]=$_SESSION['user']['uid'];
		$data["aid"]=$_GET["aid"];
		$data["content"]=$_GET["comment"];
		$data["time"]=time();
		$data=M('Comment')->add($data);
		
		if($_GET['uid']!=$_SESSION['user']['uid']){
		    $uidreceiver=$_GET['uid'];
		    $content=D('User')->getUserName($_SESSION['user']['uid'])."在文章中提到了了你";
		    $href="__URL__/../User/visitArticle/aid/".$_GET["aid"];
		    D('User')->addMessage($uidreceiver,$content,$href);			
		}
		
				
		$this->ajaxReturn($data,"成功",1);
	} 		
	public function reArtile(){
	    session_start();
		header("Content-Type:text/plain");
		$comment=$_GET["comment"];
		$aid=$_GET["aid"];
		$tags=M('Attach')->field('tag')->where("aid='$aid'")->select();
		$article=M('Article')->where("aid='$aid'")->select();
		$article=$article[0];
		$auid=$article["uid"];
		$nickname=M('User')->where("uid='$auid'")->select();
		$nickname=$nickname[0]["nickname"];
		$data["uid"]=$_SESSION['user']['uid'];
		$data["title"]=$article["title"];
		$data["content"]="<div>$comment</div><div>转载自<a href='../User/visitBlog/uid/{$auid}'>$nickname<a/></div>".$article["content"];
		$data["time"]=time();
		$data["hot"]=0;
		$data=M('Article')->add($data);
		$attach=M('Attach');
		if($tags){
		    for($i=0;$i<count($tags);$i++){
			    $tag["aid"]=$data;
				$tag["tag"]=$tags[$i]["tag"];
				$attach->add($tag);
			}
		}
		$this->ajaxReturn($tags,"成功",1);
	}	
	public function readMessage(){
	    session_start();
		header("Content-Type:text/plain");		
		$mid=$_GET["mid"];		
		$data["readed"]=1;
		$data=M("Message")->where("mid='$mid'")->save($data);
		$this->ajaxReturn($data,"成功",1);
	}
}
?>