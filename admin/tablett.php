<?php
    include 'inc/header.php';
    include 'inc/menu.php';
    include '../classes/brand.php';
    include '../classes/blog.php';
?>
<?php
	$blog = new blog();
	if(isset($_GET['id'])){
        $id = $_GET['id']; 
        $delblog = $blog->del_blog($id);
    }
?>

<div id="layoutSidenav_content">
    <dir class="card-body row">
        <div class="card mb-4">
            <div class="text-center darken-grey-text mb-4">
                <h1 class="font-bold mt-4 mb-3 h5">TABLE TIN TỨC</h1>
                <a class="btn btn-danger btn-md" href="themtintuc.php">Thêm tin tức</a><br>
                
            </div>
            
            <div class="card-body">
                <!--Table-->
                <table class="table myaccordion table-hover" id="accordion">
                    <thead>
                        <tr class="text-center">
                            <th>STT</th>
                            <th>TIÊU ĐỀ</th>
                            <th>HÌNH ẢNH</th>
                            <th>THƯƠNG HIỆU</th>
                            <th>TRẠNG THÁI</th>
                            <th>HOẠT ĐỘNG</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $bloglist = $blog->show_blog();
                            if($bloglist){
                                $i = 0;
                            while($result = $bloglist->fetch_assoc()){
                                $i++;
                        ?>
                        <tr class="text-center" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <th scope="row"><?php echo $i ?></th>
                            <td><?php echo $result['title'] ?></td>
                            <td><img src="uploads/<?php echo $result['image'] ?>" width="80"></td>
                            <td><?php echo $result['brandName'] ?></td>
                            <td><?php 
                                    if($result['status']==0){
                                        echo 'Hiện';
                                    }else{
                                        echo 'Ẩn';
                                    }
                                ?>
                            </td>
                            <td>
                                <a href="suatintuc.php?id=<?php echo $result['id'] ?>">Edit</a>
                                || 
                                <a onclick = "return confirm('Bạn chắc xóa <?php echo $result['title'] ?> không?')" href="?id=<?php echo $result['id'] ?>">Delete</a>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="8" id="collapseOne" class="collapse show acc" data-parent="#accordion">
                                <div class="card" style="padding: 10px;">
                                    <p><b>Mô tả: </b><?php echo $result['description'] ?></p>
                                    <p><b>Nôi dụng: </b><?php echo $result['content'] ?></p>
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
            