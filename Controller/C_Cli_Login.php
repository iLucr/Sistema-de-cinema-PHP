<?php
include '../Model/M_Cliente.php';
session_start();
$cliente = new M_Cliente("", "", "", "", "", "", "", "", "", "", "", "", "","","");

if (isset($_POST['sair'])) {
    session_destroy();
    header("location: ../View/index.php");
}

if (isset($_POST['Email']) && isset($_POST['Senha'])) {
    $cliente->setLogin($_POST['Email']);   
    $cliente->setSenha($_POST['Senha']);

    $result = $cliente->login($cliente->getLogin(), $cliente->getSenha());
    $linhas=mysqli_num_rows($result);


    if ($linhas < 1) {
        	?>
    	    <script type="text/javascript">
    		    alert("LOGIN ERRADO");
                    location.href = '../View/index.php';
            </script>
    	    <?php
    }   
    else{
    	
    	$vetor = $result->fetch_assoc();
        $_SESSION['cli'] = $vetor['cli_id'];
        $_SESSION['nome'] = $vetor['cli_nome'];
        $_SESSION['img'] = $vetor['cli_img'];
        echo $_SESSION['img'];
       header("location: ../View/adm/index.php");
        
    }

}else {
    ?>
    	    <script type="text/javascript">
    		    alert("LOGIN ERRADO");
                    location.href = '../View/index.php';
            </script>
    	    <?php
}

    
      

