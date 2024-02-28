function signupValidation(pForm) {
    const firstname = pForm.firstname.value;
    const surname = pForm.surname.value;
    const mobileoremail = pForm.mobileoremail.value;
    const password = pForm.password.value;
    const dob = pForm.dob.value; // Assuming you have an input element with name="dob"
    const gender = pForm.gender.value; // Assuming you have an input element with name="gender"

    let flag = true;

    const firstnameErr = document.getElementById('firstnameErr');
    const surnameErr = document.getElementById('surnameErr');
    const mobileoremailErr = document.getElementById('mobileoremailErr');
    const passwordErr = document.getElementById('passwordErr');
    const dobErr = document.getElementById('dobErr'); // Assuming you have an element with id="dobErr"
    const genderErr = document.getElementById('genderErr'); // Assuming you have an element with id="genderErr"

    firstnameErr.innerHTML = "";
    surnameErr.innerHTML = "";
    mobileoremailErr.innerHTML = "";
    passwordErr.innerHTML = "";
    dobErr.innerHTML = "";
    genderErr.innerHTML = "";

    if(firstname === "") {
        firstnameErr.innerHTML = "First Name is empty!";
        flag = false;
    }
    if(surname === "") {
        surnameErr.innerHTML = "Sur Name is empty!";
        flag = false;
    }
    if(mobileoremail === "") {
        mobileoremailErr.innerHTML = "Mobile or email Name is empty!";
        flag = false;
    }
    
    if(password === "") {
        passwordErr.innerHTML = "Password is empty!";
        flag = false;
    }
    if(dob === "") {
        dobErr.innerHTML = "Dob is empty!";
        flag = false;
    }
    if(gender === "") {
        genderErr.innerHTML = "Gender is empty!";
        flag = false;
    }

    return flag;
}
