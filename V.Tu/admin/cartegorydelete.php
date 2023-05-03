<?php
include "class/category-class.php";
$cartegory = new cartegory;
if (!isset($_GET['cartegory_id']) || $_GET['cartegory_id'] == NULL){
    echo"<scrip>window.location = 'cartegory.php'   </scrip>";
}
else{
    $cartegory_id = $_GET['cartegory id'];
}
    $delete_cartegory = $cartegory -> delete_cartegory($cartegory_id);
    
?>