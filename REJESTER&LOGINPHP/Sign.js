const form=document.getElementById("form-reg");

const FirstName=document.getElementById("exampleInputName1");
const MiddleName=document.getElementById("exampleInputName2");
const LastName=document.getElementById("exampleInputName3");
const FamilyName=document.getElementById("exampleInputName4");
const togglePassword = document.querySelector("#togglePassword");
const togglePassword2 = document.querySelector("#togglePassword2");
const password1 = document.getElementById("exampleInputPassword1");
const password2 = document.getElementById("exampleInputPassword2");
const email=document.getElementById("exampleInputEmail1");
const DateOfBirth = document.getElementById("InputDateOfBirth");
const Mobile=document.getElementById("InputMobile");


var FirstNameValue="";
var MiddleNameValue="";
var LastNameValue="";
var FamilyNameValue="";
var pass1Value="";
var pass2Value="";
var emailValue="";
var DateOfBirthValue ="";
var MobileValue = "";


var FirstNamebool=false;
var MiddleNamebool=false;
var LastNamebool=false;
var FamilyNamebool=false;
var pass1bool=false;
var pass2bool=false;
var emailbool=false;
var DateOfBirthbool =false;
var Mobilebool=false;



//Show Password
togglePassword.addEventListener("click", function () {
   
    const type = password.getAttribute("type") === "password" ? "text" : "password";
    password.setAttribute("type", type);
    

    this.classList.toggle("bi-eye");
});
togglePassword2.addEventListener("click", function () {
   
    const type = password.getAttribute("type") === "password" ? "text" : "password";
    password.setAttribute("type", type);
    

    this.classList.toggle("bi-eye");
});



