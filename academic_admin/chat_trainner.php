<?php

session_start();
if(!(isset($_SESSION['password']))){
	header('Location:../login.php');
}

$id = $_SESSION['id'];

?>
<!doctype html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="utf-8"/>
    <title>وحدة التدريب التعاوني</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard" name="description"/>
    <meta content="Themesbrand" name="author"/>
    <!-- App favicon -->
    <link rel="shortcut icon" href="images/logo.jpeg">

    <!-- Bootstrap Css -->
    <link href="css/bootstrap-rtl.min.css" id="bootstrap-style" rel="stylesheet" type="text/css"/>
    <!-- Icons Css -->
    <link href="css/icons-rtl.min.css" rel="stylesheet" type="text/css"/>
    <!-- App Css-->
    <link href="css/app-rtl.min.css" id="app-style" rel="stylesheet" type="text/css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Arabic:wght@300&display=swap" rel="stylesheet">
    <style>
    *{
        font-family: 'IBM Plex Sans Arabic', sans-serif;
    }
    </style>
</head>

<body data-sidebar="dark" cz-shortcut-listen="true">

<!-- Begin page -->
<div id="layout-wrapper">

    <header id="page-topbar">
        <div class="navbar-header">
            <div class="d-flex">
                <!-- LOGO -->
                <div class="navbar-brand-box">
                    <a href="../index.php" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="images/logo.png" alt="" height="22">
                                </span>
                        <span class="logo-lg">
                                    <img src="images/logo.png" alt="" height="20">
                                </span>
                    </a>

                    <a href="../index.php" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="images/logo.png" alt="" style="height: 60px;width: 60px" height="22">
                                </span>
                        <span class="logo-lg">
                                    <img src="images/logo.png" alt=""  height="20">
                                </span>
                    </a>
                </div>

                <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect vertical-menu-btn">
                    <i class="fa fa-fw fa-bars"></i>
                </button>

                <!-- App Search-->
                <div class="ms-5 my-auto">
                    <?php

                        include('../connect.php');  
                        $sql1 = $con->prepare("SELECT * FROM academic_admins WHERE account_id='$id'");      
                        $sql1->execute();
                        $rows1 = $sql1->fetch();
                        

                    ?> 
                    <span>مرحبا بك</span>, <b><?php echo $rows1['name']; ?></b>
                </div>

            </div>

            <div class="d-flex">

                <!-- <div class="dropdown d-inline-block">
                    <button style="cursor: default" type="button" class="btn header-item waves-effect"  data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                        <img class="rounded-circle header-profile-user" src="images/sa.png" alt="Header Avatar">
                    </button>
                </div> -->

                
                
                <div class="dropdown d-inline-block">
                    <button type="button" style="cursor: default" class="btn header-item" id="page-header-user-dropdown"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        
                        <span  class="d-none d-xl-inline-block ms-1 fw-medium font-size-15">مشرف اكاديمي</span>
                    </button>
                </div>

                <div class="dropdown d-inline-block">
                    <button type="button"  data-bs-toggle="modal" data-bs-target="#logout"
                            class="btn header-item waves-effect"
                            aria-haspopup="true" aria-expanded="false">
                        <span class="d-none d-xl-inline-block ms-1 fw-medium font-size-15 text-danger">تسجيل الخروج <i class="fas fa-sign-out-alt ms-1" style="scale: -1;"></i></span>
                    </button>
                </div>

            </div>
        </div>

    </header>
    <div class="modal fade" id="logout" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">تسجيل الخروج !</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    هل أنت متأكد من تسجيل الخروج ؟
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-dark" data-bs-dismiss="modal">تراجع</button>
                    <a href="../logout.php" type="button" class="btn btn-danger">تسجيل خروج</a>
                </div>
            </div>
        </div>
    </div>
    <!-- ========== Left Sidebar Start ========== -->
    <div class="vertical-menu mm-active">

        <!-- LOGO -->
        <div class="navbar-brand-box">

            <div>
                <a href="../index.php" class="logo logo-light">
                <span class="logo-lg">
                    <img src="images/logo.png" style="display: block;
                        margin-left: auto;
                        margin-right: auto;
                        height: 100px;">
                </span>
                </a>
            </div>
        </div>

        <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect vertical-menu-btn">
            <i class="fa fa-fw fa-bars"></i>
        </button>

        <div data-simplebar="init" class="sidebar-menu-scroll mm-show">
            <div class="simplebar-wrapper" style="margin: 0px;">
                <div class="simplebar-height-auto-observer-wrapper">
                    <div class="simplebar-height-auto-observer"></div>
                </div>
                <div class="simplebar-mask" style="margin-top: 30px">
                    <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                        <div class="simplebar-content-wrapper"
                             style="height: 100%; overflow: hidden; padding-right: 0px; padding-bottom: 0px;">
                            <div class="simplebar-content" style="padding: 0px;">

                                <!--- Sidemenu -->
                                <div id="sidebar-menu" class="mm-active">
                                    <!-- Left Menu Start -->
                                    <ul class="metismenu list-unstyled mm-show" id="side-menu">
                                        <li class="">
                                            <a href="index.php" class="active" aria-expanded="false">
                                                <i class="fas fa-home"></i>
                                                <span>الصفحة الرئيسية</span>
                                            </a>
                                        </li>

                                        <li class="">
                                            <a href="profile.php" class="active" aria-expanded="false">
                                                <i class="fas fa-user-edit"></i>
                                                <span>تعديل الملف الشخصي</span>
                                            </a>
                                        </li>

                                        <li class="">
                                            <a href="#" class="active">
                                                <small class="text-muted">الادارة</small>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="students.php" class="active" aria-expanded="false">
                                                <i class="fas fa-file-alt"></i>
                                                <span>بيانات الطلاب</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="weekly_reports.php" class="active" aria-expanded="false">
                                                <i class="fas fa-file-alt"></i>
                                                <span>التقارير الأسبوعية</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="training_admins.php" class="active" aria-expanded="false">
                                                <i class="fas fa-user-tie"></i>
                                                <span>نماذج المشرفين الميدانيين</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="#" class="active">
                                                <small class="text-muted">اخرى</small>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="#" class="active" aria-expanded="false"
                                                data-bs-toggle="modal" data-bs-target="#notification">
                                                <i class="fas fa-bell"></i>
                                                <span>ارسال اعلان لكل الطلاب</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="chats.php" class="active" aria-expanded="false">
                                                <i class="fas fa-comments"></i>
                                                <span>المحادثات</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- Sidebar -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="simplebar-placeholder" style="width: auto; height: 169px;"></div>
            </div>
            <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                <div class="simplebar-scrollbar" style="transform: translate3d(0px, 0px, 0px); display: none;"></div>
            </div>
            <div class="simplebar-track simplebar-vertical" style="visibility: hidden;">
                <div class="simplebar-scrollbar"
                     style="height: 519px; transform: translate3d(0px, 0px, 0px); display: none;"></div>
            </div>
        </div>
    </div>
    <!-- Left Sidebar End -->

   <div class="modal fade" id="notification" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">ارسال اعلان لكل الطلاب</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                 <?php
                  
                if(isset($_POST['add_ads'])){

                $ads = $_POST['ads'];
                $sql1 = $con->prepare("SELECT * FROM academic_admins WHERE account_id='$id'");      
                $sql1->execute();
                $rows1 = $sql1->fetch();
                $acad_id = $rows1['id']; 
                 
                 include('../connect.php');

                 $sql1 = "INSERT INTO advertisments (ads , academic_id) VALUES ('$ads' , '$acad_id')";

                  $con->exec($sql1);

              echo '
                <div class="container" dir="rtl" style="margin-top:80px;color:#000">
                    <div class="alert alert-success role="alert" style="color:#000">
                        تم ارسال الاعلان لكل الطلاب بنجاح
                    </div>
                </div>';



                }


              ?>
                <form method="post">
                <div class="modal-body">
                    
                        <div>
                            <h4 class="form-label" for="name">محتوى الاعلان</h4>
                            <textarea type="text" class="form-control" style="text-align: right" name="ads" id="name" required
                                    placeholder="أدخل محتوى الاعلان المراد ارساله" rows="5"></textarea>
                        </div>
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-dark" data-bs-dismiss="modal">تراجع</button>
                    <button type="submit" name="add_ads" class="btn btn-success">ارسال <i class="fa fa-paper-plane"></i></button>
                </div>
                </form>    
            </div>
        </div>
    </div>

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-flex align-items-center justify-content-between">
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item active">المحادثة</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                             <?php
                  
                              if(isset($_POST['add'])){


                                $acad_id = $rows1['id'];

                                $train_id = isset($_GET['train_id']) && is_numeric($_GET['train_id']) ? intval($_GET['train_id']) : 0;
                                $message = $_POST['message'];
                                $chat_date = date('Y-m-d');    
                                $chat_time = date('H:i:s');   
                                include('../connect.php');  

                                $sql = "INSERT INTO messages_a_and_t (content , message_date , message_time , academic_supervisor_id , type , opposer_id) VALUES ('$message' , '$chat_date' , '$chat_time' , '$acad_id' , 'A_To_T' , '$train_id')";

                                 $con->exec($sql);

                              }


                            ?>
                            <?php

                            include('../connect.php');  
                             $train_id = isset($_GET['train_id']) && is_numeric($_GET['train_id']) ? intval($_GET['train_id']) : 0;

                             $stmtt = $con->prepare("SELECT name  FROM training_admins WHERE id='$train_id'");
                             $stmtt->execute();
                             $rowss = $stmtt->fetch();

                             ?> 
                            <div class="card-body">
                                <h4 class="card-title mb-4">تفاصيل المحادثة مع <strong>المشرف الميداني /  <?php echo $rowss['name']; ?></strong></h4>

                                <div class="chat-container">
                                    <!-- هنا يمكنك عرض رسائل الشات -->
                                    <?php
										   
                                        include('../connect.php');  
                                        $sql = $con->prepare("SELECT
                                          messages_a_and_t.* , academic_admins.id , training_admins.name as train_name
                                       FROM
                                          messages_a_and_t

                                       LEFT JOIN
                                          academic_admins	  

                                       ON
                                          messages_a_and_t.academic_supervisor_id = academic_admins.id

                                        LEFT JOIN
                                          training_admins	  

                                       ON
                                          messages_a_and_t.trainning_supervisor_id = training_admins.id");
                                        $sql->execute();
                                        $rows = $sql->fetchAll();

                                        foreach($rows as $pat)
                                        {

                                            if($pat["academic_supervisor_id"] == $rows1['id'] && $pat["opposer_id"] == $train_id){

                                      ?>
                                    <div class="chat-message bg-primary text-light py-5 px-3 rounded my-2">
                                        <strong>أنا:</strong> <?php echo $pat['content']; ?>
                                    </div>
                                    <?php }elseif($pat["trainning_supervisor_id"] == $train_id && $pat["opposer_id"] == $rows1['id']){ ?>
                                    <div class="chat-message bg-light text-dark py-5 px-3 rounded my-2">
                                        <strong><?php echo $pat['train_name']; ?>:</strong> <?php echo $pat['content']; ?>
                                    </div>
                                    <?php }} ?>

                                    <form method="post" class="form d-flex align-items-center justify-content-between gap-2">
                                        <input type="text" name="message" placeholder="اكتب رسالتك هنا..." class="form-control text-start" required>
                                        <button name="add" type="submit" class="btn btn-success text-nowrap">ارسال <i class="fa fa-paper-plane"></i></button>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div> <!-- container-fluid -->
        </div> <!-- page-content -->
    </div> <!-- main-content -->

</div>
<!-- END layout-wrapper -->


<!-- JAVASCRIPT -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/metisMenu.min.js"></script>


<script src="js/dashboard.init.js"></script>

<!-- App js -->
<script src="js/app.js"></script>

</body>
</html>