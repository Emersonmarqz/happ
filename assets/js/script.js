$(document).ready(function(){

    $("#cnpjCompanies").mask("99.999.999/9999-99");
    
    $('#formRegisterCompanie').submit(function(e) {
        e.preventDefault();
        $('.inputPassword').css('background-color', 'white');
        $('.inputcnpj').css('background-color', 'white');
        $('.inputNameCompany').css('background-color', 'white');
        let nameCompanie = $('#nameCompanie').val();
        let cnpjCompanie = $('#cnpjCompanies').val();
        let emailCompanie = $('#emailCompanie').val();
        let cityCompanie = $('#cityCompanie').val();
        let stateCompanie = $('#stateCompanie').val();
        let passwordCompanie = $('#passwordCompanie').val();
        let passwordConfirm = $('#password-confirmation').val();
        let specialityCompanie = $('#specialityCompany').val();
        if(nameCompanie < 2) {
            $('.inputNameCompany').css('background-color', '#ec121254');
        }
        if(cnpjCompanie.length < 14) {
            $('.inputcnpj').css('background-color', '#ec121254');
            return
        }
        if(passwordCompanie != passwordConfirm){
            $('.inputPassword').css('background-color', '#ec121254');
            return;
        }
        dataReturnInput =  {
            nameCompanie, 
            cnpjCompanie,
            emailCompanie,
            cityCompanie,
            stateCompanie,
            passwordCompanie,
            passwordConfirm,
            specialityCompanie
        }
        funcRegisterPage.sendRegisterCompanies(dataReturnInput);            
    });
    
    
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
                        window.location.href='../view/planos.php'       
                    }
                },
                error: (error) => {
                    console.log(error);
                }
            });
        },
    }
    const funcLoginPage = {
        loginAutentication: (data)=> {
            $.ajax({
                type: 'POST',
                url: '../requisitions/loginAutentication.php',
                data: data,
                success: (result) => {
                    const dataReturn = JSON.parse(result)
                    if(dataReturn.dataUser != 'company_not_found'){
                        window.location.href='../view/profile.php'
                        return;
                    }
                    alert('Login ou senha invalido.')
                },
                error: (error) => {
                    console.log(error);
                }
            });
        },
        getDataLoginForCheck: ()=> {
            let login = $('#floatingInput').val();
            let password = $('#floatingPassword').val();
            data = {login, password}
            funcLoginPage.loginAutentication(data); 
        }
    } 


    $('#buttonLogin').click(funcLoginPage.getDataLoginForCheck)
})