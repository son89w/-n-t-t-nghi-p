<?php
    include 'inc/header.php';
    include 'inc/menu.php';
    include '../classes/category.php';
    include '../classes/brand.php';
    include '../classes/product.php';
?>
<?php
	$pd = new product();
	if(isset($_GET['delid'])){
        $id = $_GET['delid']; 
        $delpro = $pd->del_product($id);
    }
?>

<div id="layoutSidenav_content">
    <dir class="card-body row">
        <div class="card mb-4">
            <div class="text-center darken-grey-text mb-4">
                <h1 class="font-bold mt-4 mb-3 h5">TABLE SẢN PHẨM</h1>
                <a class="btn btn-danger btn-md" href="themsp.php">Thêm sản phẩm</a><br>
                <?php
                    if(isset($delpro)){
                        echo $delpro;
                    }
                ?> 
            </div>
            
            <div class="card-body">
                <!--Table-->
                <table class="table myaccordion table-hover" id="accordion">
                    <thead>
                        <tr class="text-center">
                            <th>STT</th>
                            <th>TÊN SẢN PHẨM</th>
                            <th>HÌNH ẢNH</th>
                            <th>GIÁ</th>
                            <th>DANH MỤC</th>
                            <th>THƯƠNG HIỆU</th>
                            <th>LOẠI SẢN PHẨM</th>
                            <th>HOẠT ĐỘNG</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        <?php
                            $pdlist = $pd->show_product();
                            if($pdlist){
                                $i = 0;
                            while($result = $pdlist->fetch_assoc()){
                                $i++;
                        ?>
                        <tr class="text-center" data-toggle="collapse" data-target="#collapse" aria-expanded="true" aria-controls="collapse">
                            <th scope="row"><?php echo $i ?></th>
                            <td><?php echo $result['productName'] ?></td>
                            <td><img src="uploads/<?php echo $result['image'] ?>" width="80"></td>
                            <td><?php echo $result['price'] ?></td>
                            <td><?php echo $result['catName'] ?></td>
                            <td><?php echo $result['brandName'] ?></td>
                            <td><?php 
                                    if($result['type']==0){
                                        echo 'Nổi bật';
                                    }else{
                                        echo 'Không nổi bật';
                                    }
                                ?>
                            </td>
                            <td>
                                <a href="suasp.php?productid=<?php echo $result['productId'] ?>">Edit</a>
                                || 
                                <a onclick = "return confirm('Bạn chắc xóa <?php echo $result['productName'] ?> không?')" href="?delid=<?php echo $result['productId'] ?>">Delete</a>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="8" id="collapse" class="collapse show acc" data-parent="#accordion">
                                <div class="card" style="padding: 10px;">
                                    <p><b>Mô tả: </b><?php echo $result['product_desc'] ?></p>
                                </div>
                            </td>
                        </tr>
                        <?php
                                }
                            }
                        ?>
                        
                    </tbody>
                </table>
                <!--Table-->
            </div>
        </div>
    </dir>

<?php
    include 'inc/footer.php';
?>
            