<?php
include "header.php";
include "slider.php";
include "class/product_class.php";
?>  
?> 
<?php
$product = new product;
if($_SERVER['REQUEST_METHOD']==='POST'){
    $insert_product = $product -> insert_product($_POST,$_FILES);
    
}
?> 
<div class="admin-content-right">
<div class="admin-content-right-product_add">
                <h1>Thêm sản phẩm</h1>
                <form action="" method="POST" enctype="multipart/form-data">
                    <label for="">Nhập tên sp<span style="color: red;">*</span></label>
                    <input name="product_name" required type="text">
                    <label for="">Chọn Danh mục<span style="color: red;">*</span></label>
                    <select name="cartegory_id" id="">
                        <option value="#">--Chọn--</option>
                        <?php 
                            $show_cartegory = $product ->show_cartegory();
                            if($show_cartegory){while($result = $show_cartegory -> fetch_assoc()){
                        ?>
                        <option value="<?php echo $result['cartegory_id']?>"><?php echo $result['cartegory_name']?></option>
                        <?php
                            }}
                        ?>
                    </select>
                    <label for="">Chọn loại sp<span style="color: red;">*</span></label>
                    <select name="brand_id" id="">
                        <label for="">Chọn loại sp<span style="color: red;">*</span></label>
                        <option value="#">--Chọn--</option>
                        <?php 
                            $show_brand = $product -> show_brand();
                            if($show_brand){while($result = $show_brand -> fetch_assoc()){
                        ?>
                        <option value="<?php echo $result['brand_id']?>"><?php echo $result['brand_name']?></option>
                        <?php
                            }}
                        ?>
                    </select>
                    <label for="">Giá sp<span style="color: red;">*</span></label>
                    <input name="product_price" required type="text">
                    <label for="">Sale off<span style="color: red;">*</span></label>
                    <input name="price_saleoff" required type="text">
                    <label for="">Mô tả sp<span style="color: red;">*</span></label>
                    <textarea required name="product_desc" id="" cols="20" rows="10"></textarea>
                    <label for="">ảnh sp<span style="color: red;">*</span></label>
                    <input name="product_img" required multiple type="file">
                    <label for="">ảnh mô tả sp<span style="color: red;">*</span></label>
                    <input name="product_img_desc" required multiple type="file">
                    <button style="background-color:red;color:white";type="submit">Add</button>
                </form>
            </div>
        </div>
    </section>

</body>
</html>