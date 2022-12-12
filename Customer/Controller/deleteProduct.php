<?php 

require_once '../Model/model.php';

if (deleteProduct($_GET['id'])) {
    header('Location: ../View/showAllproduct.php');
}

 ?>