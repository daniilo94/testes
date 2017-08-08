<?php
/**
 * Created by PhpStorm.
 * User: danilo.silva
 * Date: 07/08/2017
 * Time: 17:27
 */

require_once "Pessoa.php";

if(isset($_POST['action'])){
    switch ($_POST['action']){
        case "s":
            echo "S";
            break;
        case "add-pessoa":
            $pessoa = new Pessoa($_POST['nome'], $_POST['idade']);
            var_dump($pessoa->getIdade());
            break;
    }
}
else{
    header("Location: index.php");
}