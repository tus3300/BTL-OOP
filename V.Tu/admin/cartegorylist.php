<?php
include "header.php";
include "slider.php";
include "class/category-class.php";
?> 
<?php
$cartegory = new cartegory;
$show_cartegory = $cartegory ->show_cartegory();
?>    

<div class="admin-content-right">
<div class="admin-content-right-carterogy_list">
                <h1>Danh sach danh muc</h1>
                <table>
                    <tr>
                        <th>Stt</th>
                        <th>ID</th>
                        <th>Danh muc</th>
                        <th>Dieu chinh</th>
                    </tr>
                    <?php
                    if($show_cartegory){
                        $i=0;
                        while($result = $show_cartegory->fetch_assoc()){
                            $i++;
                        }
                    }
                    ?>
                    <tr>
                        <td><?php echo $i ?></td>
                        <td><?php echo $result['cartegory_id']?></td>
                        <td><?php echo $result['cartegory_name']?></td>
                        <td><a href="">Sua</a>|
                            <a href="">Xoa</a>
                        </td>
                    </tr>
                    <?php 
                    ?>
                </table>
            </div>
        </div>
    </section>

</body>
</html>