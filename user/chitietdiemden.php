<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- <link href="https://scontent.iocvnpt.com/resources/portal/Images/CTO/superadminportal.cto/Logo/logo_636971561338402893.png" rel="Shortcut Icon"> -->
    <link rel="stylesheet" href="./public//assets/css/boostrap.css">
    <link rel="stylesheet" href="./public//assets/css/main.css">
    <link rel="stylesheet" href="./public//assets/css/style.css">
    <link rel="stylesheet" href="./public//assets/css/loading.css">
    <title>Du Lịch Trà Vinh</title>
</head>
<?php 
    // Kết nối cơ sở dữ liệu
    include('../connect.php');
    
    if (isset($_GET['madiemden'])) {
        $maDiemDen = $_GET['madiemden'];
        // Truy vấn dữ liệu với madiemden đã nhận được
        $sql = "SELECT * FROM `tbldiemden` WHERE `madiemden` = $maDiemDen";
        $result = $conn->query($sql);
      
        if ($result->num_rows > 0) {
            // Lấy dữ liệu từ bảng và hiển thị form để cập nhật
            $row = $result->fetch_assoc();
            $tenDiemDuLich = $row["tendiemden"];
            $DiaChi = $row["diachi"];
            $GioMoCua = $row["giomocua"];
            $GioDongCua = $row["giodongcua"];
            $GioThamQuan = $row["giothamquan"];
            $Gia = $row["gia"];
            $MoTa = $row["mota"];
            $hinhanh = $row['hinhanh'];
        } else {
            echo "Không tìm thấy dữ liệu với madiemden = $maDiemDen đã cho.";
        }
      } else {
        echo "Không có có bài viết.";
      }
    
    // Đóng kết nối
    $conn->close();
?>
<body>
<header id="header">
    <div class="header-top bgc--green text--white p-1 px-3">
        <div class="d-flex justify-content-end justify-content-sm-between" style="position:relative;overflow:hidden;">
            <div class="left d-none d-sm-block">
                <div class="contact-info-contain d-flex">
                    <a href="#" style="" class="mirror-hotline-left me-2 me-md-5 text--white">
                        <i class="bi bi-envelope-fill"></i>
                        <span class="font-inter">ttxtdltravinh@gmail.com</span>
                    </a>
                </div>
            </div>
            <a id="slider_hotline" href="#" style="" class="">
                <i class="bi bi-telephone-fill"></i>
                <span class="font-inter">Hotline hỗ trợ: 0974894750</span>
            </a>
        </div>
    </div>
    <nav class="navbar navbar-expand-xl bgc--white">
        <div class="container-fluid">
            <a class="navbar-brand" href="../index.php">
                <img src="logo.png" width="70" class="img-responsive" alt="hinhanh">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav-content" aria-controls="nav-content" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
    <div class="collapse navbar-collapse" id="nav-content">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                TIN TỨC
            </a>
            <ul class="dropdown-menu">
                <li>
                    <a class="dropdown-item" href="#">Sự kiện du lịch</a>
                </li>
                <li>
                    <a class="dropdown-item" href="#">Giới thiệu Trà Vinh</a>
                </li>
                <li>
                    <a class="dropdown-item" href="#">Thông báo</a>
                </li>
                <li>
                    <a class="dropdown-item" href="#">Văn hóa Trà Vinh</a>
                </li>
                <li>
                    <a class="dropdown-item" href="#">Lịch sử Trà Vinh</a>
                </li>
            </ul>
            </li>
            <li class="nav-item">
            <a class="nav-link " href="diemden.php">ĐIỂM ĐẾN</a>
            </li>                               
           <!-- <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                DỊCH VỤ
            </a>
            <ul class="dropdown-menu">
                <li>
                    <a class="dropdown-item" href="#">Mua sắm</a>
                </li>
                <li>
                    <a class="dropdown-item" href="#">Giải trí</a>
                </li>
            </ul>
                
            </li>       
            <li class="nav-item">
            <a class="nav-link " href="#">LỊCH TRÌNH</a>
            </li>       -->                   
            <form class="d-flex" role="search">
                <button class="btn text--white btn-green" id="login_system" type="button">Đăng nhập</button>
            </form>
            </div>
        </div>
    </nav>
</header>

<main id="tin-tuc-chi-tiet-page">

    

<style>
    #tin-tuc-chi-tiet-page div.content img{
        width:100% !important;
    }
</style>
<div class="container">

    <div class="thanh-dieu-huong pt-4">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="./index.php">Trang chủ</a></li>
                <li class="breadcrumb-item"><a href="./index.php">Thông báo</a></li>

                <li class="breadcrumb-item active" aria-current="page"><?php echo $tenDiemDuLich?></li>
            </ol>
        </nav>
    </div>
        <div class="row g-3 py-2 py-lg-5 pt-lg-2">
            <div class="col-12 col-lg-8">
