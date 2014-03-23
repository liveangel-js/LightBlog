<?php
class UserModel extends Model{
    protected $_validate = array(
	    array('email','email','邮箱格式错误！'),
        array('email','','邮箱已被注册',1,'unique'),
        array('password','require','密码不能为空！'), 
		array('password','repassword','两次输入的密码不相同',0,'confirm'), 
        array('nickname','require','昵称不能为空！'), 
    );		
	
	
	protected $_auto = array ( 
        array('time','time',1,'function'),  
    );	
	
	public function getArticleIdListForIndex($uid){
		$aid1=M('Article')->field("aid")->where("uid='$uid'")->select();//自己发表的文章
		$aid2=M('Likearticle')->field("aid")->where("uid='$uid'")->select();//喜欢的文章
		$aid3=M('Liketag')->table("liketag l,attach a")->field("aid")->where("l.uid='$uid' AND l.tag=a.tag")->select();//关注的标签的文章
		$aid4=M('Follow')->table("follow f,article a")->field("aid")->where("f.uid1='$uid' AND a.uid=f.uid2")->select();//关注的人的文章


        $index=0;
		for($i=0;$i<count($aid1);$i++){
		    $aids[$index++]=$aid1[$i]["aid"];
		}
		for($i=0;$i<count($aid2);$i++){
		    $aids[$index++]=$aid2[$i]["aid"];
		}
		for($i=0;$i<count($aid3);$i++){
		    $aids[$index++]=$aid3[$i]["aid"];
		}
		for($i=0;$i<count($aid4);$i++){
		    $aids[$index++]=$aid4[$i]["aid"];
		}		
		if(!$aids){
		    return false;	
		}
		$aids=array_unique($aids);
		return $aids;
	}
	
	public function addArticleInfo($list,$uid){
		for($i=0;$i<count($list);$i++){
			$aid=$list[$i]["aid"];
			$auid=$list[$i]["uid"];
			$list[$i]["tags"]=M("Attach")->where("aid='$aid'")->select();
			$list[$i]["time"]=date("Y-m-d H:m:s",$list[$i]["time"]);
			$list[$i]["comment"]=M("Comment")->where("aid='$aid'")->count();
			$list[$i]["hot"]=M("Likearticle")->where("aid='$aid'")->count()+M("Comment")->where("aid='$aid'")->count();
			$list[$i]["user"]=M("User")->where("uid='$auid'")->select();
			$list[$i]["user"]=$list[$i]["user"][0];
			if($list[$i]["user"]['uid']==$uid){
			    $list[$i]["user"]['own']="none";
			}else{
			    $list[$i]["user"]['own']="notowm";	
			}
			$result=M('Likearticle')->where("uid='$uid' AND aid='$aid'")->select();
			if($result){
			    $list[$i]["like"]="likeArticle";	
			}else{
			    $list[$i]["like"]="notlikeArticle";	
			}
		}	
		return $list;
	}
	
	public function addInfo($vo,$uid){
			$aid=$vo["aid"];
			$auid=$vo["uid"];
			$vo["tags"]=M("Attach")->where("aid='$aid'")->select();
			$vo["time"]=date("Y-m-d H:m:s",$list[$i]["time"]);
			$vo["comment"]=M("Comment")->where("aid='$aid'")->count();
			$vo["hot"]=M("Likearticle")->where("aid='$aid'")->count()+M("Comment")->where("aid='$aid'")->count();
			$vo["user"]=M("User")->where("uid='$auid'")->select();
			$vo["user"]=$vo["user"][0];
			if($vo["user"]['uid']==$uid){
			    $vo["user"]['own']="none";
			}else{
			    $vo["user"]['own']="notowm";	
			}
			$result=M('Likearticle')->where("uid='$uid' AND aid='$aid'")->select();
			if($result){
			    $vo["like"]="likeArticle";	
			}else{
			    $vo["like"]="notlikeArticle";	
			}
			return $vo;			
	}
	
	public function getUser($uid){
		$user=M('User')->field("uid,nickname,avatar")->where("uid='$uid'")->select();
		$user=$user[0];
		$user["followNumbers"]=M("Follow")->where("uid1='$uid'")->count();
		$user["tagNumbers"]=M("Liketag")->where("uid='$uid'")->count();
		$user["articleNumbers"]=M("Likearticle")->where("uid='$uid'")->count();	
		return $user;
	}
	
