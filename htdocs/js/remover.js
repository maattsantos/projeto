var contatos = document.querySelectorAll(".contato");

var tabela = document.querySelector("#tabela-contatos");

tabela.addEventListener("click", function(event) {
    event.target.parentNode.classList.add("fadeOut");

    setTimeout(function() {
        event.target.parentNode.remove();
    }, 500);

});
