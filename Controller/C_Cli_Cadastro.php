<?php

include '../Model/M_Cliente.php';
session_start();
$cliente = new M_Cliente("", "", "", "", "", "", "", "", "", "", "", "", "", "","");

if ($_POST['firstname'] != null
&& $_POST['lastname'] != null
&& $_POST['nascimento'] != null
&& $_POST['phone'] != null
&& $_POST['estado'] != null
&& $_POST['cidade'] != null
&& $_POST['bairro'] != null
&& $_POST['log'] != null
&& $_POST['lognome'] != null
&& $_POST['cpf'] != null
&& $_POST['login'] != null
&& $_POST['senha'] != null
&& $_POST['numero'] != null
) {

    if ($_FILES["fileToUpload"]["name"] != null) {
        
    
$target_dir = "../perfisUsuarios/";
$extensao = pathinfo($_FILES["fileToUpload"]["name"]);
$extensao = ".".$extensao['extension'];
$imagem = time().uniqid(md5("")).$extensao;
$target_file = $target_dir . basename($imagem);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));


// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
// echo "Sorry, your file is too large.";
$uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
$uploadOk = 0;
}
// Verifica se deu algum erro
if ($uploadOk == 0) {
echo "Sorry, your file was not uploaded.";
// Se tudo estiver ok, ele tenta fazer o upload
} else {
if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
//echo $imagem;
} else {
echo "Sorry, there was an error uploading your file.";
}

}
    }else{
        $imagem = "usuariosemfoto.jpg";
    }
$cliente->setImg($imagem);
$cliente->setNome($_POST['firstname']);
$cliente->setSobrenome($_POST['lastname']);
$cliente->setNasc($_POST['nascimento']);
$cliente->setTelefone($_POST['phone']);
$cliente->setEstado($_POST['estado']);
$cliente->setCidade($_POST['cidade']);
$cliente->setBairro($_POST['bairro']);
$cliente->setLogradouro($_POST['log']);
$cliente->setNomelogra($_POST['lognome']);
$cliente->setCpf($_POST['cpf']);
$cliente->setLogin($_POST['login']);
$cliente->setSenha($_POST['senha']);
$cliente->setNumero($_POST['numero']);


$cliente->cadastro($cliente->getNome(), $cliente->getSobrenome(), $cliente->getNasc(), $cliente->getTelefone(), $cliente->getEstado(), $cliente->getCidade(), 
        $cliente->getBairro(), $cliente->getLogradouro(), $cliente->getNomelogra(), $cliente->getCpf(), $cliente->getLogin(), $cliente->getSenha(), $cliente->getNumero(), $cliente->getImg())


?>
<script type="text/javascript">
    alert("Cadastrado com Sucesso!");
        location.href = '../View/index.php';
</script>
<?php
}else{
    ?>
    <script type="text/javascript">
        alert("A Campoos Vazios!");
        location.href = '../View/Cadastrar.php';
    </script>
    <?php

}
?>

