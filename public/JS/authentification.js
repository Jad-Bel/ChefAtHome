// sign-up inputs and button 
const emailInput = document.querySelector('.email');
const password = document.querySelector('.password');
const signUpSub = document.querySelector('#signUpSubmit');

const firstNameInput = document.querySelector('#firstName');
const lastNameInput = document.querySelector('#lastName');
const signInSub = document.querySelector('#signInSubmit')

// btn to switch from signup form to signin form
const signupSwitchBtn = document.querySelector('#SuSwitchBtn');
const signinSwitchBtn = document.querySelector('#SiSwitchBtn');

// forms
const signInForm = document.querySelector('#sign-in-form');
const signUpForm = document.querySelector('#sign-up-form');

signinSwitchBtn.addEventListener('click', function () {
    signInForm.classList.remove('hidden')
    signUpForm.classList.add('hidden');
    console.log(1);
})

signupSwitchBtn.addEventListener('click', function () {
    signInForm.classList.add('hidden')
    signUpForm.classList.remove('hidden');
    console.log(2);
})

signInForm.addEventListener('submit', function (e) {
    e.preventDefault();
    if (!validateSignInForm()) {
        e.submit();
    }
})

function validateSignInForm () {
    let isValid = true;
    
    if (!firstNameInput.value.match(/^[A-Za-z]{2,}$/)) {
        Swal.fire({
            icon: "error",
            title: "Invalid last-name",
            text: "Enter a valid last-name",
        });
        console.log(1)
        isValid = false;
    } else if (!lastNameInput.value.match(/^[A-Za-z]{2,}$/)) {
        Swal.fire({
            icon: "error",
            title: "Invalid last-name",
            text: "Enter a valid last-name",
        });
        isValid = false;
    } else if (!emailInput.value.match(/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/)) {
        Swal.fire({
            icon: "error",
            title: "Invalid email!",
            text: "Please enter a valid email address",
        });
    } else if (!password.value.match(/^[a-zA-Z0-9./,]{6,}$/)) {
        Swal.fire({
            icon: "error",
            title: "Invalid password!",
            text: "Must have at least 6 characters, one digit, and one special character",
        });
    }
}


signUpForm.addEventListener('submit', function (e) {
    e.preventDefault();
    if (!validateSignUpForm()) {
        e.submit();
    }
})

function validateSignUpForm () {
    let isValid = true;
    
    if (!emailInput.value.match(/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/)) {
        Swal.fire({
            icon: "error",
            title: "Invalid email!",
            text: "Please enter a valid email address",
        });
    } else if (!password.value.match(/^[a-zA-Z0-9./,]{6,}$/)) {
        Swal.fire({
            icon: "error",
            title: "Invalid password!",
            text: "Must have at least 6 characters, one digit, and one special character",
        });
    }
}

