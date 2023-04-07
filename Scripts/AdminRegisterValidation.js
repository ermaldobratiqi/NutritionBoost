var firstName = document.forms["ARegister-form"]["FirstName"];
var lastName = document.forms["ARegister-form"]["LastName"];
var regemail = document.forms["ARegister-form"]["RegEmail"];
var regpassword = document.forms["ARegister-form"]["RegPassword"];
var usertype = document.forms["ARegister-form"]["UserType"];
var regFnameErr = document.getElementById('RegFnameErr');
var regLnameErr = document.getElementById('RegLnameErr');
var regEmailErr = document.getElementById('RegEmailErr');
var regPasswordErr = document.getElementById('RegPasswordErr');
var userTypeErr = document.getElementById('UserTypeErr');

firstName.addEventListener("blur",firstNameVerify,true);
lastName.addEventListener("blur",lastNameVerify,true);
email.addEventListener("blur",emailVerify,true);
password.addEventListener("blur",passwordVerify,true);
usertype.addEventListener("blur",userTypeVerify,true);

function ARegValidation()
{
  if (firstName.value==""){
    firstName.style.border = "1px solid red";
    regFnameErr.textContent = "Please write your FirstName";
    firstName.focus();
    return false;
  }
  if (lastName.value==""){
    lastName.style.border = "1px solid red";
    regLnameErr.textContent = "Please write your LastName";
    lastName.focus();
    return false;
  }

 if (regemail.value==""){
   regemail.style.border = "1px solid red";
   regEmailErr.textContent = "Please write your Email";
   regemail.focus();
   return false;
 }
 if (regpassword.value==""){
   regpassword.style.border = "1px solid red";
   regPasswordErr.textContent = "Please write your Password";
   regpassword.focus();
   return false;
 }
 if (usertype.value==""){
    usertype.style.border = "1px solid red";
    userTypeErr.textContent = "Please write your Password";
    usertype.focus();
    return false;
  }

}

function firstNameVerify(){
   if(firstName.value !=""){
     firstName.style.border.top="0px";
     firstName.style.border.bottom= "1px solid #C3073F";
     firstName.style.border.left= "0px";
     firstName.style.border.right= "0px";
     regFnameErr.textContent = "";
   }
 }
function lastNameVerify(){
   if(lastName.value !=""){
     lastName.style.border.top="0px";
     lastName.style.border.bottom= "1px solid #C3073F";
     lastName.style.border.left= "0px";
     lastName.style.border.right= "0px";
     regLnameErr.textContent = "";
   }
}
 function emailVerify(){
    if(regemail.value !=""){
      regemail.style.border.top="0px";
      regemail.style.border.bottom= "1px solid #C3073F";
      regemail.style.border.left= "0px";
      regemail.style.border.right= "0px";
      regEmailErr.textContent = "";
    }
    }
  function passwordVerify(){
    if(regpassword.value !=""){
      regpassword.style.border.top="0px";
      regpassword.style.border.bottom= "1px solid #C3073F";
      regpassword.style.border.left= "0px";
      regpassword.style.border.right= "0px";
      regPasswordErr.textContent = "";
    }
 }

 function userTypeVerify(){
    if(usertype.value !=""){
        usertype.style.border.top="0px";
        usertype.style.border.bottom= "1px solid #C3073F";
        usertype.style.border.left= "0px";
        usertype.style.border.right= "0px";
        userTypeErr.textContent = "";
    }
 }
