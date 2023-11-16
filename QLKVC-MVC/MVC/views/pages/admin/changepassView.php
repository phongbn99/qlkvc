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
                </svg>Trang chủ </a></li>
        <li class="sidebar-item"><a class="sidebar-link" href="forms">
                <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
                    <use xlink:href="#survey-1"> </use>
                </svg>Báo cáo </a></li>
        <li class="sidebar-item"><a class="sidebar-link" href="charts">
                <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
                    <use xlink:href="#sales-up-1"> </use>
                </svg>Thống kê </a></li>
        <li class="sidebar-item"><a class="sidebar-link" href="tables">
                <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
                    <use xlink:href="#portfolio-grid-1"> </use>
                </svg>Tables </a></li>
        <li class="sidebar-item active"><a class="sidebar-link" href="#setting" data-bs-toggle="collapse">
                <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
                    <use xlink:href="#browser-window-1"> </use>
                </svg>Cài đặt </a>
            <ul class="collapse list-unstyled " id="setting">
                <li><a class="sidebar-link" href="profile">Trang cá nhân</a></li>
                <li><a class="sidebar-link" href="changepwd">Đổi mật khẩu</a></li>
            </ul>
        </li>
        <li class="sidebar-item"><a class="sidebar-link" href="#manage" data-bs-toggle="collapse">
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
                    <li class="breadcrumb-item"><a class="fw-light" href="index.php">Trang chủ</a></li>
                    <li class="breadcrumb-item active fw-light" aria-current="page">Cài đặt</li>
                    <li class="breadcrumb-item active fw-light" aria-current="page">Đổi mật khẩu</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header-->
    <header class="py-4">
        <div class="container-fluid py-2">
            <h1 class="h3 fw-normal mb-0">Đổi mật khẩu</h1>
        </div>
    </header>
    <section>
        <div class="container">
            <form class="form-horizontal" action="<?php echo WEB_ROOT;?>admin/changepass/changePass" method="POST">
                <div class="form-group">
                    <label class="control-label col-sm-2" for="currentpassword">Current password:</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="currentpassword"
                            placeholder="Enter Current password" required name="currentpass" value="<?php
                            if(Session::get("oldpass")){
                                echo Session::get("oldpass");
                                Session::set("oldpass","");
                            }
                            ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="pwd">New password:</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" required id="pwd" placeholder="Enter new password"
                            name="pwd" value="<?php
                            if(Session::get("new_pass")){
                                echo Session::get("new_pass");
                                Session::set("new_pass","");
                            }
                            ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="new_pwd">Confirm new password:</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" required id="new_pwd"
                            placeholder="Enter new password" name="new_pwd" value="<?php
                            if(Session::get("confirm_new_pass")){
                                echo Session::get("confirm_new_pass");
                                Session::set("confirm_new_pass","");
                            }
                            ?>">
                    </div>
                </div>

                <div class="thongbao"><?php
                if(Session::get("thongbao")){
                    echo Session::get("thongbao");
                    Session::set("thongbao",'');
                }
                ?></div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <div class="mt-5 text-right"><button class="btn btn-primary profile-button" type="submit"
                                name="change-pass">Save password</button></div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <?php
        include_once './MVC/views/inc/admin/footer.php';
        ?>
</div>