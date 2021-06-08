$(document).ready(function(){
    const funcRegisterPage = {
        sendRegisterCompanies: ()=>{
            
        },
        getDataRegisterCompanies: ()=>{
            nameCompanie = $('#nameCompanie').val();
            cnpjCompanie = $('#cnpjCompanies').val();
            emailCompanie = $('#emailCompanie').val();
            cityCompanie = $('#cityCompanie').val()
            stateCompanie = $('#stateCompanie').val()
            passwordCompanie = $('#passwordCompanie').val();
            passwordConfirm = $('#password-confirmation')
            console.log(nameCompanie, cnpjCompanie, emailCompanie, cityCompanie, stateCompanie, passwordCompanie)
            return {nameCompanie, cnpjCompanie, emailCompanie, cityCompanie, stateCompanie, passwordCompanie}
        }
    }
    $('#sendFormRegisterCompanie').click(funcRegisterPage.getDataRegisterCompanies);
})