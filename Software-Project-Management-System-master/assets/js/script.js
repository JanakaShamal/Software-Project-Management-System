var formpopuplogin =document.getElementById("loginForm");
var loginbutton1 = document.getElementById("login1");
var loginbutton2 = document.getElementById("login2");
var loginbutton3 = document.getElementById("login3");
var logincancelbutton = document.getElementById("logincancel");
var body =document.getElementById("main-content");

loginbutton1.onclick = function(){
	formpopuplogin.style.display ="block";
	formpopupsignup.style.display = "none";
	body.style.opacity =0.5;
}
loginbutton2.onclick = function(){
  formpopuplogin.style.display ="block";
  formpopupsignup.style.display = "none";
  body.style.opacity =0.5;
}
loginbutton3.onclick = function(){
  formpopuplogin.style.display ="block";
  formpopupsignup.style.display = "none";
  body.style.opacity =0.5;
}

logincancelbutton.onclick = function() {
  formpopuplogin.style.display = "none";
  body.style.opacity =1;
}

// When the user clicks anywhere outside of the modal, close it

var formpopupsignup =document.getElementById("signupForm");
var signupbutton1 = document.getElementById("signup1");
var signupbutton2 = document.getElementById("signup2");
var signupbutton3 = document.getElementById("signup3");
var signupcancelbutton = document.getElementById("signupcancel");

signupbutton1.onclick = function(){
	formpopupsignup.style.display ="block";
	formpopuplogin.style.display = "none";
	body.style.opacity =0.5;
}
signupbutton2.onclick = function(){
  formpopupsignup.style.display ="block";
  formpopuplogin.style.display = "none";
  body.style.opacity =0.5;
}
signupbutton3.onclick = function(){
  formpopupsignup.style.display ="block";
  formpopuplogin.style.display = "none";
  body.style.opacity =0.5;
}
signupcancelbutton.onclick = function() {
  formpopupsignup.style.display = "none";
  body.style.opacity =1;
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == formpopupsignup || event.target == formpopuplogin) {
    formpopupsignup.style.display = "none";
    formpopuplogin.style.display = "none";
    body.style.opacity =1;
  }
}