<?php
include "header.php";
include "slider.php";
include "class/category_class.php";
?> 
<?php
$cartegory = new cartegory;
$show_cartegory = $cartegory->show_cartegory();
?>    

<div class="admin-content-right">
<div class="admin-content-right-carterogy_list">
                <h1>Danh sách danh mục</h1>
                <table>
                    <tr>
                        <th>Stt</th>
                        <th>ID</th>
                        <th>Danh mục</th>
                        <th>Điều chỉnh</th>
                    </tr>
                    <?php
                    if($show_cartegory){
                        $i=0;
                        while($result = $show_cartegory->fetch_assoc()){
                            $i++;
                    ?>
                    <tr>
                        <td><?php echo $i ?></td>
                        <td><?php echo $result['cartegory_id']?></td>
                        <td><?php echo $result['cartegory_name']?></td>
                        <td><a href="cartegoryedit.php?cartegory_id=<?php echo $result['cartegory_id']?>">Sửa</a>|
                            <a href="cartegorydelete.php?cartegory_id=<?php echo $result['cartegory_id']?>">Xóa</a>
                        </td>
                    </tr>
                    <?php 
                        }
                    }
                    ?>
                </table>
            </div>
        </div>
    </section>

</body>
</html>