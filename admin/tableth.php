<?php
    include 'inc/header.php';
    include 'inc/menu.php';
    include '../classes/brand.php'
?>
<?php
    $brand = new brand();
    if(isset($_GET['delid'])){
       $id = $_GET['delid']; 
       $delbrand = $brand->del_brand($id);
   }
?>

<div id="layoutSidenav_content">
    <dir class="card-body row">
        <div class="card mb-4">
            <div class="text-center darken-grey-text mb-4">
                <h1 class="font-bold mt-4 mb-3 h5">TABLE THƯƠNG HIỆU</h1>
                <a class="btn btn-danger btn-md" href="themth.php">Thêm danh mục</a>
                <br>
                <?php

                    if(isset($delbrand)){
                        echo $delbrand;
                    }

                ?>  
            </div>
            <div class="card-body">
                <!--Table-->
                <table class="table table-hover">
                    <!--Table head-->
                    <thead class="mdb-color darken-3">
                        <tr>
                            <th>STT</th>
                            <th>DANH MỤC</th>
                            <th>HOẠT ĐỘNG</th>
                        </tr>
                    </thead>
                    <!--Table head-->
                    <!--Table body-->
                    <tbody>
                        <?php
                            $show_brand = $brand->show_brand();
                            if($show_brand){
                                $i = 0;
                                while($result = $show_brand->fetch_assoc()){
                                    $i++;
                                
                        ?>
                        <tr>
                            <th scope="row"><?php echo $i; ?></th>
                            <td><?php echo $result['brandName'] ?></td>
                            <td>
                                <a href="suath.php?brandid=<?php echo $result['brandId'] ?>">Edit</a> 
                                || 
                                <a onclick = "return confirm('Bạn chắc xóa <?php echo $result['brandName'] ?> không?')" href="?delid=<?php echo $result['brandId'] ?>">Delete</a></td>
                            </td>
                        </tr>
                        <?php
                                }
                            }
						?>
                    </tbody>
                    <!--Table body-->
                </table>
                <!--Table-->
            </div>
        </div>
    </dir>

<?php
    include 'inc/footer.php';
?>
            