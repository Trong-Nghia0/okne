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
    
    // Truy vấn dữ liệu từ bảng tbldiemden
    $sql = "SELECT * FROM tblbaiviet LIMIT 3";
    $result = $conn->query($sql);
    
    // Đóng kết nối
    $conn->close();
?>
<style>
        h2 {
            font-family: arial !important;
        }
        .product-list {
            display: flex;
            flex-wrap: wrap;
            padding: 20px;
        }

        .product {
            flex: 0 0 calc(25% - 20px); /* Chia thành 4 cột, 20px là margin giữa các sản phẩm */
            box-sizing: border-box;
            padding: 15px;
            margin-bottom: 20px;
            text-align: center;
        }
    </style>
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
        <div class="lang px-md-3">
            <div class="d-flex">

                
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
   <!-- <li class="nav-item">                
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
        
    </li>       
    <li class="nav-item">
    <a class="nav-link " href="#">LỊCH TRÌNH</a>
    </li>      -->                
    <form class="d-flex" role="search">
        <button class="btn text--white btn-green" id="login_system" type="button">Đăng nhập</button>
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
        <img class="d-block w-100" src="https://www.google.com.vn/url?sa=i&url=https%3A%2F%2Fvi.wikipedia.org%2Fwiki%2FTr%25C3%25A0_Vinh_%2528th%25C3%25A0nh_ph%25E1%25BB%2591%2529&psig=AOvVaw22Qi83DgOtPTah6lImzdK9&ust=1705646275298000&source=images&cd=vfe&opi=89978449&ved=0CBIQjRxqFwoTCPiKr9ap5oMDFQAAAAAdAAAAABAD" alt="Second slide">
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

<section id="home-popular-location" data-aos="fade-up" class="aos-init aos-animate mt-5">
    <div class="bg" style="background-image: url('/Content/theme/imgs/home-popular-location-bg.png');">
        <div class="bg-overlay" style="background-color: #59BC43;">
        <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <!-- Lập qua bảng loại hình để render tất cả loại hình đã có -->
                    <?php 
                        $sql1 = "SELECT * FROM tblloaihinh";
                        $conn1 = new mysqli("localhost", "root", "", "db_dulich");
                        $result1 = $conn1->query($sql1);
                        $maloaihinh = ""; // mặc định bằng rỗng
                        if (isset($_GET['maloaihinh'])) { // nếu có maloaihinh xuất hiện trên đường dẫn thì lấy gán vào biến $maloaihinh
                            $maloaihinh = $_GET['maloaihinh'];

                        } 
                        while($row1 = $result1->fetch_assoc()){
                    ?>
                    <a class="nav-link text-white active" id="nav-place-popular-tab" type="submit" href ="http://localhost/web_gioi_thieu_du_lich/user/diemden.php?maloaihinh=<?php echo $row1['maloaihinh']?>"><?php echo $row1['tenloaihinh']?></a>
                    <?php }?>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-place-popular" role="tabpanel" aria-labelledby="nav-place-popular-tab">
            <div class="container py-4">
            <div class="heading-custom-green">
              <div class="container">
                  <h2 style= 'font-family: Helvetica, Arial, Tahoma, sans-serif !important;' class="text--white">ĐIỂM DU LỊCH</h2>
                  <div class="line bgc--white">
                      <hr>
                  </div>
              </div>
            </div>
            <div class="row">
                <div class="product-list">
                    <?php
        $sql2 = "SELECT * FROM tbldiemden";
        $conn2 = new mysqli("localhost", "root", "", "db_dulich");
        $result2 = $conn2->query($sql2);
        //nếu maloaihinh bằng rỗng thì render ra tất cả điểm du lich, ngược lại thì render theo maloaihinh
        if($maloaihinh == "") { 
            while($row = $result2->fetch_assoc()) {
        ?>
        <div class="product d-inline-flex p-2 col-md-3">
            <div class="card mr-4 ml-4" style="width: 18rem;">
            <img class="card-img-top" src="../hinhanh/<?php echo $row["hinhanh"] ?>" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title"><?php echo $row["tendiemden"] ?></h5>
                <p>
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
                </p>
                <a href="./chitietdiemden.php?madiemden=<?php echo $row["madiemden"] ?>" class="btn btn-primary">Xem ngay</a>
            </div>
            </div>
        </div>
        <?php }} else { 

        while($row = $result2->fetch_assoc()){
            //kiểm tra mã loại hình nếu điểm đến có maloaihinh  bằng maloaihinh lấy được khi ấn vào nút tên loại hình
            if($maloaihinh == $row['maloaihinh']) {
            ?>
        <div class="product d-inline-flex p-2 col-md-3">
            <div class="card mr-4 ml-4" style="width: 18rem;">
            <img class="card-img-top" src="../hinhanh/<?php echo $row["hinhanh"] ?>" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title"><?php echo $row["tendiemden"] ?></h5>
                <p>
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
                </p>
                <a href="./chitietdiemden.php?madiemden=<?php echo $row["madiemden"] ?>" class="btn btn-primary">Xem ngay</a>
</div>
            </div>
        </div>
        <?php  }}}?>
    </div>
</div>
</div>
    </div>
</section>

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
</footer>
  </div>
</body>
</html>