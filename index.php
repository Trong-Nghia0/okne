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
<link rel="stylesheet" href="./user/public/assets/css/boostrap.css">
<link rel="stylesheet" href="./user/public/assets/css/main.css">
<link rel="stylesheet" href="./user/public/assets/css/style.css">
<link rel="stylesheet" href="./user/public/assets/css/loading.css">
<title>Du Lịch Trà Vinh</title>
</head>
<?php 
// Kết nối cơ sở dữ liệu
include('./connect.php');

// Truy vấn dữ liệu từ bảng tbldiemden
$sql = "SELECT * FROM tblbaiviet LIMIT 3";
$result = $conn->query($sql);

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
<div style="" class="mirror-hotline-right right">
<div class="d-flex">
<div class="search-form d-none d-lg-flex align-items-center">
    <div class="input-search d-none">
        <input type="text" class="input-search-ele">
    </div>
    <div>
        <a href="#" class="text-white" data-bs-toggle="modal" data-bs-target="#search-form"><i class="bi bi-search"></i></a>
    </div>
</div>

</div>
</div>
    <a id="slider_hotline" href="#" style="" class="">
    <i class="bi bi-telephone-fill"></i>
    <span class="font-inter">Hotline hỗ trợ:  0974894750</span>
    </a>
</div>
</div>

<nav class="navbar navbar-expand-xl bgc--white">
<div class="container-fluid">
<a class="navbar-brand" href="./index.php">
   <!-- <img alt="" src="logo.png" width="70" class="img-responsive"> -->
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
<a class="nav-link " href="./user/diemden.php">ĐIỂM ĐẾN</a>
</li>               
      

</li>       
<!--<li class="nav-item">
<a class="nav-link " href="#">LỊCH TRÌNH</a>
</li>    
<li class="nav-item dropdown">
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
       -->        
      
<form class="d-flex" role="search">
    <button class="btn text--white btn-green" href="dangnhap.php" id="login_system" type="button">Đăng nhập</button>
</form>
</div>
</div>
</nav>
</header>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel" style="width: 96%; margin-left: 2%;">
<div class="carousel-inner">
<div class="carousel-item active">
<img class="d-block w-100" src="https://ik.imagekit.io/tvlk/blog/2022/02/dia-diem-du-lich-tra-vinh-cover.jpeg" alt="First slide">
</div>
<div class="carousel-item">
<img class="d-block w-100" src="https://intour.vn/upload/img/2022/03/15/tong_hop_cac_dia_diem_du_lich_vui_choi_noi_tieng_o_tra_vinh_1647313984.jpg" alt="Second slide">
</div>
<div class="carousel-item">
<img class="d-block w-100" src="https://dulichtravinh.com.vn/wp-content/uploads/2021/08/slider-1.jpeg" alt="Third slide">
</div>
</div>
<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
<span class="carousel-control-prev-icon" aria-hidden="true"></span>
<span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
<span class="carousel-control-next-icon" aria-hidden="true"></span>
<span class="sr-only">Next</span>
</a>
</div>
</div>

<!--<section id="home-popular-news" class="home_popular_news aos-init aos-animate" data-aos="fade-up">
<div class="container-event mt-5">
<div class="heading-custom-green">
<h2 class="text--green">TIN TỨC</h2>
<div class="line">
<hr>
</div>
</div>
<div class="row row-event">
<div class="col-12 col-md-12 col-lg-7 event-box-left">
<p class="text--green">Tin tức nổi bật</p>
<div class="line-sidebar">
<hr>
</div>
<div class="row g-3">
    <div class="col-12 col-md-8 col-lg-8">
        <a href="https://thanhtra.com.vn/xa-hoi/du-lich/tong-ket-chuong-trinh-lien-ket-hop-tac-phat-trien-du-lich-tp-hcm-va-13-tinh-thanh-dong-bang-song-cuu-long-nam-2023-218614.html">
    <section class="card-news-lates">
        <div class="card-contain first-news-img p-3" style="background-image: url('https://scontent.iocvnpt.com/resources/portal/Images/CTO/adminportal.cto/666ab85a34e09dbec4f1_54689309.jpg');">
            <div class="overlay"></div>
        </div>
        <div class="content">
            <h6 class="mt-2 first-news-title">Hội nghị tổng kết chương trình liên kết, hợp tác phát triển du lịch giữa Thành phố Hồ Chí Minh và 13 tỉnh, thành ĐBSCL</h6>
            <div class="d-flex align-items-center text--white">
                <i class="bi bi-clock-fill me-2"></i>
            </div>
            <p>
                
            </p>
        </div>
    </section>
        </a>
    </div>
<div class="col-12 col-md-4 col-lg-4">
    <div class="more-news">
        <div class="more-news-box">
        <?php
        $i = 1;
