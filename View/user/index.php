<?php
session_start();

if(isset($_SESSION['nome'])){
    echo "bem vindo". $_SESSION['nome'];

}else{
    header("location: ../index.php");
}
