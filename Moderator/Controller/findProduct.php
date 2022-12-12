<?php

require_once '../Model/model.php';

if (isset($_POST['findProduct'])) {
	
		echo $_POST['p_name'];

    try {
    	
    	$allSearchedProduct = searchProduct($_POST['p_name']);
    	require_once '../View/showSearchedProduct.php';

    } catch (Exception $ex) {
    	echo $ex->getMessage();
    }
}

