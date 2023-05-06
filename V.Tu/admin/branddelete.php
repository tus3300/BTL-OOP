<?php
include "class/category-class.php";
$brand = new brand;
if (!isset($_GET['brand_id']) || $_GET['brand_id'] == NULL){
    echo"<scrip>window.location = 'brand.php' </scrip>";
}
else{
    $brand_id = $_GET['brand id'];
}
    $delete_brand = $brand -> delete_brand($brand_id);
    
?>