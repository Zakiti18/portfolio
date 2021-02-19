/*
guestbook.js
Phillip Ball
02/01/2021

 */

// validation
document.getElementById("guestForm").onsubmit = validate;
function validate(){
    let isValid = true;

    // clear all error messages
    let errors = document.getElementsByClassName("err");
    for(let i = 0; i < errors.length; i++){
        errors[i].style.display = "none";
    }

    // check first name
    if(document.getElementById("fname").value == ""){
        document.getElementById("errfname").style.display = "block";
        isValid = false;
    }

    // check last name
    if(document.getElementById("lname").value == ""){
        document.getElementById("errlname").style.display = "block";
        isValid = false;
    }

    // check mailing list
    if(document.getElementById("maillist").checked){
        // check email if anything entered
        let emailVal = document.getElementById("email").value;
        if(emailVal == ""){
            if(!(/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test(emailVal))){
                document.getElementById("erremail").style.display = "block";
                isValid = false;
            }
        }
    }

    /*
    // check LinkedIn URL if anything entered
    let linkedInURL = document.getElementById("linkin").value;
    if(linkedInURL){
        if(!(linkedInURL.substring(0,4) == "http" && linkedInURL.substring(linkedInURL.length - 4, linkedInURL.length) == ".com")) {
            document.getElementById("errlinkedin").style.display = "block";
            isValid = false;
        }
    }
    */

    if(document.getElementById("selecthowmet").value == "none"){
        document.getElementById("errselecthowmet").style.display = "block";
        isValid = false;
    }

    return isValid;
}

// Function that changes the display of an element in the html
// based on if the "other" option is selected
document.getElementById("selecthowmet").onchange = otherTextAppear;
function otherTextAppear(){
    let otherTextBox = document.getElementById("othertextbox");
    if(document.getElementById("selecthowmet").value == "other"){
        otherTextBox.style.display = "block";
    }
    else{
        otherTextBox.style.display = "none";
    }
}

// Function that changes the display of an element in the html
// based on if the add to mailing list checkbox is checked
document.getElementById("maillist").onclick = emailFormatButtons;
function emailFormatButtons(){
    let buttons = document.getElementById("emailformat");
    if(document.getElementById("maillist").checked){
        buttons.style.display = "block";
    }
    else{
        buttons.style.display = "none";
    }
}