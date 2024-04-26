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