<article class="article-container">
    <div class="p-3 bg-white">
        <div class="heading">
            <h1 class="text--green fw-bold"><?php echo $tenDiemDuLich?></h1>
            <div class="d-flex mb-4">
                <div class="views">
                    <div class="d-flex">
                        <i class="bi bi-eye-fill"></i>
                       <!-- <span>813</span> -->
                    </div>
                </div>
                
            </div>
        </div>
        <div class="content">
        <p style="text-align:center">
            <span style="color:#000000">
                <span style="font-size:18px">
                    <span style="font-family:Arial,Helvetica,sans-serif">
                        <strong>
                            <img alt="" data-pos="0" data-socail-link="" src="../hinhanh/<?php echo $row['hinhanh']?>" title="<?php echo $row['tendiemden']?>">
                        </strong>
                    </span>
                </span>
            </span>
        </p>
        <p style="text-align:left">
            <span style="color:#000000">
                <span style="font-size:18px">
                    <span style="font-family:Arial,Helvetica,sans-serif">Loại hình du lịch:</span>
                </span>
            </span>
            <span style="font-size:18px">
                <span style="font-family:Arial,Helvetica,sans-serif">
                    <span style="color:#2980b9">
                    <?php 
                    $maloaihinh = $row['maloaihinh'];
                    $sql3 = "SELECT tenloaihinh FROM tblloaihinh WHERE maloaihinh = $maloaihinh";
                    $conn3 = new mysqli("localhost", "root", "", "db_dulich");
                    $result3 = $conn3->query($sql3);
                        if ($result3->num_rows > 0) {
                            $row_loaihinh = $result3->fetch_assoc();
                            echo $row_loaihinh['tenloaihinh'];
                        } else {
                            echo "Không tìm thấy loại hình du lịch.";
                        }
                    ?>
                </span>
                </span>
            </span>
            </p>
        <p style="text-align:left">
            <span style="color:#000000">
                <span style="font-size:18px">
                    <span style="font-family:Arial,Helvetica,sans-serif">Địa chỉ:</span>
                </span>
            </span>
            <span style="font-size:18px">
                <span style="font-family:Arial,Helvetica,sans-serif">
                    <span style="color:#2980b9"><?php echo $DiaChi?></span>
                </span>
            </span>
            </p>
            <p style="text-align:left">
            <span style="color:#000000">
                <span style="font-size:18px">
                    <span style="font-family:Arial,Helvetica,sans-serif">Giá vé:</span>
                </span>
            </span>
            <span style="font-size:18px">
                <span style="font-family:Arial,Helvetica,sans-serif">
                    <span style="color:#2980b9"><?php 
                    if($Gia == 0 ) 
                    {
                        echo "Miễn Phí";
                    } else {
                        echo $Gia;
                    }?>
                    </span>
                </span>
            </span>
            </p>
            
            <p style="text-align:left">
            <span style="color:#000000">
                <span style="font-size:18px">
                    <span style="font-family:Arial,Helvetica,sans-serif">Giờ mở cửa:</span>
                </span>
            </span>
            <span style="font-size:18px">
                <span style="font-family:Arial,Helvetica,sans-serif">
                    <span style="color:#2980b9"><?php echo $GioMoCua?></span>
                </span>
            </span>
            </p>
            <p style="text-align:left">
            <span style="color:#000000">
                <span style="font-size:18px">
                    <span style="font-family:Arial,Helvetica,sans-serif">Giờ đóng cửa:</span>
                </span>
            </span>
            <span style="font-size:18px">
                <span style="font-family:Arial,Helvetica,sans-serif">
                    <span style="color:#2980b9"><?php echo $GioDongCua?></span>
                </span>
            </span>
            </p>
            <p style="text-align:left">
            <span style="color:#000000">
                <span style="font-size:18px">
                    <span style="font-family:Arial,Helvetica,sans-serif">Giờ tham quan:</span>
                </span>
            </span>
            <span style="font-size:18px">
                <span style="font-family:Arial,Helvetica,sans-serif">
                    <span style="color:#2980b9"><?php echo $GioThamQuan?></span>
                </span>
            </span>
            </p>
        
        <p style="text-align:justify">
            <span style="color:#000000">
                <span style="font-size:18px">
                    <span style="font-family:Arial,Helvetica,sans-serif">
                    <?php echo $row['mota']?>
                    </span>
                </span>
            </span>
        </p>
        </div>
    </div>
</article>
            </div>
            <div class="col-12 col-lg-4">
                <aside class="aside-container">
                    <div class="p-3 bg-white">
    <h5 class="fw-bold text--green text-center text-lg-start">Tin Mới Nhất</h5>
    <div class="list-more-news d-flex flex-column">
    <?php
        // Truy vấn dữ liệu từ bảng tbldiemden
        $sql2 = "SELECT * FROM tblbaiviet";
        $conn2 = new mysqli("localhost", "root", "", "db_dulich");
        $result2 = $conn2->query($sql2);
        while($row = $result2->fetch_assoc()){ ?>
        <div class="col-12 col-md-6 col-lg-12">
                    <a href="">
                        <section class="more-news-card mb-2">
    <div class="card-contain">
        <div class="d-flex align-items-center justify-content-center">
            <img src="../hinhanh/<?php echo $row['hinhanh']?>">
            <div class="card-content-right ms-3">
                <h6><?php echo $row['tenbaiviet']?></h6>
                <div class="d-flex-mid">
                    <div class="d-flex align-items-center text--black">
                        <i class="bi bi-eye-fill text--gray me-2"></i>
                        <!-- <span class="font-inter">840 </span> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
                        </section>
                    </a>
        </div>                                  
    <?php 
 }?>
        
    </div> 
