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
					a.title=data[i].nickname;
					a.className="commentItemAvatar";
					a.appendChild(img);
			        var content=document.createElement("span");
					var time=document.createElement("span");
			        content.innerHTML=data[i].content;
					time.innerHTML=getTimeString(data[i].time);
					content.className="commentItemContent";
					time.className="commentItemTime";
					li.appendChild(a);
			        li.appendChild(content);
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

function addComment(aid,uid,nickname,avatar){
	login();
}

function getTimeString(span){
	var time="";
	var date=new Date(span*1000);
    time = (date.getMonth()+1)+"-"+date.getDate()+" "+date.getHours()+":"+date.getMinutes();
	return time;
}


function like(aid){	
    login();
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
    login();
}
function likeTag(tag){
    login();
	return false;
}
function followBlog(blog){
    login();
	return false;
}

function likeTagForVisitor(tag){
    login();
	return false;	
}

function followBlogForVisitor(blog){
	login();
	return false;	
}
function login(){
	alert("请先登录或者注册~^__^~");	
}