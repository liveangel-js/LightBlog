<?php
class ArticleModel extends Model{
	
	public function getArticleListForIndex($index,$number){
		$list=$this->order('time')->limit($number)->select();	
		return $list;    
	}
		
    public function getArticleListForUser($index,$number,$uid){
			
	}

    public function getUserArticleList($index,$number,$uid){
		$list=$this->where("uid='$uid'")->order('time desc')->limit($number)->select();	
		return $list; 
	}	
}
?>