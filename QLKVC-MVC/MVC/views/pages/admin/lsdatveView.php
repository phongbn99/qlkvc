<?php
    Session::checkSession(0);

?>

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
        <li class="sidebar-item "><a class="sidebar-link" href="#setting" data-bs-toggle="collapse">
                <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
                    <use xlink:href="#browser-window-1"> </use>
                </svg>Cài đặt </a>
            <ul class="collapse list-unstyled " id="setting">
                <li><a class="sidebar-link" href="profile">Trang cá nhân</a></li>
                <li><a class="sidebar-link" href="changepwd">Đổi mật khẩu</a></li>
            </ul>
        </li>
        <li class="sidebar-item active"><a class="sidebar-link" href="#manage" data-bs-toggle="collapse">
                <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
                    <use xlink:href="#browser-window-1"> </use>
                </svg>Quản lý</a>
            <ul class="collapse list-unstyled " id="manage">
                <li><a class="sidebar-link " href="ticket">Vé</a></li>
                <li><a class="sidebar-link " href="customer">Khách hàng</a></li>
                <li><a class="sidebar-link" href="employee">Nhân viên</a></li>
                <li><a class="sidebar-link" href="category">Danh mục</a></li>
                <li><a class="sidebar-link" href="lsdatve">Lịch sử đặt vé </a></li>
            </ul>
        </li>

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
                    <li class="breadcrumb-item active fw-light" aria-current="page">Quản lý </li>
                    <li class="breadcrumb-item active fw-light" aria-current="page">Lịch sử đặt vé </li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header-->
    <header class="py-4">
        <div class="container-fluid py-2">
            <h1 class="h3 fw-normal mb-0">Lịch sử đặt vé</h1>
        </div>
    </header>
    <section>
        <div style="width: 90% ; margin: 0 auto;">
            <!-- table-striped -->

        </div>
        <table class="table table-hover table-bordered " id="ticket-tbl">
            <thead class="thead-light">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tên khách hàng</th>
                    <th scope="col">Khu vui chơi</th>
                    <th scope="col">Giờ mở cửa</th>
                    <th scope="col">Giờ đóng cửa</th>
                    <th scope="col">Trẻ em</th>
                    <th scope="col">Giá vé trẻ em</th>
                    <th scope="col">Thành tiền vé trẻ em</th>
                    <th scope="col">Người lớn</th>
                    <th scope="col">Dịch vụ</th>
                    <th scope="col">Giá dịch vụ</th>
                    <th scope="col">Trò chơi</th>
                    <th scope="col">Giá trò chơi</th>
                    <th scope="col">Tổng tiền</th>
                    <th scope="col">Trạng thái</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php   
                $i = 1;
                while ($value = mysqli_fetch_assoc($data['result'])) {
                    if($i % 2 == 0){
                        echo '<tr style="background: #dcdde1;">';
                    }else{
                        echo '<tr >';
                    }
                    echo 
                    '<td> '.$i.'</td>
                    <td>'.$value['fullname'].'</td>
                    <td>'.$value['tenkhu'].'</td>
                    <td>'.$value['giomo'].'</td>
                    <td>'.$value['giodong'].'</td>
                    <td>'.$value['treem'].'</td>
                    <td>'.$value['gianho'].'</td>
                    <td>'.$value['treem']*$value['gianho'].'</td>
                    <td>'.$value['nguoilon'].'</td>
                    <td>'.$value['tendv'].'</td>
                    <td>'.$value['giadv'].'</td>
                    <td>'.$value['tentrochoi'].'</td>
                    <td>'.$value['banggia'].'</td>
                     <td>'.$value['thanhtien'].'</td>';

                    if($value['trangthai'] == "Thành công"){
                        echo '<td style="color: #4cd137;">'.$value['trangthai'].'</td>';
                    }else{
                        echo '<td style="color: #e84118;">'.$value['trangthai'].'</td>';
                    }
                    ?>
                <td><button type="submit" class="btnDuyet btn-hover btn-edit btn-radius"
                        onclick="dataDelete('<?php echo $value['mave'] ?>')"><i class="bi bi-pencil-square"></i>
                        Duyệt </button>

                    <button type="submit" <?php  if($value['trangthai'] == "Thành công"){
                        echo 'disabled';
                    } ?> class="deleteRow btn-hover btn-delete btn-radius"
                        onclick="dataDelete('<?php echo $value['mave'] ?>')"><i class="bi bi-trash"></i>
                        Hủy</button>
                </td>
                <?php
                    echo '</tr>';
                    $i++;
                    
                }
            ?>
            </tbody>

        </table>

        <dialog class="dialog-border confirm-duyet" style="width: 430px;">
            <form action="<?php echo WEB_ROOT ?>admin/lsdatve/updateLs" method="POST">
                <p>Bạn có chắc chắn muốn duyệt vé <span class="del-id" style="color: green;"></span> không
                    ?
                </p>
                <input type="text" name="delete-ve" class="del-id" style="display: none;">
                <div style="text-align: right;">
                    <input type="submit" value="Có" class="btn-add btn-hover btn-radius" name="btn-confirm-duyet-ve">
                    <input type="button" value="Không" class="close-dialog-duyet btn-radius btn-cancel">
                </div>
            </form>
        </dialog>

        <dialog class="dialog-border confirm-del" style="width: 430px;">
            <form action="<?php echo WEB_ROOT ?>admin/lsdatve/updateLs" method="POST">
                <p>Bạn có chắc chắn muốn hủy vé <span class="del-id" style="color: green;"></span> không
                    ?
                </p>
                <input type="text" name="delete-ve" class="del-id" style="display: none;">
                <div style="text-align: right;">
                    <input type="submit" value="Có" class="btn-add btn-hover btn-radius" name="btn-confirm-delete-ve">
                    <input type="button" value="Không" class="close-dialog btn-radius btn-cancel">
                </div>
            </form>
        </dialog>

</div>

</section>
<?php
        include_once './MVC/views/inc/admin/footer.php';
        ?>
<?php if(!empty(Session::get("thongbao"))){ ?>
<script>
window.onload = function() {
    alert(" <?php echo Session::get("thongbao") ?>");
}
</script>
<?php
    Session::set("thongbao","");
    } ?>

</div>