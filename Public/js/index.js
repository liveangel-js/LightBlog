var reuid;

function getComment(aid){
	var reArticle_div=document.getElementById(aid+"reArticle");
	reArticle_div.style.display='none';
	var comment_div=document.getElementById(aid);
	if(comment_div.style.display=='block'){
		comment_div.style.display='none';
		//alert("收起评论");
	}else{
		//alert("开始展开评论");
		var comments=document.getElementById(aid+'list');
	    if(comments.innerHTML!=""){
			comment_div.style.display='block';
			//alert("无评论");
		    return;	
		}
		var xhr=new XMLHttpRequest();
		comment_div.style.display='block';
		xhr.onreadystatechange=function(){
		    if(xhr.readyState==4&&xhr.status==200){
	            var text=xhr.responseText;
				//alert(text);
                var json=eval('('+text+')');
				var data=json.data;		
				if(data==null){
				    //comment_div.style.display='block';	
					return;
				}
				for(var i=0;i<data.length;i++){
                    //alert(data[i].nickname+":"+data[i].content);
			        var li=document.createElement("li");
					var a=document.createElement("a");
					var img=document.createElement("img");
					img.src=data[i].avatar;
					img.style.width="25px";
					img.style.height="25px";
					a.href="../User/visitBlog/uid/"+data[i].uid;
					a.title=data[i].nickname;
					a.className="commentItemAvatar";
					a.appendChild(img);
			        var content=document.createElement("span");
					var time=document.createElement("span");
			        content.innerHTML=data[i].content;
					time.innerHTML=getTimeString(data[i].time);
					content.className="commentItemContent";
					time.className="commentItemTime";
					var button=document.createElement("input");
					button.type="button";
					button.value="回复";
					button.style.cssFloat="right";
					//alert(data[i].nickname);
					var cuid=data[i].uid;
					var n=data[i].nickname;
					button.onclick=function(){
					    respondcomment(aid,n);	
						reuid=cuid;
					};
					li.appendChild(a);
			        li.appendChild(content);
					li.appendChild(button);
					li.appendChild(time);
					li.className="commentItem";
			        comments.appendChild(li);
				}
				//alert("评论加载完成");
				//comment_div.style.display='block';
	        }			
		};
		xhr.open("GET","http://localhost:8080/index.php/Ajax/getComment/aid/"+aid,true);
		xhr.send(null);
	}
}
function respondcomment(aid,nickname){
	//alert(aid+nickname);
	var div=document.getElementById(aid+"respondcomment");
	div.style.display="block";
	var button=document.getElementById(aid+"rebutton");	
	button.value="@"+nickname;	
	//alert(aid+nickname);	
}

function readdComment(aid,uid,nickname,avatar){
	var atSB=document.getElementById(aid+"rebutton").value;
	var commentButton=document.getElementById(aid+'commentButton');
	commentButton.innerHTML=parseInt(commentButton.innerHTML)+1;
	var hotButton=document.getElementById(aid+'hotButton');
	hotButton.innerHTML=parseInt(hotButton.innerHTML)+1;
	var comments=document.getElementById(aid+'list');
	var input=atSB+":"+document.getElementById(aid+'reinput').value;	
	var li=document.createElement("li");
	var a=document.createElement("a");
	var img=document.createElement("img");
	img.src=avatar;
	img.style.width="25px";
	img.style.height="25px";
	a.href="../User/visitBlog/uid/"+uid;
	a.title=nickname;
	a.className="commentItemAvatar";
	a.appendChild(img);
	var content=document.createElement("span");
	var time=document.createElement("span");
	content.innerHTML=input;
	time.innerHTML=getTimeString(new Date().getTime()/1000);
	content.className="commentItemContent";
	time.className="commentItemTime";
	
	var button=document.createElement("input");
	button.type="button";
	button.value="回复";
	button.style.cssFloat="right";
	//alert(data[i].nickname);
	//var n=data[i].nickname;
	button.onclick=function(){
		respondcomment(aid,nickname);	
	};
	
	li.appendChild(a);
	li.appendChild(content);
	li.appendChild(button);
	li.appendChild(time);
	li.className="commentItem";
	if(comments.childNodes.length==0){
		comments.appendChild(li);
	}else{
	    comments.insertBefore(li,comments.firstChild);	
	}
	
    var xhr=new XMLHttpRequest();
	xhr.open("GET","http://localhost:8080/index.php/Ajax/readdComment/aid/"+aid+"/comment/"+input+"/uid/"+reuid,true);
	xhr.send(null);	
}

