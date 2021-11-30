function validateForm() {
  //validate username, password:
  let validate = false;
  let username = document.getElementById("username").value;

  let usernameFormat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
  if(username.value.match(usernameFormat)){
    validate = true;
  } //https://www.w3resource.com/javascript/form/email-validation.php

  let password = document.getElementById("password").value;
  if(password == ""){
    validate = false;
  } else {
    validate = true;
  }

  //validate clothing items:

  let hoodie = document.getElementById("hoodie").value;
  if(hoodie == "" || hoodie < 0){
    validate = false;
  } else {
    validate = true;
  }

  let skirt = document.getElementById("skirt").value;
  if(skirt == "" || skirt < 0){
    validate = false;
  } else {
    validate = true;
  }
  
  let cardigan = document.getElementById("cardigan").value;
  if(cardigan == "" || cardigan < 0){
    validate = false;
  } else {
    validate = true;
  }

  let pants = document.getElementById("pants").value;
  if(pants == "" || pants < 0){
    validate = false;
  } else {
    validate = true;
  }
  
  //validate shipping method:

  let shipping = document.getElementsById("shipping").value;
  if(shipping == ""){
    validate = false;
  } else {
    validate = true;
  }

  //check validate:

  if(validate == false){
    alert("all spaces must be filled out, no negative values are accepted");
  }

  return validate;
}
