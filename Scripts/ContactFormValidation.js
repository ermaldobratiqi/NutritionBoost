var firstName = document.forms["ContactUs-form"]["FirstName"];
var lastName = document.forms["ContactUs-form"]["LastName"];
var email = document.forms["ContactUs-form"]["Email"];
var message = document.forms["ContactUs-form"]["Message"];
var cFnameErr = document.getElementById('CFnameErr');
var cLnameErr = document.getElementById('CLnameErr');
var cEmailErr = document.getElementById('CEmailErr');
var cMessageErr = document.getElementById('CMessageErr');

firstName.addEventListener("blur",firstNameVerify,true);
lastName.addEventListener("blur",lastNameVerify,true);
email.addEventListener("blur",emailVerify,true);
message.addEventListener("blur",messageVerify,true);


function CValidation()
{
  if (firstName.value==""){
    firstName.style.border = "1px solid red";
    cFnameErr.textContent = "Please write your FirstName";
    firstName.focus();
    return false;
  }
  if (lastName.value==""){
    lastName.style.border = "1px solid red";
    cLnameErr.textContent = "Please write your LastName";
    lastName.focus();
    return false;
  }

 if (email.value==""){
   email.style.border = "1px solid red";
   cEmailErr.textContent = "Please write your Email";
   email.focus();
   return false;
 }
 if (message.value==""){
   message.style.border = "1px solid red";
   cMessageErr.textContent = "Please write your Message";
   message.focus();
   return false;
 }

}

function firstNameVerify(){
   if(firstName.value !=""){
     firstName.style.border.top="0px";
     firstName.style.border.bottom= "1px solid #C3073F";
     firstName.style.border.left= "0px";
     firstName.style.border.right= "0px";
     cFnameErr.textContent = "";
   }
 }
function lastNameVerify(){
   if(lastName.value !=""){
     lastName.style.border.top="0px";
     lastName.style.border.bottom= "1px solid #C3073F";
     lastName.style.border.left= "0px";
     lastName.style.border.right= "0px";
     cLnameErr.textContent = "";
   }
}
 function emailVerify(){
    if(email.value !=""){
      email.style.border.top="0px";
      email.style.border.bottom= "1px solid #C3073F";
      email.style.border.left= "0px";
      email.style.border.right= "0px";
      cEmailErr.textContent = "";
    }
    }
  function messageVerify(){
    if(message.value !=""){
      message.style.border.top="0px";
      message.style.border.bottom= "1px solid #C3073F";
      message.style.border.left= "0px";
      message.style.border.right= "0px";
      cMessageErr.textContent = "";
    }
 }
