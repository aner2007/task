function getPosts(){

    var ourRequest = new XMLHttpRequest();
    ourRequest.open("GET","https://rosins-dev.digiqal.de/wp-json/wp/v2/posts");
    ourRequest.onload = function (){
    if(ourRequest.status >= 200 && ourRequest.status < 400){
    var data =JSON.parse(ourRequest.response);
//console.log(data);
    createHTML(data);
}else{
    console.log("We connected to the server, but server returns error");
}
}
    ourRequest.onerror=function (){
    console.log('Connection error');
}
    ourRequest.send();
}
    function createHTML(postData){
        var postContainer=document.getElementById("post-container");
        var postHTML='';
        for(var i=0; i<postData.length;i++){
// console.log(postData[i].title.rendered);
        postHTML +='<div class="post-main"><h2>'+postData[i].title.rendered+'</h2>';
        postHTML +='<p>'+postData[i].content.rendered+'</p>';
        postHTML +='<a>'Read more'</a></div>';
    }
        postContainer.innerHTML=postHTML;
    }