function validationForm(event){
    event.preventDefault();
    if (FirstName.value == "" || FirstName.value == null) {
        document.getElementById("name1Err").textContent =
          "The First Name field is required.";
      } 
        
     else {
        FirstNameValue=FirstName.value;
        document.getElementById("name1Err").textContent = "";
        FirstNamebool=true;
      }
      if (MiddleName.value == "" || MiddleName.value == null) {
        document.getElementById("name2Err").textContent =
          "The Middle Name field is required.";
      } 
        
     else {
        MiddleNameValue=MiddleName.value;
        document.getElementById("name2Err").textContent = "";
        MiddleNamebool=true;
      }
      if (LastName.value == "" || LastName.value == null) {
        document.getElementById("name3Err").textContent =
          "The Last Name field is required.";
      } 
        
     else {
        LastNameValue=LastName.value;
        document.getElementById("name3Err").textContent = "";
        LastNamebool=true;
      }
      if (FamilyName.value == "" || FamilyName.value == null) {
        document.getElementById("name4Err").textContent =
          "The Family Name field is required.";
      } 
        
     else {
        FamilyNameValue=FamilyName.value;
        document.getElementById("name4Err").textContent = "";
        FamilyNamebool=true;
      }

      //......

      if (email.value == null || email.value == "") {
        document.getElementById("emailErr").textContent="The email field is required."
      } else if (
        !email.value.match(
            /^\S+@\S+\.\S+$/
        )
      ) {
        document.getElementById("emailErr").textContent =
          "The email must be a valid email address."; 
      } else {
        emailValue=email.value;
        document.getElementById("emailErr").textContent ="";
        emailbool=true;
      }
  

//.....
if (Mobile.value == null || Mobile.value == "") {
    document.getElementById("MobileErr").textContent="The Mobile field is required."
  } else if(Mobile.value.search(/[a-z]/) == 1){
    document.getElementById("MobileErr").textContent = "The Mobile must be Numbers without letters.";
    
  }else if(Mobile.value.search(/[A-Z]/) == 1){
    document.getElementById("MobileErr").textContent = "The Mobile must be Numbers without letters.";

  }else if (Mobile.value.length !== 14){
    document.getElementById("MobileErr").textContent="The Mobile must be at least 14 numerics."
  }else {
    MobileValue=Mobile.value;
    document.getElementById("MobileErr").textContent ="";
    Mobilebool=true;
  }

  //...
  
      if (password1.value == '' || password1.value == null) {
        document.getElementById("pass1Err").textContent = "The password field is required.";
        
      }else if(password1.value.length <8 ){
        document.getElementById("pass1Err").textContent = "The password must be at least 8 characters.";
        
      }else if(password1.value.length >30){
        document.getElementById("pass1Err").textContent = "The password may not be greater than 30 characters.";
        
      }else if(password1.value.search(/[0-9]/) ==-1){
        document.getElementById("pass1Err").textContent = "The password must be at least 1 numeric.";
        
      }else if(password1.value.search(/[a-z]/) ==-1){
        document.getElementById("pass1Err").textContent = "The password must be at least 1 lower case.";
        
      }else if(password1.value.search(/[A-Z]/) ==-1){
        document.getElementById("pass1Err").textContent = "The password must be at least 1 upper case.";

      }else if(password1.value.search(/[:\(\?\=\+\,\;\.\*\[\@\$\#\!\%\^\?\&\)\_\-]/) ==-1){
        document.getElementById("pass1Err").textContent = "The password must be at least 1 special character.";
      }
      else{
       
        pass1Value=password1.value;
        document.getElementById("pass1Err").textContent = "";
        pass1bool=true;
      }
   

    if (password2.value == '' || password2.value == null) {
        document.getElementById("pass2Err").textContent = "The password field is required.";
        
      }else if(password2.value == password1.value){
        document.getElementById("pass2Err").textContent = "The password must be Matched.";
        
      }else if(password2.value.length <8 ){
        document.getElementById("pass2Err").textContent = "The password must be at least 8 characters.";
        
      }else if(password2.value.length >30){
        document.getElementById("pass2Err").textContent = "The password may not be greater than 30 characters.";
        
      }else if(password2.value.search(/[0-9]/) ==-1){
        document.getElementById("pass2Err").textContent = "The password must be at least 1 numeric.";
        
      }else if(password2.value.search(/[a-z]/) ==-1){
        document.getElementById("pass2Err").textContent = "The password must be at least 1 lower case.";
        
      }else if(password2.value.search(/[A-Z]/) ==-1){
        document.getElementById("pass2Err").textContent = "The password must be at least 1 upper case.";

      }else if(password2.value.search(/[:\(\?\=\+\,\;\.\*\[\@\$\#\!\%\^\?\&\)\_\-]/) ==-1){
        document.getElementById("pass2Err").textContent = "The password must be at least 1 special character.";
      }
      else{
        pass2Value=password2.value;
        document.getElementById("pass2Err").textContent = "";
        pass2bool=true;
      }


      if (DateOfBirth.value == null || DateOfBirth.value == "") {
        document.getElementById("DateOfBirthErr").textContent="The Date Of Birth field is required."
     }
    //  else if ( DateOfBirth.getFullYear()<(2004)) {
    //     document.getElementById("DateOfBirthErr").textContent ="the registered must be above 16 years old."; 
    //   }   
    else{
        DateOfBirthValue=DateOfBirth.value;
        document.getElementById("DateOfBirthErr").textContent = "";
        DateOfBirthbool=true;
      }
     



      if(FirstNamebool==true&&MiddleNamebool==true&&LastNamebool==true&&FamilyNamebool==true&&pass1bool==true&& pass2bool==true&&
        emailbool==true&&DateOfBirthbool==true&&Mobilebool==true){
   
        window.sessionStorage.setItem("nameValue",FirstName.value);
        window.open("Welcome.html","_self");
        let formData = JSON.parse(localStorage.getItem('formData')) || [];
        formData.push({ FirstNameValue, MiddleNameValue, LastNameValue,FamilyNameValue,pass1Value,pass2Value,emailValue,DateOfBirthValue,MobileValue});
        localStorage.setItem('formData', JSON.stringify(formData));
       
       }
  


}


//********************************************* sign in *******************************************************************

const passwordIN = document.getElementById("passSignIN");
const emailIN=document.getElementById("EmailSignIN");

var mailValueIN="";
var passValueIN="";

var mailIN=false;
var passIN=false;

togglePassword2.addEventListener("click", function () {
   
  const type = passwordIN.getAttribute("type") === "password" ? "text" : "password";
  passwordIN.setAttribute("type", type);
  

  this.classList.toggle("bi-eye");
});



  function validationData(event){
    event.preventDefault();

      data = JSON.parse(localStorage.getItem("formData") || "[]");

      inputmail="";
      inputpass="";
      obj={};
      for(i=0;i<data.length;i++){
        obj=data[i];
        inputmail=obj.emailValue;
        inputpass=obj.pass1Value;
        nameaccount=obj.FirstNameValue;
   

        if(mailValueIN !==inputmail || passValueIN!==inputpass ){
          document.getElementById("passErr").textContent = "the email or password wrong";
        }

       else if(mailValueIN ==inputmail && passValueIN==inputpass ){
        window.sessionStorage.setItem("nameValue",nameaccount);
          window.open("Welcome.html","_self");
          break;

       }
     
      
      }

}
