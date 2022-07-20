<!DOCTYPE html>
<html lang="en">

<head>
  <title>Danh sách nhân viên | Quản trị Admin</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Main CSS-->
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
  <!-- or -->
  <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
  <!-- Font-icon css-->
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">

</head>

<body onload="time()" class="app sidebar-mini rtl">
  <!-- Navbar-->
  <header class="app-header">
    <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
    <!-- Navbar Right Menu-->
    <ul class="app-nav">


      <!-- User Menu-->
      <li><a class="app-nav__item" href="/index.html"><i class='bx bx-log-out bx-rotate-180'></i> </a>

      </li>
    </ul>
  </header>
  <!-- Sidebar menu-->
  <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
  <aside class="app-sidebar">
    <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="/images/gai.jpg" width="50px" alt="User Image">
      <div>
        <p class="app-sidebar__user-name"><b>Admin</b></p>
        <p class="app-sidebar__user-designation">Chào mừng bạn trở lại</p>
      </div>
    </div>
    <hr>
    <ul class="app-menu">
      <!-- <li><a class="app-menu__item haha" href="phan-mem-ban-hang.html"><i class='app-menu__icon bx bx-cart-alt'></i>
         <span class="app-menu__label">POS Bán Hàng</span></a></li> -->
      <li><a class="app-menu__item active" href="index.php"><i class='app-menu__icon bx bx-tachometer'></i><span class="app-menu__label">Bảng điều khiển</span></a></li>
      <li><a class="app-menu__item " href="index.php?page_layout=quanlyNV"><i class='app-menu__icon bx bx-id-card'></i> <span class="app-menu__label">Quản lý nhân viên</span></a></li>
      <li><a class="app-menu__item" href="index.php?page_layout=quanlyKH"><i class='app-menu__icon bx bx-user-voice'></i><span class="app-menu__label">Quản lý khách hàng</span></a></li>
      <li><a class="app-menu__item" href="index.php?page_layout=quanlySP"><i class='app-menu__icon bx bx-purchase-tag-alt'></i><span class="app-menu__label">Quản lý sản phẩm</span></a>
      </li>
      <li><a class="app-menu__item" href="index.php?page_layout=quanlyHD"><i class='app-menu__icon bx bx-task'></i><span class="app-menu__label">Quản lý đơn hàng</span></a></li>
      <!--<li><a class="app-menu__item" href="table-data-banned.html"><i class='app-menu__icon bx bx-run'></i><span
          class="app-menu__label">Quản lý nội bộ -->
      </span></a></li>
      <li><a class="app-menu__item" href="index.php?page_layout=quanlyLuong"><i class='app-menu__icon bx bx-dollar'></i><span class="app-menu__label">Bảng kê lương</span></a></li>
      <li><a class="app-menu__item" href="index.php?page_layout=BaoCaoDoanhThu"><i class='app-menu__icon bx bx-pie-chart-alt-2'></i><span class="app-menu__label">Báo cáo doanh thu</span></a>
      </li>
      <li><a class="app-menu__item" href="index.php?page_layout=LichCongTac"><i class='app-menu__icon bx bx-calendar-check'></i><span class="app-menu__label">Lịch công tác </span></a></li>
      <!--<li><a class="app-menu__item" href="#"><i class='app-menu__icon bx bx-cog'></i><span class="app-menu__label">Đăng xuất</span></a></li>-->
    </ul>
  </aside>
  <main class="app-content">
    <?php
    //master pages
    if (isset($_GET["page_layout"])) {
      switch ($_GET["page_layout"]) {
        case 'quanlyNV':
          include_once './table-data-table.php';
          break;
        case 'quanlyKH':
          include_once './table-data-custumer.php';
          break;
        case 'quanlySP':
          include_once './table-data-product.php';
          break;
        case 'quanlyHD':
          include_once './table-data-oder.php';
          break;
        case 'quanlyLuong':
          include_once './table-data-money.php';
          break;
        case 'BaoCaoDoanhThu':
          include_once './quan-ly-bao-cao.php';
          break;
        case 'LichCongTac':
          include_once './page-calendar.php';
          break;
        case 'ThemNV':
          include_once './form-add-nhan-vien.php';
          break;
        case 'ThemSP':
          include_once './form-add-san-pham.php';
          break;
        case 'ThemDonHang':
          include_once './form-add-don-hang.php';
          break;
        case 'ThemTienLuong':
          include_once './form-add-tien-luong.php';
          break;
        default:
          include_once './gioithieu.php';
      }
    } else {
      include_once './gioithieu.php';
    }
    ?>
  </main>
  <script src="js/jquery-3.2.1.min.js"></script>
  <!--===============================================================================================-->
  <script src="js/popper.min.js"></script>
  <script src="https://unpkg.com/boxicons@latest/dist/boxicons.js"></script>
  <!--===============================================================================================-->
  <script src="js/bootstrap.min.js"></script>
  <!--===============================================================================================-->
  <script src="js/main.js"></script>
  <!--===============================================================================================-->
  <script src="js/plugins/pace.min.js"></script>
  <!--===============================================================================================-->
  <script type="text/javascript" src="js/plugins/chart.js"></script>
  <!--===============================================================================================-->
  <script type="text/javascript">
    var data = {
      labels: ["Tháng 1", "Tháng 2", "Tháng 3", "Tháng 4", "Tháng 5", "Tháng 6"],
      datasets: [{
          label: "Dữ liệu đầu tiên",
          fillColor: "rgba(255, 213, 59, 0.767), 212, 59)",
          strokeColor: "rgb(255, 212, 59)",
          pointColor: "rgb(255, 212, 59)",
          pointStrokeColor: "rgb(255, 212, 59)",
          pointHighlightFill: "rgb(255, 212, 59)",
          pointHighlightStroke: "rgb(255, 212, 59)",
          data: [60, 59, 10, 51, 56, 35]
        },
        {
          label: "Dữ liệu kế tiếp",
          fillColor: "rgba(9, 109, 239, 0.651)  ",
          pointColor: "rgb(9, 109, 239)",
          strokeColor: "rgb(9, 109, 239)",
          pointStrokeColor: "rgb(9, 109, 239)",
          pointHighlightFill: "rgb(9, 109, 239)",
          pointHighlightStroke: "rgb(9, 109, 239)",
          data: [48, 22, 49, 39, 96, 100]
        }
      ]
    };
    var ctxl = $("#lineChartDemo").get(0).getContext("2d");
    var lineChart = new Chart(ctxl).Line(data);

    var ctxb = $("#barChartDemo").get(0).getContext("2d");
    var barChart = new Chart(ctxb).Bar(data);
  </script>
  <script type="text/javascript">
    //Thời Gian
    function time() {
      var today = new Date();
      var weekday = new Array(7);
      weekday[0] = "Chủ Nhật";
      weekday[1] = "Thứ Hai";
      weekday[2] = "Thứ Ba";
      weekday[3] = "Thứ Tư";
      weekday[4] = "Thứ Năm";
      weekday[5] = "Thứ Sáu";
      weekday[6] = "Thứ Bảy";
      var day = weekday[today.getDay()];
      var dd = today.getDate();
      var mm = today.getMonth() + 1;
      var yyyy = today.getFullYear();
      var h = today.getHours();
      var m = today.getMinutes();
      var s = today.getSeconds();
      m = checkTime(m);
      s = checkTime(s);
      nowTime = h + " giờ " + m + " phút " + s + " giây";
      if (dd < 10) {
        dd = '0' + dd
      }
      if (mm < 10) {
        mm = '0' + mm
      }
      today = day + ', ' + dd + '/' + mm + '/' + yyyy;
      tmp = '<span class="date"> ' + today + ' - ' + nowTime +
        '</span>';
      document.getElementById("clock").innerHTML = tmp;
      clocktime = setTimeout("time()", "1000", "Javascript");

      function checkTime(i) {
        if (i < 10) {
          i = "0" + i;
        }
        return i;
      }
    }
  </script>
</body>

</html>