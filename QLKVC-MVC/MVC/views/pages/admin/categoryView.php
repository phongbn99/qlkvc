<nav class="side-navbar">
    <!-- Sidebar Header    -->
    <?php
        include_once './MVC/views/inc/admin/sidebarheader.php';
        ?>
    <!-- Sidebar Navigation Menus--><span
        class="text-uppercase text-gray-500 text-sm fw-bold letter-spacing-0 mx-lg-2 heading">Main</span>
    <ul class="list-unstyled">
        <li class="sidebar-item"><a class="sidebar-link" href="dashboard">
                <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
                    <use xlink:href="#real-estate-1"> </use>
                </svg>Home </a></li>
        <li class="sidebar-item"><a class="sidebar-link" href="forms">
                <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
                    <use xlink:href="#survey-1"> </use>
                </svg>Forms </a></li>
        <li class="sidebar-item"><a class="sidebar-link" href="charts">
                <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
                    <use xlink:href="#sales-up-1"> </use>
                </svg>Charts </a></li>
        <li class="sidebar-item"><a class="sidebar-link" href="tables">
                <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
                    <use xlink:href="#portfolio-grid-1"> </use>
                </svg>Tables </a></li>
        <li class="sidebar-item"><a class="sidebar-link" href="#setting" data-bs-toggle="collapse">
                <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
                    <use xlink:href="#browser-window-1"> </use>
                </svg>Cài đặt </a>
            <ul class="collapse list-unstyled " id="setting">
                <li><a class="sidebar-link" href="profile">Trang cá nhân</a></li>
                <li><a class="sidebar-link" href="changepwd">Đổi mật khẩu</a></li>
            </ul>
        </li>
        <li class="sidebar-item  active"><a class="sidebar-link" href="#manage" data-bs-toggle="collapse">
                <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
                    <use xlink:href="#browser-window-1"> </use>
                </svg>Quản lý</a>
            <ul class="collapse list-unstyled " id="manage">
                <li><a class="sidebar-link" href="ticket">Vé</a></li>
                <li><a class="sidebar-link" href="customer">Khách hàng</a></li>
                <li><a class="sidebar-link" href="employee">Nhân viên</a></li>
                <li><a class="sidebar-link" href="category">Danh mục</a></li>
                <li><a class="sidebar-link" href="lsdatve">Lịch sử đặt vé</a></li>
            </ul>
        </li>
        <!-- <li class="sidebar-item"><a class="sidebar-link" href="#!">
                <svg class="svg-icon svg-icon-xs svg-icon-heavy me-xl-2">
                    <use xlink:href="#imac-screen-1"> </use>
                </svg>Demo
                <div class="badge bg-warning">6 New</div>
            </a></li>
    </ul><span class="text-uppercase text-gray-500 text-sm fw-bold letter-spacing-0 mx-lg-2 heading">Second
        menu</span>
    <ul class="list-unstyled py-4">
        <li class="sidebar-item"> <a class="sidebar-link" href="#!">
                <svg class="svg-icon svg-icon-xs svg-icon-heavy me-xl-2">
                    <use xlink:href="#chart-1"> </use>
                </svg>Demo</a></li>
        <li class="sidebar-item"> <a class="sidebar-link" href="">
                <svg class="svg-icon svg-icon-xs svg-icon-heavy me-xl-2">
                    <use xlink:href="#imac-screen-1"> </use>
                </svg>Demo
                <div class="badge bg-info">Special</div>
            </a></li>
        <li class="sidebar-item"> <a class="sidebar-link" href="">
                <svg class="svg-icon svg-icon-xs svg-icon-heavy me-xl-2">
                    <use xlink:href="#quality-1"> </use>
                </svg>Demo</a></li>
        <li class="sidebar-item"> <a class="sidebar-link" href="">
                <svg class="svg-icon svg-icon-xs svg-icon-heavy me-xl-2">
                    <use xlink:href="#security-shield-1"> </use>
                </svg>Demo</a></li>
    </ul> -->
</nav>
<div class="page">
    <!-- navbar-->
    <?php
        include_once './MVC/views/inc/admin/navbar.php';
        ?>
    <!-- Breadcrumb-->
    <div class="bg-gray-200 text-sm">
        <div class="container-fluid">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 py-3">
                    <li class="breadcrumb-item"><a class="fw-light" href="home">Trang chủ</a></li>
                    <li class="breadcrumb-item active fw-light" aria-current="page">Quản lý</li>
                    <li class="breadcrumb-item active fw-light" aria-current="page">Danh mục</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header-->
    <header class="py-4">
        <div class="container-fluid py-2">
            <h1 class="h3 fw-normal mb-0">Danh mục</h1>
        </div>
    </header>
    <section>
        <div class="container">
            <form class="form-horizontal" action="<?php echo WEB_ROOT;?>admin/changepass/changePass" method="POST">

            </form>
        </div>
    </section>
    <?php
        include_once './MVC/views/inc/admin/footer.php';
        ?>
</div>