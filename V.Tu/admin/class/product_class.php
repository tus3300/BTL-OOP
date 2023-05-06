<?php
use LDAP\Result;
include "../database.php";
?>

<?php
class product{
    private $db;
    public function __construct(){
        $this -> db = new Database();
    }
    public function insert_product(){
        $product_name = $_POST['product_name'];
        $cartegory_id = $_POST['cartegory_id'];
        $brand_id = $_POST['brand_id'];
        $product_price = $_POST['product_price'];
        $product_price_saleoff = $_POST['product_price_saleoff'];
        $product_desc = $_POST['product_desc'];
        $product_img = $_FILES['product_img'].['name'];
        $query = "INSERT INTO tbl_product(
        product_name,
        cartegory_id,
        brand_id,
        product_price,
        product_price_saleoff,
        product_desc,
        product_img) VALUES 
        ('$product_name',
        '$cartegory_id',
        '$brand_id',
        '$product_price',
        '$product_price_saleoff',
        '$product_desc',
        '$product_img')";
        $result = $this->db->insert($query);
        return $result;
    }
    public function show_cartegory(){
        $query = "SELECT * FROM tbl_category ORDER BY cartegory_id DESC";
        $result = $this->db->select($query);
        return $result;
    }
    public function show_brand(){
        $query = "SELECT * FROM tbl_product ORDER BY product_id DESC";
        $result = $this->db->select($query);
        return $result;
    }
    public function get_product($product_id) {
        $query = "SELECT * FROM tbl_product WHERE product_id = $product_id";
        $result = $this->db->select($query);
        return $result;
    }
    public function get_cartegory($cartegory_id) {
        $query = "SELECT * FROM tbl_category WHERE cartegory_id = $cartegory_id";
        $result = $this->db->select($query);
        return $result;
    }
    public function update_product($cartegory_id,$product_name,$product_id){
        $query = "UPDATE tbl_product SET product_name = '$product_name',cartegory_id = '$cartegory_id' WHERE product_id = '$product_id' ";
        $result = $this->db->update($query);
        header('Location:productlist.php');
        return $result;
    }
    public function delete_product($product_id){
        $query = "DELETE FROM tbl_product WHERE product_id = '$product_id' ";
        $result = $this->db->delete($query);
        header('Location:productlist.php');
        return $result;
    }
}
?>