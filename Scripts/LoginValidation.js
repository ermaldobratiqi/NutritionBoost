
var email = document.forms["Login-form"]["LogEmail"];
var password = document.forms["Login-form"]["Password"];
var logEmailErr = document.getElementById('LogEmailErr');
var logPasswordErr = document.getElementById('LogPasswordErr');

email.addEventListener("blur",emailVerify,true);
password.addEventListener("blur",passwordVerify,true);


function Validation()
{
 if (email.value==""){
   email.style.border = "1px solid red";
   logEmailErr.textContent = "Please write your email";
   email.focus();
   return false;
 }
 if (password.value==""){
   password.style.border = "1px solid red";
   logPasswordErr.textContent = "Please write your Password";
   password.focus();
   return false;
 }
}

 function emailVerify(){
    if(email.value !=""){
      email.style.border.top="0px";
      email.style.border.bottom= "1px solid #C3073F";
      email.style.border.left= "0px";
      email.style.border.right= "0px";
      logEmailErr.textContent = "";
    }
    }
  function passwordVerify(){
    if(password.value !=""){
      password.style.border.top="0px";
      password.style.border.bottom= "1px solid #C3073F";
      password.style.border.left= "0px";
      password.style.border.right= "0px";
      logPasswordErr.textContent = "";
    }
 }
