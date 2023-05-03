<?php
include "header.php";
include "slider.php";
include "class/category-class.php";
?> 
<?php
$cartegory = new cartegory;
if($_SERVER['REQUEST_METHOD']==='POST'){
    $cartegory_name = $_POST['cartegory_name'];
    $insert_cartegory = $cartegory->insert_cartegory($cartegory_name);
}
?>    

<div class="admin-content-right">
        <div class="admin-content-right-carterogy">
                <h1>Them danh muc</h1>
                <form action="" method="POST">
                    <input name ="cartegory_name" type="text" placeholder="Nhap ten">
                    <button style="background-color:red;border:cyan;color:white";type="submit">Add</button>
                </form>
            </div>
        </div>
    </section>

</body>
</html>