function addComment(aid,uid,nickname,avatar){
	var commentButton=document.getElementById(aid+'commentButton');
	commentButton.innerHTML=parseInt(commentButton.innerHTML)+1;
	var hotButton=document.getElementById(aid+'hotButton');
	hotButton.innerHTML=parseInt(hotButton.innerHTML)+1;
	var comments=document.getElementById(aid+'list');
	var input=document.getElementById(aid+'input').value;	
	var li=document.createElement("li");
	var a=document.createElement("a");
	var img=document.createElement("img");
	img.src=avatar;
	img.style.width="25px";
	img.style.height="25px";
	a.href="../User/visitBlog/uid/"+uid;
	a.title=nickname;
	a.className="commentItemAvatar";
	a.appendChild(img);
	var content=document.createElement("span");
	var time=document.createElement("span");
	content.innerHTML=input;
	time.innerHTML=getTimeString(new Date().getTime()/1000);
	content.className="commentItemContent";
	time.className="commentItemTime";
	
	var button=document.createElement("input");
	button.type="button";
	button.value="回复";
	button.style.cssFloat="right";
	//alert(data[i].nickname);
	//var n=data[i].nickname;
	button.onclick=function(){
		respondcomment(aid,nickname);	
	};
	
	li.appendChild(a);
	li.appendChild(content);
	li.appendChild(button);
	li.appendChild(time);
	li.className="commentItem";
	if(comments.childNodes.length==0){
		comments.appendChild(li);
	}else{
	    comments.insertBefore(li,comments.firstChild);	
	}
	
    var xhr=new XMLHttpRequest();
	xhr.open("GET","http://localhost:8080/index.php/Ajax/addComment/aid/"+aid+"/comment/"+input,true);
	xhr.send(null);
}

function getTimeString(span){
	var time="";
	var date=new Date(span*1000);
    time = (date.getMonth()+1)+"-"+date.getDate()+" "+date.getHours()+":"+date.getMinutes();
	return time;
}


