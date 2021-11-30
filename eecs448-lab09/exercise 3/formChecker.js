function validateForm() {
  boolean validate = false;
  let username = document.forms["webpage"]["username"].value;

  let usernameFormat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
  if(username.value.match(usernameFormat)){
    validate = true;
  } //https://www.w3resource.com/javascript/form/email-validation.php

  //alert("all spaces must be filled out, no negative values are accepted");
  return validate;
}//check validateForm
