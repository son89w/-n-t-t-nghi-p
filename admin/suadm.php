<?php
    include 'inc/header.php';
    include 'inc/menu.php';
    include '../classes/category.php';
?>
<?php
    $cat = new category();
    if(!isset($_GET['catid']) || $_GET['catid']==NULL){
        echo "<script>window.location ='tabledm.php'</script>";
    }else{
          $id = $_GET['catid']; 
    }
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $catName = $_POST['catName'];
        $updateCat = $cat->update_category($catName,$id);
        
    }
?>
<div id="layoutSidenav_content">
    <dir class="card-body row" style="width: 50%; margin: auto;">
        <form action="" method="post" class="text-center">
            <h1>SỬA DANH MỤC</h1>
            <?php
                    $get_cate_name = $cat->getcatbyId($id);
                    if($get_cate_name){
                        while($result = $get_cate_name->fetch_assoc()){
                       
            ?>
            <input type="text" name="catName" value="<?php echo $result['catName'] ?>" class="form-control" placeholder="Làm ơn nhập sửa danh mục...">
            <?php
                if(isset($updateCat)){
                    echo $updateCat;
                }
            ?>
            <div class="text-center mt-3">
                <button type="submit" class="btn btn-primary">UPDATE</button>
            </div>
            <?php
                    }
                }
            ?>
        </form>
    </dir>

<?php
    include 'inc/footer.php';
?>
            