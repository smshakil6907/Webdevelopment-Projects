function loginValidation(pForm) {
    const username = pForm.username.value;
    const password = pForm.password.value;
    let flag = true;

    const userNameErr = document.getElementById('userNameErr');
    const passwordErr = document.getElementById('passwordErr');

    userNameErr.innerHTML = "";
    passwordErr.innerHTML = "";

    if(username === "") {
        userNameErr.innerHTML = "User Name is empty!";
        flag = false;
    }
    
    if(password === "") {
        passwordErr.innerHTML = "Password is empty!";
        flag = false;
    }
    return flag;
}