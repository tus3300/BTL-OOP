<?php
use LDAP\Result;
include "../database.php";
?>

<?php
class cartegory{
    private $db;
    public function __construct(){
        $this -> db = new Database();
    }
    public function insert_cartegory($cartegory_name){
        $query = "INSERT INTO tbl_category(cartegory_name) VALUES ($cartegory_name)";
        $result = $this->db->insert($query);
        header('Location:cartegorylist.php');
        return $result;
    }
    public function show_cartegory(){
        $query = "SELECT * FROM tbl_category ORDER BY cartegory_id DESC";
        $result = $this->db->select($query);
        return $result;
    }
    
    public function get_cartegory($cartegory_id) {
        $query = "SELECT tbl_brand*,tbl_cartegory.cartegory_name  FROM tbl_bradn INNER JOIN tbl_cartegory ON tbl_brand.cartegory_id=tbl_cartegory.cartegory_id ORDER BY tbl_brand.brand_id DESC ";
        $result = $this->db->select($query);
        header('Location:brandlist.php');
        return $result;
    }
    public function update_cartegory($cartegory_name,$cartegory_id){
        $query = "UPDATE tbl_category SET cartegory_name = $cartegory_name WHERE cartegory_id = '$cartegory_id' ";
        $result = $this->db->update($query);
        header('Location:cartegorylist.php');
        return $result;
    }
    public function delete_cartegory($cartegory_id){
        $query = "DELETE FROM tbl_category WHERE cartegory_id = '$cartegory_id' ";
        $result = $this->db->delete($query);
        header('Location:cartegorylist.php');
        return $result;
    }
}
?>
