// function error_show() {
//     alert("abc");
// }



// document.getElementById("reg-user").addEventListener("click", error_show);

document.forms['register-form'].onsubmit = function(event){
   
    if(this.name.value.trim() === ""){
        document.querySelector(".name-error").innerHTML = "Please enter a name";
        document.querySelector(".name-error").style.display = "block";
        event.preventDefault();
        return false;
    }
    
    if(this.username.value.trim() === ""){
       document.querySelector(".username-error").innerHTML = "Please enter a username";
       document.querySelector(".username-error").style.display = "block";
       event.preventDefault();
       return false;
    }

    if(this.email.value.trim() === ""){
        document.querySelector(".email-error").innerHTML = "Please enter a email";
        document.querySelector(".email-error").style.display = "block";
        event.preventDefault();
        return false;
    }
    
    if(this.password.value.trim() === ""){
        document.querySelector(".password-error").innerHTML = "Please enter a password";
        document.querySelector(".password-error").style.display = "block";
        event.preventDefault();
        return false;
    }
   
}