function like(aid){	
	var comments=document.getElementById(aid+'like');
	if(comments.className=="notlikeArticle")	{
		comments.className="likeArticle";
		addarticleNumbers(1);
	    var hotButton=document.getElementById(aid+'hotButton');
	    hotButton.innerHTML=parseInt(hotButton.innerHTML)+1;
		var xhr=new XMLHttpRequest();	
	    xhr.open("GET","http://localhost:8080/index.php/Ajax/likeArticle/aid/"+aid,true);
	    xhr.send(null);
	}else{
		comments.className="notlikeArticle";
		var hotButton=document.getElementById(aid+'hotButton');
	    hotButton.innerHTML=parseInt(hotButton.innerHTML)-1;
		addarticleNumbers(-1);
		var xhr=new XMLHttpRequest();	
	    xhr.open("GET","http://localhost:8080/index.php/Ajax/cancelLikeArticle/aid/"+aid,true);
	    xhr.send(null);
	}
}
function openArticle(aid){
	var comment_div=document.getElementById(aid);
	comment_div.style.display='none';
    var reArticle_div=document.getElementById(aid+"reArticle");
	if(reArticle_div.style.display=='block'){
		reArticle_div.style.display='none';
	}else{
		reArticle_div.style.display='block';
	}
}
function reArticle(aid){
	var inputReArticle=document.getElementById(aid+"inputReArticle").value;
	alert("转载成功");
	var reArticle_div=document.getElementById(aid+"reArticle");
	reArticle_div.style.display='none';
    var xhr=new XMLHttpRequest();
	xhr.onreadystatechange=function(){
		if(xhr.readyState==4&&xhr.status==200){
	        var text=xhr.responseText;
		    //alert(text);	
		}
	};
	xhr.open("GET","http://localhost:8080/index.php/Ajax/reArtile/aid/"+aid+"/comment/"+inputReArticle,true);
	xhr.send(null);
}
function likeTag(tag){
	var tagElement=document.getElementById("tag"+tag);
	if(tagElement.className=="taglikeicon"){
		tagElement.className="tagnotlikeicon";
		addtagNumbers(-1);
		var xhr=new XMLHttpRequest();
	    xhr.open("GET","http://localhost:8080/index.php/Ajax/cancelLikeTag/tag/"+tag,true);
	    xhr.send(null);
	}else{
	    tagElement.className="taglikeicon";
		addtagNumbers(1);
		var xhr=new XMLHttpRequest();
	    xhr.open("GET","http://localhost:8080/index.php/Ajax/likeTag/tag/"+tag,true);
	    xhr.send(null);
	}
	return false;
}
function followBlog(blog){
	//alert("blog");
	var blogElement=document.getElementById("blog"+blog);
	if(blogElement.className=="blogfollowicon"){
		blogElement.className="blognotfollowicon";
		addfollowNumbers(-1);
		var xhr=new XMLHttpRequest();
	    xhr.open("GET","http://localhost:8080/index.php/Ajax/cancelLikeBlog/uid/"+blog,true);
	    xhr.send(null);
	}else{
	    blogElement.className="blogfollowicon";
		addfollowNumbers(1);
		var xhr=new XMLHttpRequest();
	    xhr.open("GET","http://localhost:8080/index.php/Ajax/likeBlog/uid/"+blog,true);
	    xhr.send(null);
	}
	return false;
}
function addfollowNumbers(number){
	var span=document.getElementById("followNumbers");
	span.innerHTML=parseInt(span.innerHTML)+number;
}
function addtagNumbers(number){
	var span=document.getElementById("tagNumbers");
	span.innerHTML=parseInt(span.innerHTML)+number;
}
function addarticleNumbers(number){
	var span=document.getElementById("articleNumbers");
	span.innerHTML=parseInt(span.innerHTML)+number;
}

function nofun(){
	alert("该功能激将开放，敬请期待~~");	
}
function help(){
	alert("获取相关帮助，请发邮件至 524262909@qq.com");	
}
function likeTagForVisitor(tag){
	var tagElement=document.getElementById("tag"+tag);
	if(tagElement.className=="taglikeicon"){
		tagElement.className="tagnotlikeicon";
		//addtagNumbers(-1);
		var xhr=new XMLHttpRequest();
	    xhr.open("GET","http://localhost:8080/index.php/Ajax/cancelLikeTag/tag/"+tag,true);
	    xhr.send(null);
	}else{
	    tagElement.className="taglikeicon";
		//addtagNumbers(1);
		var xhr=new XMLHttpRequest();
	    xhr.open("GET","http://localhost:8080/index.php/Ajax/likeTag/tag/"+tag,true);
	    xhr.send(null);
	}
	return false;	
}

function followBlogForVisitor(blog){
	//alert("blog");
	var blogElement=document.getElementById("blog"+blog);
	if(blogElement.className=="blogfollowicon"){
		blogElement.className="blognotfollowicon";
		//addfollowNumbers(-1);
		var xhr=new XMLHttpRequest();
	    xhr.open("GET","http://localhost:8080/index.php/Ajax/cancelLikeBlog/uid/"+blog,true);
	    xhr.send(null);
	}else{
	    blogElement.className="blogfollowicon";
		//addfollowNumbers(1);
		var xhr=new XMLHttpRequest();
	    xhr.open("GET","http://localhost:8080/index.php/Ajax/likeBlog/uid/"+blog,true);
	    xhr.send(null);
	}
	return false;	
}