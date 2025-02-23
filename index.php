<!doctype html>
<html lang="en" class="h-100" data-bs-theme="auto">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.118.2">
    <title>ใบยืมทรัพย์สิน</title>
    <link rel="icon" type="image/x-icon" href="/icon/vis.ico">

    <?php
    include('conn/conn.php');
    include('ins_lib.php');

    if(empty($_GET['menu'])){
        $menu = 1;
    }else{
        $menu = $_GET['menu'];
    }
    
    ?>




</head>

<body class="d-flex flex-column h-100">
    <header class="p-2 bg-dark text-white mb- border-bottom ">
        <div class="container-fluid ">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">


                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="index.php?menu=1"
                            class="nav-link px-2 py-1 link-light <?php if($menu == 1){echo 'active';} ?>">
                            <img src="icon/logo.png" class="rounded-circle" width="40" height="40">
                            ระบบใบยืมทรัพย์สิน     
                        </a>
                    </li>
                    <li><a href="index.php?menu=3"
                            class="nav-link px-5 link-secondary  <?php if($menu == 3){echo 'active';} ?>">
                            แผนก     
                        </a>
                    </li>
                </ul>




                <div class="dropdown text-end">
                    <a href="" class="d-block link-light text-decoration-none dropdown-toggle" id="dropdownUser1"
                        data-bs-toggle="dropdown" aria-expanded="false">

                        <i class="bi bi-person-circle"></i>
                    </a>
                    <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">

                        <li><a class="dropdown-item" href="#">ออกจากระบบ</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>


    <!-- Begin page content -->
    <main class="flex-shrink-0">
        <div class="container-fluid">
            <?php 
                switch ($menu) {
                    case 1:include('page_lend.php');break;
                    case 2:include('report_lend.php');break;
                    case 3:include('page_dept.php');break;

                    default:include('page_lend.php');break;
                }
            ?>
        </div>
    </main>



    <!-- ส่วนเนื้อท้าย -->
    <footer>

    </footer>

</body>

</html>