while($row = $result->fetch_assoc()){ ?>
<a href="./user/chitiet.php?mabaiviet=<?php echo $row['mabaiviet']?>">
<section class="more-news-card">
    <div class="card-contain">
        <div class="d-flex align-items-center">
            <img src="./hinhanh/<?php echo $row['hinhanh']?>" alt="">
            <div class="card-content-right ms-3">
                <h6 title="Bánh tét Trà Cuôn đạt kỷ lục châu Á" class="more-news-title"><?php echo $row['tenbaiviet']?></h6>
                <div class="d-flex align-items-center text--black">
                    <i class="bi bi-clock-fill text--gray me-2"></i>
                </div>
            </div>
        </div>
    </div>
</section>
</a>
<?php  }?>
</div>
</div>
</div>
</div>
</div>
<div class="col-12 col-md-12 col-lg-5 event-banner">
<div class="row">
<p>Sự kiện nổi bật</p>
<div class="line-sidebar">
    <hr>
</div>
    <a href="https://dulichtravinh.com.vn/tra-vinh-lam-giau-tu-nhung-gia-tri-truyen-thong/" title="TRÀ VINH LÀM GIÀU TỪ NHỮNG GIÁ TRỊ TRUYỀN THỐNG">
        <img src="https://dulichtravinh.com.vn/wp-content/uploads/2021/08/tin-tuc-2.jpg" class="event-banner-img" alt="">
    </a>
<a href="" class="ads-banner-img">
    
</a>
</div>

</div>
</div>
</div>
</section>   -->

<section id="home-popular-location" data-aos="fade-up" class="aos-init aos-animate">
<div class="bg" style="background-image: url('/Content/theme/imgs/home-popular-location-bg.png');">
<div class="bg-overlay" style="background-color: #59BC43;">
<nav>
<div class="nav nav-tabs" id="nav-tab" role="tablist">
<button class="nav-link active" id="nav-place-popular-tab" data-bs-toggle="tab" data-bs-target="#nav-place-popular" type="button" role="tab" aria-controls="nav-place-popular" aria-selected="true">Những địa điểm phổ biến</button>
<button class="nav-link" id="nav-place-new-tab" data-bs-toggle="tab" data-bs-target="#nav-place-new" type="button" role="tab" aria-controls="nav-place-new" aria-selected="false" tabindex="-1">Những điểm đến mới</button>
</div>
</nav>
<div class="tab-content" id="nav-tabContent">
<div class="tab-pane fade show active" id="nav-place-popular" role="tabpanel" aria-labelledby="nav-place-popular-tab">
<div class="container py-4">
<div class="heading-custom-green">
<div class="container">
<h2 style= 'font-family: Helvetica, Arial, Tahoma, sans-serif !important;' class="text--white">NHỮNG ĐỊA ĐIỂM PHỔ BIẾN</h2>
<div class="line bgc--white">
    <hr>
</div>
</div>
</div>
<div class="d-inline-flex p-2">
<?php
    $sql2 = "SELECT * FROM tbldiemden LIMIT 3";
    $conn2 = new mysqli("localhost", "root", "", "db_dulich");
    $result2 = $conn2->query($sql2);
    while($row = $result2->fetch_assoc()){
    ?>
        <div class="card mr-4 ml-4" style="width: 18rem;">
        <img class="card-img-top" src="./hinhanh/<?php echo $row["hinhanh"] ?>" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title"><?php echo $row["tendiemden"] ?></h5>
            <p></p>
            <a href="./user/chitietdiemden.php?madiemden=<?php echo $row["madiemden"] ?>" class="btn btn-primary">Xem ngay</a>
        </div>
        </div>
    <?php  }?>
</div>
</div>
</div>
</section>

<section id="home-popular-news" data-aos="fade-up" class="aos-init aos-animate">
<div class="container mt-5">
<div class="heading-custom-green">
<h2 class="text--green">THÔNG BÁO</h2>
<div class="line">
<hr>
</div>
</div>
<div class="my-3">
<div class="row g-3">
<div class="col-12 col-md-4 col-lg-4">
    <div class="more-news">
        <div class="more-news-box">
            <a href="https://dulichtravinh.com.vn/hoi-thao-doanh-nghiep-cong-nghe-so-ho-tro-thuc-day-phat-trien-du-lich/">
                <section class="more-news-card">
                    <div class="card-contain">
                        <div class="d-flex align-items-center">
                            <img src="https://dulichtravinh.com.vn/wp-content/uploads/2023/11/chds1.jpg" alt="">
                            <div class="card-content-right ms-3">

                                <h6>
                                    HỘI THẢO “DOANH NGHIỆP CÔNG NGHỆ SỐ HỖ TRỢ THÚC ĐẨY PHÁT TRIỂN DU LỊCH”</h6>
                                <div class="d-flex align-items-center text--black">
                                    <i class="bi bi-clock-fill text--gray me-2"></i>
                                    <span class="font-inter">23/11/2023</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </a>
        </div>
    </div>
</div>
<div class="col-12 col-md-4 col-lg-4">
    <div class="more-news">
        <div class="more-news-box">
            <a href="https://dulichtravinh.com.vn/6637-2/">
                <section class="more-news-card">
                    <div class="card-contain">
                        <div class="d-flex align-items-center">
                            <img src="https://dulichtravinh.com.vn/wp-content/uploads/2023/11/km1.jpg" alt="">
                            <div class="card-content-right ms-3">

                                <h6>
                                    KHAI MẠC TUẦN LỄ VĂN HÓA, DU LỊCH – LIÊN HOAN ẨM THỰC NAM BỘ</h6>
                                <div class="d-flex align-items-center text--black">
                                    <i class="bi bi-clock-fill text--gray me-2"></i>
                                    <span class="font-inter">22/11/2023</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </a>
        </div>
    </div>
