<?php
include "header.php";
include "slider.php";
include "class/category-class.php";
?> 
<?php
if (!isset($_GET['cartegory_id']) || $_GET['cartegory_id'] == NULL){
    echo"<scrip>window.location = 'cartegory.php'   </scrip>";
}
else{
    $cartegory_id = $_GET['cartegory id'];
}
    $get_cartegory = $cartegory -> get_cartegory($cartegory_id);
    if ($get_cartegory){
        $result = $get_cartegory -> fetch_assoc();
    }
?>

<?php
if($_SERVER['REQUEST_METHOD']==='POST'){
    $cartegory_name = $_POST['cartegory_name'];
    $update_cartegory = $cartegory->update_cartegory($cartegory_name,$cartegory_id);
}
?>       
    
<div class="admin-content-right">
        <div class="admin-content-right-carterogy">
                <h1>Them danh muc</h1>
                <form action="" method="POST">
                    <input name ="cartegory_name" type="text" placeholder="Nhap ten" 
                    value="<?php 
                    echo $result['$cartegory_name'];
                    ?>">
                    <button style="background-color:red;border:cyan;color:white";type="submit">Add</button>
                </form>
            </div>
        </div>
    </section>

</body>
</html>
 






