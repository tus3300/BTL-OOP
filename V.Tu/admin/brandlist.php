<?php
include "header.php";
include "slider.php";
include "class/brand_class.php";
?> 
<?php
$brand = new brand;
$show_brand = $brand->show_brand();
?>    

<div class="admin-content-right">
<div class="admin-content-right-carterogy_list">
                <h1>Danh sách loại sp</h1>
                <table>
                    <tr>
                        <th>Stt</th>
                        <th>ID</th>
                        <th>Danh mục</th>
                        <th>Loại sp</th>
                        <th>Điều chỉnh</th>
                    </tr>
                    <?php
                    if($show_brand){
                        $i=0;
                        while($result = $show_brand->fetch_assoc()){
                            $i++;
                    ?>
                    <tr>
                        <td><?php echo $i ?></td>
                        <td><?php echo $result['brand_id']?></td>
                        <td><?php echo $result['cartegory_name']?></td>
                        <td><?php echo $result['brand_name']?></td>
                        <td><a href="brandedit.php?brand_id=<?php echo $result['brand_id']?>">Sửa</a>|
                            <a href="branddelete.php?brand_id=<?php echo $result['brand_id']?>">Xóa</a>
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