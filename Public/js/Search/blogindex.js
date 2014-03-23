function follow(uid){
	var button=document.getElementById("follow"+uid);
	if(button.value=="添加关注"){
		button.value="取消关注";
		button.style.color="gray";
		var xhr=new XMLHttpRequest();
	    xhr.open("GET","http://localhost:8080/index.php/Ajax/likeBlog/uid/"+uid,true);
	    xhr.send(null);
	}else{
		button.value="添加关注";
		button.style.color="black";
		var xhr=new XMLHttpRequest();
	    xhr.open("GET","http://localhost:8080/index.php/Ajax/cancelLikeBlog/uid/"+uid,true);
	    xhr.send(null);
	}
	
}