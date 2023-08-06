
var Fnameerror = document.getElementById('error1');
var Passworderror = document.getElementById('error2');
var Emailerror = document.getElementById('error3');
var Gendererror = document.getElementById('error4');
var submiterror = document.getElementById('error5');
var loginerror = document.getElementById('error6');
var emailloginerror = document.getElementById('error7');



function Namevalidation(){
    var name = document.getElementById('Fname').value;
    if(name.length == 0){
        Fnameerror.innerHTML = 'Name Required';
        return false;
    }
    if(!name.match(/^[A-Za-z]*\s{1}[A-Za-z]*$/)){
        Fnameerror.innerHTML = 'Invalid Full Name';
        return false;
    }
    else{
        Fnameerror.innerHTML = '<i class="fa-solid fa-check"></i>'
        return true;
    }

}
function Passwordvalidation(){
    var password = document.getElementById('Password').value;
    

    if(password.length <= 8){
        Passworderror.innerHTML = 'Weak password';
        return false;
    }
    if(!password.match(/^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/)){
        Passworderror.innerHTML = 'Weak password';
        return false;
    }
    else{
        Passworderror.innerHTML = '<i class="fa-solid fa-check"></i>'
        return true;
    }
}
function Emailvalidation(){
    var email = document.getElementById('Email').value;
    
    if(!email.match(/^[A-Za-z\._\-[0-9]*[@][A-Za-z]*[\.][a-z]{2,4}$/)){
        Emailerror.innerHTML = 'Invalid Email';
        return false;
    }
    else{
        Emailerror.innerHTML = '<i class="fa-solid fa-check"></i>'
        return true;
    }
}
function Gendervalidation(){
    var gender = document.getElementById('Gender').value;
    
    if(gender.length <= 0){
        Gendererror.innerHTML = 'Invalid gender';
        return false;
    }
    else{
        Gendererror.innerHTML = '<i class="fa-solid fa-check"></i>'
        return true;
    }

}
function Formvalidation(){
    if ( !Namevalidation() || !Passwordvalidation() || !Emailvalidation() || !Gendervalidation() ){
    submiterror.innerHTML == 'Please correct above ones first';
    return false;
    }
    
}
function Emailloginvalidation(){
    var emaillogin = document.getElementById('email1').value;
    
    if(!emaillogin.match(/^[A-Za-z\._\-[0-9]*[@][A-Za-z]*[\.][a-z]{2,4}$/)){
        emailloginerror.innerHTML = 'Invalid Email';
        return false;
    }
    else{
        emailloginerror.innerHTML = '<i class="fa-solid fa-check"></i>'
        return true;
    }
}
function Loginvalidation(){
    if (!Emailloginvalidation()){
        loginerror.style.display = 'block';
        loginerror.innerHTML == 'Please correct above Errors';
        setTimeout(function(){loginerror.style.display = 'none';}, 3000);
        return false;
    }
    
}




