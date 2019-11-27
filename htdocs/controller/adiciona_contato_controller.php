<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Contact Manager</title>
		
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	</head>
    <body>
    <script src="js/form.js" ></script>
		<script src="js/remover.js" ></script>
		<script src="js/filtra.js" ></script>
		<script src="js/buscar-cep.js" ></script>
    </body>
    <?php 
require_once '../models/Contato.php';
require_once '../dao/ContatoDao.php';

//Capturando dados do form
$nome = $_POST["nome"];
$telefone = $_POST["telefone"];
$email = $_POST["email"];
$logradouro = $_POST["logradouro"];
$numero = $_POST["numero"];
$complemento = $_POST["complemento"];
$bairro = $_POST["bairro"];
$cidade = $_POST["cidade"];
$uf = $_POST["uf"];
$cep = $_POST["cep"];

//Adicionando os dados no model
$contato = new Contato();
$contato->setNome($nome);
$contato->setTelefone($telefone);
$contato->setEmail($email);
$contato->setLogradouro($logradouro);
$contato->setNumero($numero);
$contato->setComplemento($complemento);
$contato->setBairro($bairro);
$contato->setCidade($cidade);
$contato->setUf($uf);
$contato->setCep($cep);

//Adicionando model Contato no banco
$dao = New ContatoDao();
if($dao->adicionaContato($contato)){
    include '../index.php';
}


?>