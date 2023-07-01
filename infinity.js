// let a=document.getElementById('ps').value;

// function passwordchecker(){
//     if(a==b){
//         alert("Welcome! Password accepted.");
//     }
//     else {
//         alert("Password is incorrect");
//     }
// }
function checkPassword(form) {
    password1 = form.password1.value;
    let b="Admin";
    // password2 = form.password2.value;
    if(password1==b){
        alert("Welcome! Password accepted.");
        return(true);
    }
    else {
        alert("Password is incorrect");
        return(false);
    }
}
