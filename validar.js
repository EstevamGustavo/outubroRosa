function validarCPF(cpf){
    var check = cpf.replace(/(\.|\/|\-)/g,"");
    return check;

}


function validarPalestrante() {
    var nome = document.forms["formPalestrante"]["nome"].value;
    var email = document.forms["formPalestrante"]["email"].value;
    var cpf = document.forms["formPalestrante"]["cpf"].value;
    var formacao = document.forms["formPalestrante"]["formacao"].value;
    var descricao = document.forms["formPalestrante"]["descricao"].value;
    var dia_nasc = document.forms["formPalestrante"]["dia_nasc"].value;
    var mes_nasc = document.forms["formPalestrante"]["mes_nasc"].value;
    var ano_nasc = document.forms["formPalestrante"]["ano_nasc"].value;
    var cpf = validarCPF(cpf);


    if (nome == "" || nome.length > 100) {
        alert("Nome invalido!");
        return false;
    }
    if (email == "" || email.length > 100) {
        alert("Email invalido!");
        return false;
    }
    if (cpf == "" || cpf.length > 11 || cpf.length < 11) {
        alert("CPF invalido!");
        return false;
    }
    if (formacao == "" || formacao.length > 200) {
        alert("Formação invalida!");
        return false;
    }
    if (descricao == "" || descricao.length > 100) {
        alert("Descrição invalida!");
        return false;
    }
    if (mes_nasc == 2 && dia_nasc > 29) {
        alert("Data invalida!");
    }
    if (mes_nasc == "" || (mes_nasc == 4 || mes_nasc == 6 || mes_nasc == 9 || mes_nasc == 11) && dia_nasc > 30) {
        alert("Data nvalida!");
        return false;
    }
    if (dia_nasc == "" || dia_nasc > 31) {
        alert("Data invalida!");
        return false;
    }
    if (dia_nasc == '' || ano_nasc == ''){
        alert("Data invalida!");
        return false;
    }
    
}