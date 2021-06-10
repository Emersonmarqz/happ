$(document).ready(function(){


    $('#formRegisterCompanie').submit(function(e) {
        e.preventDefault();
        nameCompanie = $('#nameCompanie').val();
        cnpjCompanie = $('#cnpjCompanies').val();
        emailCompanie = $('#emailCompanie').val();
        cityCompanie = $('#cityCompanie').val();
        stateCompanie = $('#stateCompanie').val();
        passwordCompanie = $('#passwordCompanie').val();
        passwordConfirm = $('#password-confirmation').val();
        if(passwordCompanie != passwordConfirm){
            alert('As senhas não correspondem.')
            return;
        }
        dataReturnInput =  {nameCompanie, cnpjCompanie, emailCompanie, cityCompanie, stateCompanie, passwordCompanie,
                    passwordConfirm}
        funcRegisterPage.sendRegisterCompanies(dataReturnInput);            
    }) 
    const funcRegisterPage = {
        sendRegisterCompanies: (data)=>{
            $.ajax({
                type: 'POST',
                url: '../requisitions/registerCompany.php',
                data: data,
                
                success: (result) => {
                        const dataReturn = JSON.parse(result)
                        console.log(dataReturn);
                        if (dataReturn.status == 'company_add_success'){
                            alert('Cadastro realizado com sucesso!')   
                            return          
                        }
                    
                },
                error: (error) => {
                    console.log(error);
                }
            });
        },
    }
    $('#formRegisterCompanie').submit(funcRegisterPage.getDataRegisterCompanies);
})