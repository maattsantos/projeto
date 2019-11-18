var botaoAdicionar = document.querySelector("#adicionar-contato");
botaoAdicionar.addEventListener("click", function(event) {
    event.preventDefault();

    var form = document.querySelector("#form-adiciona");

    var contato = obtemContatoDoFormulario(form);

    adicionaContatoNaTabela(contato);

    form.reset();

});

function obtemContatoDoFormulario(form) {

    var contato = {
        nome: form.nome.value,
        telefone: form.telefone.value,
        email: form.email.value,
        logradouro: form.logradouro.value,
        numero: form.numero.value,
        complemento: form.complemento.value,
        bairro: form.bairro.value,
        cidade: form.cidade.value,
        uf: form.uf.value,
        cep: form.cep.value
    }

    return contato;
}

function montaTr(contato) {
    var contatoTr = document.createElement("tr");
    contatoTr.classList.add("contato");

    contatoTr.appendChild(montaTd(contato.nome, "info-nome"));
    contatoTr.appendChild(montaTd(contato.telefone, "info-telefone"));
    contatoTr.appendChild(montaTd(contato.email, "info-email"));
    contatoTr.appendChild(montaTd(contato.logradouro, "info-logradouro"));
    contatoTr.appendChild(montaTd(contato.numero, "info-numero"));
    contatoTr.appendChild(montaTd(contato.complemento, "info-complemento"));
    contatoTr.appendChild(montaTd(contato.bairro, "info-bairro"));
    contatoTr.appendChild(montaTd(contato.cidade, "info-cidade"));
    contatoTr.appendChild(montaTd(contato.uf, "info-uf"));
    contatoTr.appendChild(montaTd(contato.cep, "info-cep"));

    return contatoTr;
}

function montaTd(dado, classe) {
    var td = document.createElement("td");
    td.classList.add(classe);
    td.textContent = dado;

    return td;
}

function validaContato(contato) {

    var erros = [];

    if (contato.nome.length == 0) {
        erros.push("O nome não pode ser em branco");
    }

    if (contato.telefone.length == 0) {
        erros.push("O telefone não pode ser em branco");
    }

    if (conotato.email.length == 0) {
        erros.push("O e-mail não pode ser em branco");
    }

    if (contato.logradouro.length == 0) {
        erros.push("O logradouro não pode ser em branco");
    }
    
    if (contato.numero.length == 0) {
        erros.push("O numero não pode ser em branco");
    }

    if (contato.bairro.length == 0) {
        erros.push("O bairro não pode ser em branco");
    }

    if (contato.cidade.length == 0) {
        erros.push("O cidade não pode ser em branco");
    }

    if (contato.uf.length == 0) {
        erros.push("O uf não pode ser em branco");
    }
    
    if (contato.cep.length == 0) {
        erros.push("O cep não pode ser em branco");
    }

    return erros;
}

function exibeMensagensDeErro(erros) {
    var ul = document.querySelector("#mensagens-erro");
    ul.innerHTML = "";

    erros.forEach(function(erro) {
        var li = document.createElement("li");
        li.textContent = erro;
        ul.appendChild(li);
    });
}

function adicionaContatoNaTabela(contato) {
    var contatoTr = montaTr(contato);
    var tabela = document.querySelector("#tabela-contatos");
    tabela.appendChild(contatoTr);
}
