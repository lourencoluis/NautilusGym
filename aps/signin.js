$("#txtTelefone").mask("(00)90000-0000");
$("#txtCep").mask("00000-000");
$("#txtCpf").mask("000.000.000-00");

 function VerificarSenhas(senha1, senha2) {
    if ((senha1 != "") && (senha2 != "") && (senha1 === senha2)) {
        console.log("correto");
        document.querySelector("#senha").classList.add("valid")
        document.querySelector("#senha2").classList.add("valid")
        document.querySelector("#senha").classList.remove("invalid")
        document.querySelector("#senha2").classList.remove("invalid")
    }else{
        document.querySelector("#senha").classList.add("invalid")
        document.querySelector("#senha2").classList.add("invalid")
        document.querySelector("#senha").classList.remove("valid")
        document.querySelector("#senha2").classList.remove("valid")
        console.log("errado");

    }
 }

 function VerificaForm(formulario,s1,s2,nome,tel,email,cep){
    if (s1 == "" || s2 =="" || nome =="" || tel =="" || email =="" || cep =="") {
        return false;

    }else{
        return true;
    }
         console.log(formulario,s1,s2,nome,tel,email,cep);
        
    
 }