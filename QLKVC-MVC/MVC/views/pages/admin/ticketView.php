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
        <li class="sidebar-item"><a class="sidebar-link" href="index">
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
                <li><a class="sidebar-link" href="lsdatve">Lịch sử đặt vé</a></li>
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
                    <li class="breadcrumb-item active fw-light" aria-current="page">Vé </li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header-->
    <header class="py-4">
        <div class="container-fluid py-2">
            <h1 class="h3 fw-normal mb-0">Quản lý vé</h1>
        </div>
    </header>
    <section>
        <div style="width: 90% ; margin: 0 auto;">
            <!-- table-striped -->

            <div style="margin-bottom: 10px;"><button class="btn-add btn-radius btn-hover" id="btn-add"
                    onclick="showDialogAdd()"><i class="bi bi-plus-circle" style="margin: 5px ;"></i>Thêm</button>

            </div>
            <table class="table table-hover table-bordered " id="ticket-tbl">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Mã khu</th>
                        <th scope="col">Tên khu</th>
                        <th scope="col">Vị trí</th>
                        <th scope="col">Giờ mở</th>
                        <th scope="col">Giờ đóng</th>
                        <th scope="col">Giá vé người lớn</th>
                        <th scope="col">Giá vé trẻ em</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody id="tbl-ticket">
                    <?php   
                            $i = 1;
                            while ($value = mysqli_fetch_assoc($data['result'])) {
                        ?>
                    <tr class="row-hover">
                        <td scope="row"><?php echo $i; ?></td>
                        <td><?php echo $value['makhu']; ?></td>
                        <td><?php echo $value['tenkhu']; ?></td>
                        <td><?php echo $value['vitri']; ?></td>
                        <td><?php echo $value['giomo']; ?></td>
                        <td><?php echo $value['giodong']; ?></td>
                        <td><?php echo $value['gialon']; ?></td>
                        <td><?php echo $value['gianho']; ?></td>

                        <td><button type="submit" class="editRow btn-hover btn-edit btn-radius"
                                onclick="postDataVe('<?php echo $value['makhu'] ?>', '<?php echo $value['tenkhu'] ?>','<?php echo $value['vitri'] ?>', '<?php echo $value['giomo'] ?>','<?php echo $value['giodong'] ?>', '<?php echo $value['gialon'] ?>','<?php echo $value['gianho'] ?>')">
                                <i class=" bi bi-pencil-square"></i>
                                Edit</button>
                            <button type="submit" class="deleteRow btn-hover btn-delete btn-radius"
                                onclick="dataDelete(' <?php echo $value['makhu'] ?>')"><i class="bi bi-trash"></i>
                                Delete</button>
                        </td>
                    </tr>
                    <?php
                            $i++;
                        }
                    ?>
                </tbody>
                <tfoot>

                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Mã khu</th>
                        <th scope="col">Tên khu</th>
                        <th scope="col">Vị trí</th>
                        <th scope="col">Giờ mở</th>
                        <th scope="col">Giờ đóng</th>
                        <th scope="col">Giá vé người lớn</th>
                        <th scope="col">Giá vé trẻ em</th>
                        <th scope="col"></th>
                    </tr>
                </tfoot>
            </table>

        </div>
        <dialog class="dialog-border addInfo" style="width: 50vw;">
            <div style="text-align: right;">
                <button type="button" class="btn-close close-dialog" aria-label="Close"></button>
            </div>
            <form action="<?php echo WEB_ROOT ?>admin/ticket/themVe" method="POST">

                <div class="row">
                    <h3 style="text-align: center;">Thêm khu vui chơi</h3>
                </div>
                <div class="thongbao"><?php if(!empty(Session::get("thongbao3"))){ ?>
                    <script>
                    window.onload = function() {
                        showDialogAdd();
                    }
                    </script>
                    <?php
                    echo Session::get("thongbao3");
                    Session::set("thongbao3",'');
                    } ?>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="add-makhu">Mã khu</label>
                        <input type="text" class="form-control" placeholder="Nhập mã khu" required="" name="add-makhu"
                            value="<?php if(!empty(Session::get("makhuAdd"))){
                                echo Session::get("makhuAdd");
                                Session::set("makhuAdd",'');
                            } ?>">
                    </div>
                    <div class="col">
                        <label for="add-tenkhu">Tên khu</label>
                        <input type="text" class="form-control" placeholder="Nhập tên khu" required="" name="add-tenkhu"
                            value="<?php if(!empty(Session::get("tenkhuAdd"))){
                                echo Session::get("tenkhuAdd");
                                Session::set("tenkhuAdd",'');
                            } ?>">
                    </div>

                </div>

                <div class="row">
                    <div class="col">
                        <label for="add-vitri">Vị trí</label>
                        <input type="text" class="form-control" placeholder="Nhập vị trí" name="add-vitri" required=""
                            value="<?php if(!empty(Session::get("vitriAdd"))){
                                echo Session::get("vitriAdd");
                                Session::set("vitriAdd",'');
                            } ?>">
                    </div>
                    <div class="col">
                        <label for="add-giomo">Giờ mở</label>
                        <input type="time" class="form-control" name="add-giomo" required="" value="<?php if(!empty(Session::get("giomoAdd"))){
                                echo Session::get("giomoAdd");
                                Session::set("giomoAdd",'');
                            } ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="add-giodong">Giờ đóng</label>
                        <input type="time" class="form-control" name="add-giodong" value="<?php if(!empty(Session::get("giodongAdd"))){
                                echo Session::get("giodongAdd");
                                Session::set("giodongAdd",'');
                            } ?>">
                    </div>
                    <div class="col">
                        <label for="add-venl">Vé người lớn</label>
                        <input type="number" class="form-control" name="add-venl" value="<?php if(!empty(Session::get("venlAdd"))){
                                echo Session::get("venlAdd");
                                Session::set("venlAdd",'');
                            } ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="add-vete">Vé trẻ em</label>
                        <input type="number" class="form-control" name="add-vete" value="<?php if(!empty(Session::get("veteAdd"))){
                                echo Session::get("veteAdd");
                                Session::set("veteAdd",'');
                            } ?>">
                    </div>
                    <div class="col">

                    </div>
                </div>

                <div style="text-align: right;">
                    <button type="submit" class="btn btn-primary btn-radius mt-3" name="save-add-ticket">Add</button>
                    <button type="button" class="btn btn-cancel btn-radius mt-3 close-dialog" id="cancel-addticket"
                        name="cancel-add-ticket">Cancel</button>
                </div>
            </form>
        </dialog>
        <!-- delete-->
        <dialog class="dialog-border confirm-del" style="width: 430px;">
            <form action="<?php echo WEB_ROOT ?>admin/ticket/xoaVe" method="POST">
                <p>Bạn có chắc chắn muốn xóa mã khu <span class="del-id" style="color: green;"></span> không
                    ?
                </p>
                <input type="text" name="delete-ticket" class="del-id" style="display: none;">
                <div style="text-align: right;">
                    <input type="submit" value="Có" class="btn-add btn-hover btn-radius"
                        name="btn-confirm-delete-ticket">
                    <input type="button" value="Không" class="close-dialog btn-radius btn-cancel">
                </div>
            </form>
        </dialog>
        <!-- edit -->
        <dialog style="width: 50vw;" class="dialog-border edit">

            <div style="text-align: right;">
                <button type="button" class="btn-close close-dialog" aria-label="Close"></button>
            </div>
            <form action="<?php echo WEB_ROOT ?>admin/ticket/suaVe" method="POST">

                <div class="row">
                    <h3 style="text-align: center;">Cập nhật thông tin khu</h3>
                </div>
                <div class="thongbao"><?php if(!empty(Session::get("thongbao4"))){ ?>
                    <script>
                    window.onload = function() {
                        document.querySelector(".edit").showModal();
                    }
                    </script>
                    <?php
                        echo Session::get("thongbao4");
                        Session::set("thongbao4",'');
                        } ?>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="edit-makhu">Mã khu</label>
                        <input type="text" class="form-control" placeholder="Nhập mã khu" readonly name="edit-makhu"
                            value="<?php if(!empty(Session::get("makhuEdit"))){
                                echo Session::get("makhuEdit");
                                Session::set("makhuEdit",'');
                            } ?>">
                    </div>
                    <div class="col">
                        <label for="edit-tenkhu">Tên khu</label>
                        <input type="text" class="form-control" placeholder="Nhập tên khu" required=""
                            name="edit-tenkhu" value="<?php if(!empty(Session::get("tenkhuEdit"))){
                                echo Session::get("tenkhuEdit");
                                Session::set("tenkhuEdit",'');
                            } ?>">
                    </div>

                </div>

                <div class="row">
                    <div class="col">
                        <label for="edit-vitri">Vị trí</label>
                        <input type="text" class="form-control" placeholder="Nhập vị trí" name="edit-vitri" required=""
                            value="<?php if(!empty(Session::get("vitriEdit"))){
                                echo Session::get("vitriEdit");
                                Session::set("vitriEdit",'');
                            } ?>">
                    </div>
                    <div class="col">
                        <label for="edit-giomo">Giờ mở</label>
                        <input type="time" class="form-control" name="edit-giomo" required="" value="<?php if(!empty(Session::get("giomoEdit"))){
                                echo Session::get("giomoEdit");
                                Session::set("giomoEdit",'');
                            } ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="edit-giodong">Giờ đóng</label>
                        <input type="time" class="form-control" name="edit-giodong" value="<?php if(!empty(Session::get("giodongEdit"))){
                                echo Session::get("giodongEdit");
                                Session::set("giodongEdit",'');
                            } ?>">
                    </div>
                    <div class="col">
                        <label for="edit-venl">Vé người lớn</label>
                        <input type="number" class="form-control" name="edit-venl" value="<?php if(!empty(Session::get("venlEdit"))){
                                echo Session::get("venlEdit");
                                Session::set("venlEdit",'');
                            } ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="edit-vete">Vé trẻ em</label>
                        <input type="number" class="form-control" name="edit-vete" value="<?php if(!empty(Session::get("veteEdit"))){
                                echo Session::get("veteEdit");
                                Session::set("veteEdit",'');
                            } ?>">
                    </div>
                    <div class="col">

                    </div>
                </div>

                <div style="text-align: right;">
                    <button type="submit" class="btn btn-primary btn-radius mt-3" name="save-edit-eployee">Lưu</button>
                    <button type="button" class="btn btn-cancel btn-radius mt-3 close-dialog" id="cancel-addeployee"
                        name="cancel-add-eployee">Hủy</button>
                </div>
            </form>
        </dialog>
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


<script>
$(document).ready(function() {
    $('#ticket-tbl').DataTable({
        "scrollX": true
    });

});
</script>