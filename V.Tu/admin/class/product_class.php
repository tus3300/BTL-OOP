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
    public function insert_product($_POST,$_FILES){
        $product_name = $_POST['product_name'];
        $cartegory_id = $_POST['cartegory_id'];
        $brand_id = $_POST['brand_id'];
        $product_price = $_POST['product_price'];
        $product_price_saleoff = $_POST['product_price_saleoff'];
        $product_desc = $_POST['product_desc'];
        $product_img = $_FILES['product_img']['name'];
        $filetype = strtolower(pathinfo($product_img,PATHINFO_EXTENSION));
        $filesize = $_FILES['product_img']['size'];
        if(file_exists("imgs/$filetarget")) {
            $alert = "file đã tồn tại";
            return $alert;
        }

        else{
        if($filetype !=  "jpg" && $filetype !=  "png" && $filetype !=  "jfif"  ){
            $alert = "file không đúng định dạng,chọn lại file jpg,png,jfif";
            return $alert;
        }
        else{   
            if($filesize > 1000000){
                $alert = "file không được lớn hơn 1MB ";
                return $alert;
            }
            else{
                move_uploaded_file($_FILES['product_img']['name'], "imgs/".$_FILES['product_img']['name']);
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
                if($result){
                    $query = "SELECT * FROM tbl_product ORDER BY product_id DESC LIMIT 1";
                    $result = $this->db->select($query)->fetch_assoc();
                    $product_id = $result['product_id'];
                    $filename = $_FILES['product_img_desc']['name'];
                    $filetmp = $_FILES['product_img_desc']['tmp_name'];
                    $filettarget = basename($_FILES['product_img_desc']['tmp_name']);
        
                    foreach ($filename as $key => $value){
                        move_uploaded_file( $filetmp [$key], "imgs/".$value);
                        $query ="INSERT INTO tbl_product_img_desc  (product_id,product_img_desc) VALUES ('$product_id','$value') ";
                        $result = $this->db->insert($query);
                    }
            }
       
        }
        }
        }

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
    public function show_brand_ajax($product_id) {
        $query = "SELECT * FROM tbl_product WHERE product_id = $product_id";
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

Squery = “INSERT INTO tbl_product_img desc (product_id,product_img_desc) VALUES (* $product_id”, “$value*)";
BOLE Me est ade. aoe
