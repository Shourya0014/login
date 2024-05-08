const signInButton = document.getElementById('signInButton');
const signUpButton = document.getElementById('signUpButton');
const signInForm = document.getElementById('signIn');
const signUpForm = document.getElementById('signUp');

signUpButton.addEventListener('click',function(){
signInForm.style.display = "none";
signUpForm.style.display="block";
})

signInButton.addEventListener('click' , function(){
    signInForm.style.display = "block";
    signUpForm.style.display="none"; 
})

function checkPassword (){
    let password = document.getElementById("password").value;
    let cnfpassword = document.getElementById("cnfPassword").value;
    console.log(password,cnfpassword);
    let message = document.getElementById("message");

    if (password.length !=0) {
        if (password == cnfpassword) {
            message.textContent = "Passwords Match";
            message.style.background = "#3ae374"
            }
            else{
                message.textContent = "Passwords don't match"; 
                message.style.background = "#ff4d4d"
            }
            
        
    }
    else{
        alert("password can't be empty");
        message.textContent = "";
    }

}

const showPassword = document.querySelector("#show-pass");
const PasswordFeild = document.querySelector("#password");

showPassword.addEventListener("click",function(){
    this.classList.toggle("ri-eye-off-line");
    const type = PasswordFeild.getAttribute("type")==="password" ? "text" : "password" ; 
    PasswordFeild.setAttribute("type" , type);
})

const showPassword2 = document.querySelector("#show-pass2");
const PasswordFeild2 = document.querySelector("#cnfPassword");

showPassword2.addEventListener("click",function(){
    this.classList.toggle("ri-eye-off-line");
    const type = PasswordFeild2.getAttribute("type")==="password" ? "text" : "password" ; 
    PasswordFeild2.setAttribute("type" , type);
})

const showPassword3 = document.querySelector("#show-pass3");
const PasswordFeild3 = document.querySelector(".signInPass");

showPassword3.addEventListener("click",function(){
    this.classList.toggle("ri-eye-off-line");
    const type = PasswordFeild3.getAttribute("type")==="password" ? "text" : "password" ; 
    PasswordFeild3.setAttribute("type" , type);
})
