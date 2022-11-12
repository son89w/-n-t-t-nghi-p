<?php
    include 'inc/header.php';
?>
<header class="bg-dark py-5">
    <div class="container px-4 px-lg-5 my-5">
        <div class="text-center text-white">
            <h1 class="display-4 fw-bolder">Liên Hệ</h1>
        </div>
    </div>
</header>
    <aside class="container mt-3">
        <div class="row">
            <!--trái-->
            <div class="col-sm-6">
                <h3 class="text-center" style="color: red;">Liên Hệ</h3>
                <ul class="contract">
                    <li><i class="fa fa-map-marker"></i> 137 Nguyễn Đức Thuận Phường 13 Quận Tân Bình Thành phố Hồ Chí Minh</li>
                    <li><i class="fa fa-envelope-square "></i> trantandat267@gmail.com</li>
                    <li><i class="fa fa-phone "></i> 076 922 0162</li>
                </ul>
                <ul class="social-icons text-center">
                        <li><a class="facebook" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
                        <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
            </div>
            <!--bên phải-->
            <div class="col-xl-6">
                <form action="" method="post">
                    <div class="input-group mb-3">
                        <input type="hidden" name="product_id_binhluan" value="<?php echo $id ?>">
                        <span class="input-group-text fa fa-user"></span>
                        <input type="text" class="form-control" name="tennguoibinhluan" placeholder="Username">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text fa fa-user"></span>
                        <input type="email" class="form-control" name="email" placeholder="Email">
                    </div>
                    <div class="input-group">
                        <span class="input-group-text">Nôi dụng</span>
                        <textarea class="form-control" name="binhluan" aria-label="With textarea"></textarea>
                    </div>
                    <div class="input-group mt-3 ">
                        <input class="btn btn-primary" type="submit" name="comment" value="Gửi">
                    </div>
                </form>
            </div>
        </div>
    </aside>
    <article class="container">
        <div class="row mt-4">
            <div class="col-sm-12 col-md-12">
                <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.0487904160236!2d106.63600552695313!3d10.807575200000015!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752eb257b3701f%3A0x65b7c3b3491bf08b!2sSneaker%2081!5e0!3m2!1svi!2s!4v1656259395536!5m2!1svi!2s" width="100%" height="450" style="border:0;" allowfullscreen=""  loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </article>
<?php
    include 'inc/footer.php';
?>