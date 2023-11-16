<?php
    Session::checkSession(0);
    while($value = mysqli_fetch_array($data['result'])){
        $name = $value['fullname'];
        $email = $value['email'];
        $phone = $value['phone'];
        $dob = $value['dob'];
    }
?>

<nav class="side-navbar">
    <!-- Sidebar Header    -->
    <?php
    include './MVC/views/inc/admin/sidebarheader.php';
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
        <li class="sidebar-item active"><a class="sidebar-link" href="#setting" data-bs-toggle="collapse">
                <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
                    <use xlink:href="#browser-window-1"> </use>
                </svg>Cài đặt </a>
            <ul class="collapse list-unstyled " id="setting">
                <li><a class="sidebar-link" href="profile">Trang cá nhân</a></li>
                <li><a class="sidebar-link" href="changepass">Đổi mật khẩu</a></li>
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
    </ul><span class="text-uppercase text-gray-500 text-sm fw-bold letter-spacing-0 mx-lg-2 heading">Second menu</span>
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
    include './MVC/views/inc/admin/navbar.php';
    ?>
    <!-- Breadcrumb-->
    <div class="bg-gray-200 text-sm">
        <div class="container-fluid">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 py-3">
                    <li class="breadcrumb-item"><a class="fw-light" href="dashboard">Home</a></li>
                    <li class="breadcrumb-item active fw-light" aria-current="page">Setting </li>
                    <li class="breadcrumb-item active fw-light" aria-current="page">Profile </li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header-->
    <header class="py-4">
        <div class="container-fluid py-2">
            <h1 class="h3 fw-normal mb-0">Profile</h1>
        </div>
    </header>
    <section>
        <div class="container rounded bg-white mt-5">
            <div class="row">
                <div class="col-md-4 border-right">
                    <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img
                            class="rounded-circle mt-5"
                            src="<?php echo WEB_ROOT; ?>public/assets/admin/img/avatar-1.jpg" alt="person">
                        <span
                            class="font-weight-bold"><?php echo Session::get('adminName') ?></span><span><?php echo Format::rank(Session::get('level')) ?></span>
                    </div>

                </div>
                <div class="col-md-8">
                    <div class="p-3 py-5">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div class="d-flex flex-row align-items-center back"><i
                                    class="fa fa-long-arrow-left mr-1 mb-1"></i>
                                <a href="index.php">Back to home</a>
                            </div>
                            <h6 class="text-right">Edit Profile</h6>
                        </div>
                        <form action="<?php echo WEB_ROOT;?>admin/profile/changeInfo" method="POST">
                            <div class="row mt-2">
                                <div class="col-md-6"><input type="text" class="form-control" required
                                        placeholder="First name" name="fName"
                                        value="<?php echo Format::catHo($name); ?>">
                                </div>
                                <div class="col-md-6"><input type="text" class="form-control" required
                                        placeholder="Last name" name="lName"
                                        value="<?php echo Format::catTen($name); ?>">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-6"><input type="text" class="form-control" required
                                        placeholder="Email" name="email" value="<?php echo $email; ?>">
                                </div>
                                <div class="col-md-6"><input type="text" class="form-control" placeholder="Phone number"
                                        name="sdt" value="<?php echo $phone; ?>">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-6"><input type="date" class="form-control" name="dob"
                                        value=<?php echo $dob; ?>>
                                </div>

                            </div>
                            <div class="thongbao"><?php
                                if(Session::get("thongbao")){
                                    echo Session::get("thongbao");
                                    Session::set("thongbao","");
                                }
                            ?></div>
                            <div class="mt-5 text-right"><button class="btn btn-primary profile-button"
                                    name="btn_changeInfo" type="submit">Save Profile</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
    include './inc/footer.php';
    ?>
</div>