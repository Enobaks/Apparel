var register= document.querySelector('.register');
const regEx = /^[a-zA-Z]+$/;
var firstname = document.querySelector('.firstname');

function printMessage(id, message) {
    document.getElementById(id).innerHTML = message;
}

function registerUser(e) {
    e.preventDefault();
    const formData = new FormData(register);
    const firstName = formData.get('firstname');
    const lastName = formData.get('lastname');
    const email = formData.get('email');
    const password = formData.get('password');
    const confirmPassword = formData.get('confirm-password');
    
    if (firstName == "") {
        var firstNameErr = document.querySelector('.firstname');
        firstNameErr.style.display = "block";
        firstNameErr.innerHTML = "Please enter your first name";
    }  else if (regEx.match(firstName) === false) {
        var firstNameErr = document.querySelector('.firstname');
        firstNameErr.style.display = "block";
        firstNameErr.innerHTML = "Please enter a valid name";
    }  else {
        console.log("correct!")
    }
    
    
    
    if (lastName == "") {
        var lastNameErr = document.querySelector('.lastname');
        lastNameErr.style.display = "block";
        lastNameErr.innerHTML = "Please enter your last name";
    }  else if (regEx.match(lastName) === false) {
        var lastNameErr = document.querySelector('.lastname');
        lastNameErr.style.display = "block";
        lastNameErr.innerHTML = "Please enter a valid name";
    }  else {
        console.log("Last name is scorrect!")
    }
    
    
    if (email == "") {
        var emailErr = document.querySelector('.email');
        emailErr.style.display = "block";
        emailErr.innerHTML = "Please enter your email address";
    }  else {
        var regex = /^\S+@\S+\.\S+$/;
        if (regex.test(email) === false) {
            var emailErr = document.querySelector('.email');
            emailErr.style.display = "block";
            emailErr.innerHTML = "Please enter a valid email address"; 
        } else {
            console.log("Email is correct!")
        }
    }
    
    
    if (password == "" || confirmPassword == "") {
        var passwordErr = document.querySelector('.password');
        passwordErr.style.display = "block";
        passwordErr.innerHTML = "Please enter your password";
    }  else if (password.length <= 7) {
        var passwordErr = document.querySelector('.password');
        passwordErr.style.display = "block";
        passwordErr.innerHTML = "Password length must be greater than 7";
    } else {
        console.log("Password is correct!")
    }
    

    if (confirmPassword != password) {
        var confirmPasswordErr = document.querySelector('.confirm_password');
        confirmPasswordErr.style.display = "block";
        confirmPasswordErr.innerHTML = "Password should match!";
    } 
    else {
        console.log("Password match!");
    } 
}

function onSubmit() {
    registerUser(e)
}

register.addEventListener('submit', registerUser);