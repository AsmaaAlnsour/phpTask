
const Fname=document.getElementById("name");
const uname=document.getElementById("uname");
const password=document.getElementById("password");
const re_password=document.getElementById("re_password");


var nameValue="";
var unameValue="";
var passwordValue="";
var re_passwordValue="";


var namebool=false;
var unamebool=false;
var passwordbool=false;
var re_passwordbool=false;



function validationForm(event){
    event.preventDefault();
    if (Fname.value == "" || Fname.value == null) {
        document.getElementById("name1Err").textContent =
          "The First Name field is required.";
      } 
        
     else {
        nameValue=Fname.value;
        document.getElementById("name1Err").textContent = "";
        namebool=true;
      }
     
      //......

      if (uname.value == null || uname.value == "") {
        document.getElementById("emailErr").textContent="The email field is required."
      } else if (
        !uname.value.match(
            /^\S+@\S+\.\S+$/
        )
      ) {
        document.getElementById("emailErr").textContent =
          "The email must be a valid email address."; 
      } else {
        unameValue=uname.value;
        document.getElementById("emailErr").textContent ="";
        unamebool=true;
      }


  //...
  
      if (password.value == '' || password.value == null) {
        document.getElementById("pass1Err").textContent = "The password field is required.";
        
      }else if(password.value.length <8 ){
        document.getElementById("pass1Err").textContent = "The password must be at least 8 characters.";
        
      }else if(password.value.length >30){
        document.getElementById("pass1Err").textContent = "The password may not be greater than 30 characters.";
        
      }else if(password.value.search(/[0-9]/) ==-1){
        document.getElementById("pass1Err").textContent = "The password must be at least 1 numeric.";
        
      }else if(password.value.search(/[a-z]/) ==-1){
        document.getElementById("pass1Err").textContent = "The password must be at least 1 lower case.";
        
      }else if(password.value.search(/[A-Z]/) ==-1){
        document.getElementById("pass1Err").textContent = "The password must be at least 1 upper case.";

      }else if(password.value.search(/[:\(\?\=\+\,\;\.\*\[\@\$\#\!\%\^\?\&\)\_\-]/) ==-1){
        document.getElementById("pass1Err").textContent = "The password must be at least 1 special character.";
      }
      else{
       
        passwordValue=password.value;
        document.getElementById("pass1Err").textContent = "";
        passwordbool=true;
      }
   

    if (re_password.value == '' || re_password.value == null) {
        document.getElementById("pass2Err").textContent = "The password field is required.";
        
      }else if(re_password.value == password1.value){
        document.getElementById("pass2Err").textContent = "The password must be Matched.";
        
      }else if(re_password.value.length <8 ){
        document.getElementById("pass2Err").textContent = "The password must be at least 8 characters.";
        
      }else if(re_password.value.length >30){
        document.getElementById("pass2Err").textContent = "The password may not be greater than 30 characters.";
        
      }else if(re_password.value.search(/[0-9]/) ==-1){
        document.getElementById("pass2Err").textContent = "The password must be at least 1 numeric.";
        
      }else if(re_password.value.search(/[a-z]/) ==-1){
        document.getElementById("pass2Err").textContent = "The password must be at least 1 lower case.";
        
      }else if(re_password.value.search(/[A-Z]/) ==-1){
        document.getElementById("pass2Err").textContent = "The password must be at least 1 upper case.";

      }else if(re_password.value.search(/[:\(\?\=\+\,\;\.\*\[\@\$\#\!\%\^\?\&\)\_\-]/) ==-1){
        document.getElementById("pass2Err").textContent = "The password must be at least 1 special character.";
      }
      else{
        re_passwordValue=re_password.value;
        document.getElementById("pass2Err").textContent = "";
        re_passwordbool=true;
      }

 
      if(namebool==true&&unamebool==true&&passwordbool==true&&re_passwordbool==true){
   
        window.sessionStorage.setItem("nameValue",Fname.value);
        let formData = JSON.parse(localStorage.getItem('formData')) || [];
        formData.push({ FnameValue, unameValue, passwordValue,re_passwordValue});
        localStorage.setItem('formData', JSON.stringify(formData));
       
       }
  


}

