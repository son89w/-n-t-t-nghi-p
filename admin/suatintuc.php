<?php
    include 'inc/header.php';
    include 'inc/menu.php';
    include '../classes/brand.php';
    include '../classes/blog.php';
?>
<?php
    $blog = new blog();

    if(!isset($_GET['id']) || $_GET['id']==NULL){
       echo "<script>window.location ='tablett.php'</script>";
    }else{
         $id = $_GET['id']; 
    }
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
        
        $updateblog = $blog->update_blog($_POST,$_FILES,$id);
        
    }
?>

<div id="layoutSidenav_content">
    <dir class="card-body row" style="width: 70%; margin: auto;">
        <h1 class="text-center">SỬA TIN TỨC</h1>
        <?php
         $get_blog_by_id = $blog->getblogbyId($id);
            if($get_blog_by_id){
                while($result_blog = $get_blog_by_id->fetch_assoc()){
        ?> 
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Tiêu đề</label>
                <div class="col-sm-10">
                <input type="text" name="title" class="form-control"  value="<?php echo  $result_blog['title']?>">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Thương hiệu</label>
                <div class="col-sm-10">
                <select id="inputState" name="brand" class="form-control">
                    <option selected>...Chọn thương hiệu...</option>
                    <?php
                        $brand = new brand();
                        $brandlist = $brand->show_brand();

                        if($brandlist){
                            while($result = $brandlist->fetch_assoc()){
                    ?>

                    <option
                        <?php
                            if($result['brandId']==$result_blog['brandId']){ echo 'selected';  }
                        ?>
                         value="<?php echo $result['brandId'] ?>"><?php echo $result['brandName'] ?></option>

                    <?php
                            }
                        }
                    ?>
                </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Mô tả</label>
                <div class="col-sm-10">
                    <textarea id="mytextarea" name="desc"><?php echo  $result_blog['description']?></textarea>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Nội dụng</label>
                <div class="col-sm-10">
                    <textarea id="mytextarea1" name="content"><?php echo  $result_blog['content']?></textarea>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label text-right">Hình ảnh</label>
                <div class="col-sm-10">
                    <img src="uploads/<?php echo $result_blog['image'] ?>" width="90"><br>
                    <input type="file" name="image" id="">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Trạng thái</label>
                <div class="col-sm-10">
                <select id="inputState" name="type" class="form-control">
                    <?php
                        if($result_blog['status']==0){
                    ?>
                    <option selected value="0">Hiện</option>
                    <option value="1">Ẩn</option>
                    <?php
                        }else{
                    ?>
                    <option value="0">Hiện</option>
                    <option selected value="1">Ẩn</option>
                    <?php
                        }
                    ?>
                </select>
                </div>
            </div>
            <div class="form-group text-center">
                <?php
                    if(isset($updateblog)){
                        echo $updateblog;
                    }
                ?><br>
                <input type="submit" name="submit" Value="Update" />
                <!-- <button type="submit" name="submit" class="btn btn-primary">SAVE</button> -->
            </div>
        </form>
    <?php
            }
        }
    ?>
</dir>

<?php
    include 'inc/footer.php';
?>
            