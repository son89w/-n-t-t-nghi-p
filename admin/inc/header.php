<?php
    ob_start();
    include '../lib/session.php';
    Session::checkSession();
?>
<!doctype html>
<html lang="en">
  <head>
    <title>ADMIN</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/danhmuc.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
    <script src="js/scripts.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="tinymce/js/tinymce/tinymce.min.js"></script>
    
    <script>
        tinymce.init({
            selector: '#mytextarea',
            theme: "modern",
            height: 200,
            width: '100%',
        
            plugins: ["advlist autolink link image lists charmap print preview hr anchor pagebreak",
            "searchreplace wordcount visualblocks visualchars insertdatetime media nonbreaking",
            "table contextmenu directionality emoticons paste textcolor code"
            ],

            toolba1 : "undo redo | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent",
            toolba2 : "| link unlink anchor | image media | forecolor backcolor | print preview code | caption",

            image_caption : true,
            image_advtab: true
    });
    tinymce.init({
            selector: '#mytextarea1',
            theme: "modern",
            height: 200,
            width: '100%',
        
            plugins: ["advlist autolink link image lists charmap print preview hr anchor pagebreak",
            "searchreplace wordcount visualblocks visualchars insertdatetime media nonbreaking",
            "table contextmenu directionality emoticons paste textcolor code"
            ],

            toolba1 : "undo redo | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent",
            toolba2 : "| link unlink anchor | image media | forecolor backcolor | print preview code | caption",

            image_caption : true,
            image_advtab: true
    });
    </script>
</head>
  <body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="index.php">Start Bootstrap</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
            </div>
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i><?php echo Session::get('adminName') ?></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="">Settings</a></li>
                    <li><a class="dropdown-item" href="">Activity Log</a></li>
                    <li><hr class="dropdown-divider" /></li>
                    <?php
                            if(isset($_GET['action']) && $_GET['action']=='logout'){
                                Session::admin();
                            }
                        ?>  
                    <li>
                        <a class="dropdown-item" href="?action=logout">Logout</a>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>