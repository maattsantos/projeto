<!DOCTYPE html>
<html lang="pt-br">
	<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Contact Manager</title>
		
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	</head>
	<body>
            <main class="main-home d-flex align-items-center">
                <header>
                    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
                        <a class="navbar-brand" href="#">
                        <img src="images/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
                          Contact Manager
                        </a>
                      </nav>
                </header>
                <div class="container d-flex flex-column align-items-center">
                    <h1 class="text-light text-center">Contact Manager</h1>
                    <h4 class="text-light text-center">Cadastre, altere ou remova. Faça do seu jeito!</h4>    
                    <a href="#add-contato" class="text-light mt-4">Iniciar</a>
                </div>
            </main>
			<section class="container">
				<h2>Meus Contatos</h2>
				<label for="filtrar-tabela">Pesquisar Contato: </label>
				<input type="text" name="filtro" id="filtrar-tabela" placeholder="Digite o nome do contato">
				<table class="table">
					<thead>
						<tr>
							<th>Nome</th>
							<th>Telefone</th>
							<th>E-mail</th>
                            <th>Logradouro</th>
                            <th>Numero</th>
                            <th>Complemeto</th>
                            <th>Bairro</th>
                            <th>Cidade</th>
                            <th>UF</th>
                            <th>CEP</th>
						</tr>
					</thead>
					<tbody id="tabela-contatos">
						
					</tbody>
				</table>
			</section>
		</main>

		<section class="container" id="add-contato">
		    <h2 id="titulo-form">Adicionar novo contato</h2>
			<ul id="mensagens-erro"></ul>
		    <form  action="controller/adiciona_contato_controller.php" id="form-adiciona" method="POST">
		        <div class="form-group">
		            <label for="nome">Nome:
                        <input id="nome" name="nome" type="text" placeholder="Digite o nome" class="form-control">
                    </label>
		        </div>
		        <div class="form-group">
		            <label for="telefone">Telefone:
		                <input id="telefone" name="telefone" type="text" placeholder="Ex: 99 99999-9999" class="form-control">
                    </label>
                </div>
		        <div class="form-group">
		            <label for="email">E-mail:
                        <input id="email" name="email" type="email" placeholder="Ex: usuario@examplo.com" class="form-control">
                    </label>
                </div>
		        <div class="form-group">
		            <label for="cep">Cep:
                        <input id="cep" name="cep" type="text" value="" size="10" maxlength="9" placeholder="Ex: 12345000" onblur="pesquisacep(this.value)" class="form-control">
                    </label>
                </div>
                <div class="form-group">
		            <label for="logradouro">Logradouro:
		                <input id="logradouro" name="logradouro" type="text" size="60" class="form-control">
                    </label>
                </div>
                <div class="form-group">
                    <label for="numero">Número:
                        <input id="numero" name="numero" type="text" size="10" class="form-control">
                    </label>
                </div>
                <div class="form-group">
                    <label for="complemento">Complemento:
                        <input id="complemento" name="complemento" size="10" type="text" class="form-control">
                    </label>
                </div>
                <div class="form-group">
                    <label for="bairro">Bairro:
                        <input id="bairro" name="bairro" type="text" size="40" class="form-control">
                    </label>
                </div>
                <div class="form-group">
                    <label for="cidade">Cidade:
                        <input id="cidade" name="cidade" type="text" size="40" class="form-control">
                    </label>
                </div>
                <div class="form-group">
                    <label for="uf">UF:
                        <input id="uf" name="uf" type="text" size="2" class="form-control">
                    </label>
                </div>
		        <input type="submit" id="adicionar-contat" class="botao bto-principal" value="Adicionar">
            </form>
		</section>

		<script src="js/form.js" ></script>
		<script src="js/remover.js" ></script>
		<script src="js/filtra.js" ></script>
		<script src="js/buscar-cep.js" ></script>

	</body>
</html>