	public function getrecommendTags($uid){
	    $recommendTags=M('Attach')->distinct(true)->field('tag')->order('rand()')->limit(4)->select();
		for($i=0;$i<count($recommendTags);$i++){
			$tag=$recommendTags[$i]['tag'];
		    if($result=M('Liketag')->where("uid='$uid' AND tag='$tag'")->select()){
				$recommendTags[$i]['like']="like";
			}else{
				$recommendTags[$i]['like']="notlike";
			}
		}
		return $recommendTags;	
	}
	public function getrecommendBlogs($uid){
		$recommendBlogs=M('User')->field('uid,nickname,avatar')->order('rand()')->where("uid<>'$uid'")->limit(4)->select();
		for($i=0;$i<count($recommendBlogs);$i++){
			$blog=$recommendBlogs[$i]['uid'];
		    if(M('Follow')->where("uid1='$uid' AND uid2='$blog'")->select()){
				$recommendBlogs[$i]['follow']="follow";
			}else{
				$recommendBlogs[$i]['follow']="notfollow";
			}
		}
		return $recommendBlogs; 			
	}
	public function getlikeBlogs($uid){
		$likeBlogs=M('User')->table("user u,follow f")->field('uid,nickname,avatar')->where("f.uid1='$uid' AND u.uid=f.uid2")->select();
		for($i=0;$i<count($likeBlogs);$i++){
			$likeBlogs[$i]['follow']="follow";
		}
		return $likeBlogs; 		
	}
	public function getlikeBlogsForVisit($uid1,$uid2){
		$likeBlogs=M('User')->table("user u,follow f")->field('uid,nickname,avatar')->where("f.uid1='$uid1' AND u.uid=f.uid2")->select();
		for($i=0;$i<count($likeBlogs);$i++){
			$blog=$likeBlogs[$i]['uid'];
		    if(M('Follow')->where("uid1='$uid2' AND uid2='$blog'")->select()){
				$likeBlogs[$i]['follow']="follow";
			}else{
				$likeBlogs[$i]['follow']="notfollow";
			}
			if($blog==$uid2){
				$likeBlogs[$i]['follow']="own";
			}
		}
		return $likeBlogs; 		
	}
	
	public function getlikeTags($uid){
	    $likeTags=M('Liketag')->distinct(true)->field('tag')->where("uid='$uid'")->select();
		for($i=0;$i<count($likeTags);$i++){
			$likeTags[$i]['like']="like";
		}
		return $likeTags;		
	}
	
	public function getlikeTagsForVisit($uid1,$uid2){
	    $likeTags=M('Liketag')->distinct(true)->field('tag')->where("uid='$uid1'")->select();
		for($i=0;$i<count($likeTags);$i++){
			$tag=$likeTags[$i]['tag'];
		    if($result=M('Liketag')->where("uid='$uid2' AND tag='$tag'")->select()){
				$likeTags[$i]['like']="like";
			}else{
				$likeTags[$i]['like']="notlike";
			}
		}
		return $likeTags;			
	}
	
	public function getsearchBlogs($nickname,$uid){
		$searchBlogs=M('User')->field('uid,nickname,avatar')->where("nickname='$nickname'")->order('rand()')->select();
		for($i=0;$i<count($searchBlogs);$i++){
			$blog=$searchBlogs[$i]['uid'];
		    if(M('Follow')->where("uid1='$uid' AND uid2='$blog'")->select()){
				$searchBlogs[$i]['follow']="follow";
			}else{
				$searchBlogs[$i]['follow']="notfollow";
			}
			if($blog==$uid){
				$searchBlogs[$i]['follow']="own";
			}
		}
		return $searchBlogs; 				
	}
	
	public function getmoreBlogs($uid){
		$moreBlogs=M('User')->field('uid,nickname,avatar')->order('rand()')->select();
		for($i=0;$i<count($moreBlogs);$i++){
			$blog=$moreBlogs[$i]['uid'];
		    if(M('Follow')->where("uid1='$uid' AND uid2='$blog'")->select()){
				$moreBlogs[$i]['follow']="follow";
			}else{
				$moreBlogs[$i]['follow']="notfollow";
			}
			if($blog==$uid){
				$moreBlogs[$i]['follow']="own";
			}
		}
		return $moreBlogs; 		
		
	}
	
	
	public function addMessage($uid,$content,$href){
		$data["uid"]=$uid;
		$data["content"]=$content;
		$data["href"]=$href;
		$data["readed"]=0;
		$data["time"]=time();	
		M("Message")->add($data);
	}
	
	
	public function getUserName($uid){
		$name=$this->where("uid='$uid'")->select();
		$name=$name[0]['nickname'];
		return $name;	
	}
	
	public function getUid($aid){
		$uid=M("Article")->where("aid='$aid'")->select();
		return $uid[0]['uid'];	
	}
	
	public function hasMessage($uid){
		if(M("Message")->where("uid='$uid' AND readed=0")->count()){
		    $hasMessage=1;	
		}else{
		    $hasMessage=0;	
		}
		return $hasMessage;
	}
}
?>