</div>
<div class="col-12 col-md-4 col-lg-4">
    <div class="more-news">
        <div class="more-news-box">
            <a href="https://dulichtravinh.com.vn/tra-vinh-tham-gia-quang-ba-du-lich-voi-cac-tinh-tay-bac-tai-lao-cai/">
                <section class="more-news-card">
                    <div class="card-contain">
                        <div class="d-flex align-items-center">
                            <img src="https://dulichtravinh.com.vn/wp-content/uploads/2023/09/LC1-2048x1109.jpg" alt="">
                            <div class="card-content-right ms-3">

                                <h6>TRÀ VINH THAM GIA QUẢNG BÁ DU LỊCH VỚI CÁC TỈNH TÂY BẮC TẠI LÀO CAI</h6>
                                <div class="d-flex align-items-center text--black">
                                    <i class="bi bi-clock-fill text--gray me-2"></i>
                                    <span class="font-inter">04/10/2023</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </a>
        </div>
    </div>
</div>

</div>
</div>
</div>
</section>

<!--<section id="home-come-to" class="bgc--green-1 py-5 aos-init aos-animate" style="margin-bottom: 20px; background-color: #FF9933" data-aos="fade-up">
<div class="heading-custom-green">
<div class="container">
<h2 style= 'font-family: Helvetica, Arial, Tahoma, sans-serif !important;' class="text--white">THAM QUAN ĐIỆN TỬ</h2>
<div class="line bgc--white">
<hr>
</div>
</div>
</div>
<div class="container">
<div class="row g-3">
<div class="col-12 col-md-6 col-lg-3">
<a href="https://eva.vn/bep-eva/dac-san-tra-vinh-giao-thoa-cua-3-nen-van-hoa-c162a191481.html">
    <div class="come-to-item-contain">
        <img class="w-100" src="https://cdn.eva.vn//upload/3-2014/images/2014-08-12/1407808282-bun-nuoc-leo.jpg" alt="Tờ gấp ẩm thực 2023" onerror="this.src='/Images/NoImage/Transparency/NoImage400x266.png'">
        <div class="content bgc--white p-4">
            <h5 style="color: #FF9933" class="text-center">Đặc sản Trà Vinh</h5>
        </div>
    </div>
</a>
</div>
<div class="col-12 col-md-6 col-lg-3">
<a href="https://vi.alongwalker.co/ban-do-du-lich-va-hanh-chinh-tinh-tra-vinh-online-nhieu-nguoi-xem-nhat-s235808.html">
    <div class="come-to-item-contain">
        <img class="w-100" src="https://cdn.alongwalk.info/vn/wp-content/uploads/2022/05/07165326/image-ban-do-du-lich-va-hanh-chinh-tinh-tra-vinh-online-nhieu-nguoi-xem-nhat-165189200635117.jpg" alt="Bản đồ du lịch năm 2023" onerror="this.src='/Images/NoImage/Transparency/NoImage400x266.png'">
        <div class="content bgc--white p-4">
            <h5 style="color: #FF9933" class="text-center">Bản đồ du lịch năm 2023</h5>
        </div>
    </div>
</a>
</div>
<div class="col-12 col-md-6 col-lg-3">
<a href="https://dulichthuduc.com.vn/khu-du-lich-sinh-thai-rung-duoc-tra-vinh-.html">
    <div class="come-to-item-contain">
        <img class="w-100" src="https://dulichthuduc.com.vn/vnt_upload/news/MIEN-TAY/ca-mau/rung_duoc_ca_mau_du_lich_thu_duc.jpg" alt="Tờ gấp du lịch sinh thái 2023" onerror="this.src='/Images/NoImage/Transparency/NoImage400x266.png'">
        <div class="content bgc--white p-4">
            <h5 style="color: #FF9933" class="text-center">du lịch sinh thái 2023</h5>
        </div>
    </div>
</a>
</div>
<div class="col-12 col-md-6 col-lg-3">
<a href="https://www.vntrip.vn/cam-nang/dia-diem-du-lich-tra-vinh-79995">
    <div class="come-to-item-contain">
        <img class="w-100" src="https://cdn.vntrip.vn/cam-nang/wp-content/uploads/2018/08/huynh-kha-2.png" alt="Tờ gấp 10 điểm tiêu biểu 2023" onerror="this.src='/Images/NoImage/Transparency/NoImage400x266.png'">
        <div class="content bgc--white p-4">
            <h5 style="color: #FF9933" class="text-center">Giải trí Trà Vinh 2023</h5>
        </div>
    </div>
</a>
</div>

</div>
</div>
</section>-->

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
               0974894750 - 0974894750
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
</div>
</div>
</footer>
</div>
</body>
</html>