<?php
    include 'inc/header.php';
    include 'inc/menu.php';
    include '../classes/brand.php';
?>
<?php
    if(!isset($_GET['brandid']) || $_GET['brandid']==NULL){
        echo "<script>window.location ='tableth.php'</script>";
     }else{
          $id = $_GET['brandid']; 
     }
      $brand = new brand();
     if ($_SERVER['REQUEST_METHOD'] == 'POST') {
 
         $brandName = $_POST['brandName'];
         $updateBrand = $brand->update_brand($brandName,$id);
         
     }
?>
<div id="layoutSidenav_content">
    <dir class="card-body row" style="width: 50%; margin: auto;">
        <form action="" method="post" class="text-center">
            <h1>SỬA THƯƠNG HIỆU</h1>
            <?php
                    $get_brand_name = $brand->getbrandbyId($id);
                    if($get_brand_name){
                        while($result = $get_brand_name->fetch_assoc()){
                       
                       
            ?>
            <input type="text" value="<?php echo $result['brandName'] ?>" name="brandName" class="form-control" placeholder="Làm ơn nhập sửa thương hiệu...">
            <?php
                if(isset($updateBrand)){
                    echo $updateBrand;
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
            