</div>


</main>
<footer id="footer" style="background-image: url('/Content/theme/imgs/bg-foot.png');">
  <div class="bg-black">
      <div class="container-xxl py-4">
          <div class="row g-md-3 g-2">
<div class="col-12 col-sm-2 col-lg-2">
    <div class="social-contain">
        <div class="mb-2">
            <img src="https://dulichtravinh.com.vn/wp-content/uploads/2021/09/tin-tuc-9.jpg" alt="logo">
        </div>
        <div class="d-flex align-items-center justify-content-between">
                <a href="https://www.facebook.com/pages/S%E1%BB%9F-V%C4%83n-H%C3%B3a-Th%E1%BB%83-Thao-Du-L%E1%BB%8Bch-Tr%C3%A0-Vinh/330280760708586?locale=vi_VN" target="_blank" title="Facebook">
                    <img src="https://scontent.iocvnpt.com/resources/portal/Images/CTO/superadminportal.cto/facebook_190873608.png" alt="Facebook">
                </a>
                                            <a href="https://www.youtube.com/@daiptthtv" target="_blank" title="Youtube">
                    <img src="https://scontent.iocvnpt.com/resources/portal/Images/CTO/superadminportal.cto/youtube_376986465.png" alt="Youtube">
                </a>
                                            <a href="" target="_blank" title="Tiktok">
                    <img src="https://scontent.iocvnpt.com/resources/portal/Images/CTO/superadminportal.cto/tiktok_358407052.png" alt="Tiktok">
                </a>
        </div>
    </div>
</div>
<div class="col-12 col-sm-10 col-lg-4">
    <div class="mid">
        <h3 class="text--white" style="font-size: 14px;">
            <p>SỞ VĂN HÓA, THỂ THAO VÀ DU LỊCH THÀNH PHỐ TRÀ VINH<br>
            TRUNG TÂM XÚC TIẾN DU LỊCH TRÀ VINH</p>

        </h3>
        <div class="information-contain">
            <div class="d-flex info align-items-start">
                <div class="d-flex align-items-center info-prop">
                    <i class="bi bi-geo-alt-fill text--green me-3"></i>
                    <span class="text--white">Địa chỉ</span>
                </div>
                <div class="info-value">
                    <span class="text--white">6A Nguyễn Thị Minh Khai- phường 1 - Thành phố Trà Vinh - Tỉnh Trà Vinh</span>
                </div>
            </div>
        </div>
        <div class="information-contain">
            <div class="d-flex info align-items-start">
                <div class="d-flex align-items-center info-prop">
                    <i class="bi bi-telephone-fill text--green me-3"></i>
                    <span class="text--white">Số điện thoại</span>
                </div>
                <div class="info-value">
                    <span class="text--white">
                    0294 3851819 - 0294 3841819
                    </span>
                </div>
            </div>
        </div>
        <div class="information-contain">
            <div class="d-flex info align-items-center">
                <div class="d-flex align-items-center info-prop">
                    <i class="bi bi-envelope-fill text--green me-3"></i>
                    <span class="text--white">Email</span>
                </div>
                <div class="info-value">
                    <span class="text--white">ttxtdltravinh@gmail.com</span>
                </div>
            </div>
        </div>
    </div>
</div>
              <div class="col-12 col-sm-4 col-lg-2">
                  <div class="foot-right foot-links px-5">
            <h4 class="text--white text-center">LIÊN KẾT</h4>
            <ul>
                <li><a href="#">Trang chủ</a></li>
                <li><a href="#">Khách sạn</a></li>
                <li><a href="#">Ẩm thực</a></li>
                <li><a href="#">Khám phá</a></li>
                <li><a href="#">Mua sắm</a></li>
                <li><a href="#">Lịch trình</a></li>
                <li><a href="#">Về đêm</a></li>
            </ul>
        </div>
    </div>
    <div class="col-12 col-sm-4 col-lg-2">
        <div class="foot-right">
            <h4 class="text--white text-center">LIÊN KẾT WEBSITE</h4>
            <ul id="link_website">
                            <li>
                                <a target="_blank" href="https://bvhttdl.gov.vn">
                                    Bộ Văn Hóa, Thể Thao và Du Lịch
                                </a>
                            </li>
                            <li>
                                <a target="_blank" href="https://vietnamtourism.gov.vn">
                                    Cục Du lịch Quốc gia Việt Nam
                                </a>
                            </li>

            </ul>
        </div>
    </div>
</footer>
  </div>
</body>
</html>