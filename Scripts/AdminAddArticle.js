var imgurl = document.forms["AddArticle-form"]["ImgUrl"];
var title = document.forms["AddArticle-form"]["Title"];
var author = document.forms["AddArticle-form"]["Author"];
var filename = document.forms["AddArticle-form"]["FileName"];
var shortdesc = document.forms["AddArticle-form"]["ShortDesc"];
var body = document.forms["AddArticle-form"]["Body"];
var imgurlErr = document.getElementById('ImgUrlErr');
var titleErr = document.getElementById('TitleErr');
var authorErr = document.getElementById('AuthorErr');
var filenameErr = document.getElementById('FileNameErr');
var shortdescErr = document.getElementById('ShortDescErr');
var bodyErr = document.getElementById('BodyErr');

imgurl.addEventListener("blur",imgurlVerify,true);
title.addEventListener("blur",titleVerify,true);
author.addEventListener("blur",authorVerify,true);
filename.addEventListener("blur",filenameVerify,true);
shortdesc.addEventListener("blur",shortdescVerify,true);
body.addEventListener("blur",bodyVerify,true);

function  AddArticleValidation()
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
 if (filename.value==""){
    filename.style.border = "1px solid red";
    filenameErr.textContent = "Please write the File Name";
   filename.focus();
   return false;
 }
 if (shortdesc.value==""){
    shortdesc.style.border = "1px solid red";
    shortdescErr.textContent = "Please write the Short Description";
    shortdesc.focus();
    return false;
  }
  if (body.value==""){
    body.style.border = "1px solid red";
    bodyErr.textContent = "Please write the Article Body";
    body.focus();
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
  function filenameVerify(){
    if(filename.value !=""){
        filename.style.border.top="0px";
        filename.style.border.bottom= "1px solid #C3073F";
        filename.style.border.left= "0px";
        filename.style.border.right= "0px";
        filenameErr.textContent = "";
    }
 }

 function shortdescVerify(){
    if(shortdesc.value !=""){
        shortdesc.style.border.top="0px";
        shortdesc.style.border.bottom= "1px solid #C3073F";
        shortdesc.style.border.left= "0px";
        shortdesc.style.border.right= "0px";
        shortdescErr.textContent = "";
    }
 }

 function bodyVerify(){
    if(body.value !=""){
        body.style.border.top="0px";
        body.style.border.bottom= "1px solid #C3073F";
        body.style.border.left= "0px";
        body.style.border.right= "0px";
        bodyErr.textContent = "";
    }
 }

