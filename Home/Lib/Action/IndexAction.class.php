<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
	/**
	 *未登录时候游客的主界面
	 */
    public function index(){
		$uid=-1;
		

		import("ORG.Util.Page");            //导入分页类   
        $count = M('Article')->count();
        $p = new Page ( $count, 10 );		   
        $list=M('Article')->limit($p->firstRow.','.$p->listRows)->order('time desc')->select();
		$list=D('User')->addArticleInfo($list,$uid);
		
		
		$p->setConfig('header','篇记录');   
        $p->setConfig('prev',"<");   
        $p->setConfig('next','>');   
        $p->setConfig('first','<<');   
        $p->setConfig('last','>>'); 
        $page = $p->show ();   
        $this->assign ( "page", $page );   
        $this->assign ( "list", $list );   
		
		
		
		//获得推荐标签
		$recommendTags=D('User')->getrecommendTags($uid);
		$this->assign( "recommendTags", $recommendTags);
		
		//获得推荐博客
		$recommendBlogs=D('User')->getrecommendBlogs($uid);
		$this->assign( "recommendBlogs", $recommendBlogs);
		$this->display();
    }	
	/**
	 *用户登陆界面
	 */	
	public function login(){
		$this->display();
	}	
	/**
	 *游客注册界面
	 */	
	public function register(){
		$this->display();
	}			
	/**
	 *登陆检查，如果登陆成功跳转到用户主界面
	 */		
    public function loginCheck() {
		//dump($_SESSION);
		//dump($_POST);
		if(md5($_POST['verify']) != $_SESSION['verify']){
			$this->error('验证码错误');	
			return;
		}
		$user=D('User');
		$email=$_POST['email'];
		$password=$_POST['password'];
	    $list=$user->where("email='$email' AND password='$password'")->select();
		//dump($email);
		//dump($password);
      // dump($list);
		if($list){
			session_start();
			//$_SESSION['uid']=$list[0]['uid'];
			//$_SESSION['nickname']=$list[0]['nickname'];
			$_SESSION['user']=$list[0];
			//dump($_SESSION);
			$this->success('登录成功','../User/index');
		}else{
		    $this->error('账户不存在');	
		}  
    }  
    /**
	 *注册检查，如注册陆成功跳转到用户主界面
	 */		
	public function registerCheck(){
		if(md5($_POST['verify']) != $_SESSION['verify']){
			$this->error('验证码错误');	
			return;
		}
		$user=new UserModel();
		$result=$user->create();
        if($result){
			$uid=$user->add();
			session_start();
			$user=D("User")->where("uid='$uid'")->select();
			$_SESSION['user']=$user[0];
            $this->success('注册成功','../User/index');
		}
        else {
            $this->error($user->getError());
		}
		
	}  
    // 生成验证码
    public function verify() {
		import("ORG.Util.Image");
        Image::buildImageVerify(4,1,'png',70,30);
    }		
}