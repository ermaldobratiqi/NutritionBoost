var imgurl = document.forms["AddTips-form"]["ImgUrl"];
var title = document.forms["AddTips-form"]["Title"];
var author = document.forms["AddTips-form"]["Author"];
var imgurlErr = document.getElementById('ImgUrlErr');
var titleErr = document.getElementById('TitleErr');
var authorErr = document.getElementById('AuthorErr');


imgurl.addEventListener("blur",imgurlVerify,true);
title.addEventListener("blur",titleVerify,true);
author.addEventListener("blur",authorVerify,true);


function  AddTipsValidation()
{
  if (imgurl.value==""){
    imgurl.style.border = "1px solid red";
    imgurlErr.textContent = "Please write the Image Url";
    imgurl.focus();
    return false;
  }
  if (title.value==""){
    title.style.border = "1px solid red";
    titleErr.textContent = "Please write the Title";
    title.focus();
    return false;
  }

 if (author.value==""){
    author.style.border = "1px solid red";
    authorErr.textContent = "Please write the Author";
   author.focus();
   return false;
 }


}

function imgurlVerify(){
   if(imgurl.value !=""){
    imgurl.style.border.top="0px";
    imgurl.style.border.bottom= "1px solid #C3073F";
    imgurl.style.border.left= "0px";
    imgurl.style.border.right= "0px";
    imgurlErr.textContent = "";
   }
 }
function titleVerify(){
   if(title.value !=""){
    title.style.border.top="0px";
    title.style.border.bottom= "1px solid #C3073F";
    title.style.border.left= "0px";
    title.style.border.right= "0px";
    titleErr.textContent = "";
   }
}
 function authorVerify(){
    if(author.value !=""){
        author.style.border.top="0px";
        author.style.border.bottom= "1px solid #C3073F";
        author.style.border.left= "0px";
        author.style.border.right= "0px";
        authorErr.textContent = "";
    }
    }



