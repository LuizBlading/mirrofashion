document.querySelector('input[type=email]').oninvalid = function(){
    // remove mensagens de erro antigas
    this.setCustomValidity("");

    // Reexecuta validação
    if(!this.validity.valid){
        // se invalido, coloca a mensagem de erro
        this.setCustomValidity("Email Invalido!");
    }
};