$(document).ready(function(){
    const funcRegisterPage = {
        sendRegisterCompanies: ()=>{
            $.ajax({
                type: 'POST',
                url: '../../controllers/cadastroController/registerNewCompanie',
                data: funcRegisterPage.getDataRegisterCompanies(),
                success: (result) => {
                        const dataReturn = JSON.parse(result);
                        console.log(dataReturn);
                    
                },
                error: (error) => {
                    console.log(error);
                }
            });
        },
        getDataRegisterCompanies: ()=>{
            nameCompanie = $('#nameCompanie').val();
            cnpjCompanie = $('#cnpjCompanies').val();
            emailCompanie = $('#emailCompanie').val();
            cityCompanie = $('#cityCompanie').val();
            stateCompanie = $('#stateCompanie').val();
            passwordCompanie = $('#passwordCompanie').val();
            passwordConfirm = $('#password-confirmation').val();
            console.log(nameCompanie, cnpjCompanie, emailCompanie, cityCompanie, stateCompanie, passwordCompanie)
            return {nameCompanie, cnpjCompanie, emailCompanie, cityCompanie, stateCompanie, passwordCompanie,
                        passwordConfirm}
        }
    }
    $('#sendFormRegisterCompanie').click(funcRegisterPage.sendRegisterCompanies);
})