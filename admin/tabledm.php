<?php
    include 'inc/header.php';
    include 'inc/menu.php';
    include '../classes/category.php'
?>
<?php
    $cat = new category();
    if(isset($_GET['delid'])){
        $id = $_GET['delid']; 
        $delcat = $cat->del_category($id);
    }
?>
<div id="layoutSidenav_content">
    <dir class="card-body row">
        <div class="card mb-4">
            <div class="text-center darken-grey-text mb-4">
                <h1 class="font-bold mt-4 mb-3 h5">TABLE DANH MỤC</h1>
                <a class="btn btn-danger btn-md" href="themdm.php">Thêm danh mục</a><br>
                <?php

                    if(isset($delcat)){
                        echo $delcat;
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
                            $show_cate = $cat->show_category();
                            if($show_cate){
                                $i = 0;
                                while($result = $show_cate->fetch_assoc()){
                                    $i++;
                                
                        ?>
                        <tr>
                            <th scope="row"><?php echo $i; ?></th>
                            <td><?php echo $result['catName'] ?></td>
                            <td>
                                <a href="suadm.php?catid=<?php echo $result['catId'] ?>">Edit</a> 
                                || 
                                <a onclick = "return confirm('Bạn chắc xóa <?php echo $result['catName'] ?> không ?')" href="?delid=<?php echo $result['catId'] ?>">Delete</a>
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
            