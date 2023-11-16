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
                <li><a class="sidebar-link" href="ticket">Vé</a></li>
                <li><a class="sidebar-link " href="customer">Khách hàng</a></li>
                <li><a class="sidebar-link" href="employee">Nhân viên</a></li>
                <li><a class="sidebar-link" href="category">Danh mục</a></li>
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
        include_once './MVC/views/inc/admin/navbar.php';
        ?>
    <!-- Breadcrumb-->
    <div class="bg-gray-200 text-sm">
        <div class="container-fluid">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 py-3">
                    <li class="breadcrumb-item"><a class="fw-light" href="index.php">Trang chủ</a></li>
                    <li class="breadcrumb-item active fw-light" aria-current="page">Quản lý </li>
                    <li class="breadcrumb-item active fw-light" aria-current="page">Nhân viên </li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header-->
    <header class="py-4">
        <div class="container-fluid py-2">
            <h1 class="h3 fw-normal mb-0">Quản lý nhân viên</h1>
        </div>
    </header>
    <section>
        <div style="width: 90% ; margin: 0 auto;">
            <!-- table-striped -->

            <div style="margin-bottom: 10px;"><button class="btn-add btn-radius btn-hover" id="btn-add"
                    onclick="showDialogAdd()"><i class="bi bi-plus-circle" style="margin: 5px ;"></i>Thêm</button>
                <button class="btn-add btn-radius btn-hover" id="btn-Export"
                    onclick="location.href= '<?php WEB_ROOT ?>export'"><i class="bi bi-save-fill"
                        style="margin: 5px ; transform: rotate(-90deg);"></i>Xuất</button>
            </div>
            <table class="table table-hover table-bordered " id="employee-tbl">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">MNV</th>
                        <th scope="col">Họ tên</th>
                        <th scope="col">Email</th>
                        <th scope="col">Số điện thoại</th>
                        <th scope="col">Ngày sinh</th>
                        <th scope="col">Địa chỉ</th>
                        <th scope="col">Chức vụ</th>
                        <th scope="col">Lương</th>
                        <th scope="col">Khu làm việc</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody id="tbl-eployee">
                    <?php   
                            $i = 1;
                            while ($value = mysqli_fetch_assoc($data['result'])) {
                        ?>
                    <tr class="row-hover">
                        <td scope="row"><?php echo $i; ?></td>
                        <td><?php echo $value['id']; ?></td>
                        <td><?php echo $value['fullname']; ?></td> 
                        <td><?php echo $value['email']; ?></td>
                        <td><?php echo $value['phonenumber']; ?></td>
                        <td><?php echo $value['dob']; ?></td>
                        <td><?php echo $value['address']; ?></td>
                        <td><?php echo $value['chucvu']; ?></td>
                        <td><?php echo $value['luong']; ?></td>
                        <td><?php echo $value['tenkhu']; ?></td>
                        <td><button type="submit" class="editRow btn-hover btn-edit btn-radius"
                                onclick="postDataNv('<?php echo $value['id'] ?>', '<?php echo $value['username'] ?>','<?php echo $value['fullname'] ?>', '<?php echo $value['email'] ?>','<?php echo $value['phonenumber'] ?>', '<?php echo $value['dob'] ?>','<?php echo $value['address'] ?>', '<?php echo $value['chucvu'] ?>','<?php echo $value['luong']; ?>','<?php echo $value['makhu'] ?>')"><i
                                    class=" bi
                                bi-pencil-square"></i>
                                Sửa</button>
                            <button type="submit" class="deleteRow btn-hover btn-delete btn-radius"
                                onclick="dataDelete('<?php echo $value['id'] ?>')"><i class="bi bi-trash"></i>
                                Xóa</button>
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
                        <th scope="col">Id</th>
                        <th scope="col">Nickname</th>
                        <th scope="col">Họ tên</th>
                        <th scope="col">Email</th>
                        <th scope="col">Số điện thoại</th>
                        <th scope="col">Sinh nhật</th>
                        <th scope="col">Địa chỉ</th>
                        <th scope="col">Chức vụ</th>
                        <th scope="col"></th>
                    </tr>
                </tfoot>
            </table>

        </div>
        <!-- edit employee -->
        <dialog style="width: 50vw;" class="dialog-border edit">

            <div style="text-align: right;">
                <button type="button" class="btn-close close-dialog" aria-label="Close"></button>
            </div>
            <form action="<?php echo WEB_ROOT ?>admin/employee/suaNV" method="POST">

                <div class="row">
                    <h3 style="text-align: center;">Cập nhật thông tin nhân viên</h3>
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
                        <label for="edit-employee">Mã nhân viên</label>
                        <input type="text" class="form-control" readonly id="edit-employee" name="edit-employee">
                    </div>
                    <div class="col">
                        <label for="edit-username">Tài khoản</label>
                        <input type="text" class="form-control" placeholder="Enter username" id="edit-user"
                            name="edit-user" readonly>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <label for="edit-name">Tên nhân viên</label>
                        <input type="text" class="form-control" placeholder="Enter fullname" id="edit-name"
                            name="edit-name">
                    </div>
                    <div class="col">
                        <label for="edit-email">Email</label>
                        <input type="text" class="form-control" placeholder="Enter email" id="edit-email"
                            name="edit-email" readonly>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="edit-phone">Số điện thoại</label>
                        <input type="number" class="form-control" placeholder="Enter phone number" id="edit-phone"
                            name="edit-phone">
                    </div>
                    <div class="col">
                        <label for="edit-dob">Ngày sinh</label>
                        <input type="date" class="form-control" id="edit-dob" name="edit-dob">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="edit-add">Địa chỉ</label>
                        <input type="text" class="form-control" placeholder="Enter address" id="edit-add"
                            name="edit-add">
                    </div>
                    <div class="col">
                        <label for="edit-chucvu">Chức vụ</label>
                        <select name="edit-chucvu" class="form-control" id="edit-cv">
                            <?php
                               $chucvu = [];
                               while($cv = mysqli_fetch_array($data['chucvu1'])){
                                   array_push($chucvu,$cv['chucvu']);
                               }  

                               $chucvu = array_unique($chucvu);
                               for($i = 0; $i < count($chucvu); $i ++){
                                    echo "<option value='".$chucvu[$i]."'>$chucvu[$i]</option>";
                               }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="edit-luong">Lương</label>
                        <input type="number" class="form-control" placeholder="Enter salary" id="edit-luong"
                            name="edit-luong">
                    </div>
                    <div class="col">
                        <label for="edit-kvc">Khu làm việc</label>
                        <select name="edit-kvc" class="form-control" id="edit-kvc">
                            <?php
                                while($kvc = mysqli_fetch_array($data['kvc1'])){   
                                    if(!empty(Session::get("kvcAdd")) && Session::get("kvcAdd") == $kvc['makhu']){
                                        echo '<option selected="selected" value='.$kvc['makhu'].'>'.$kvc['tenkhu'].'</option>';
                                        Session::set("kvcAdd",'');
                                    }else{
                                        echo '<option value='.$kvc['makhu'].'>'.$kvc['tenkhu'].'</option>';
                                    }
                               }  
                            ?>
                        </select>
                    </div>
                </div>
                <div style="text-align: right;">
                    <button type="button" class="btn btn-primary btn-radius mt-3" name="rspass-eployee">Đổi mật khẩu
                        nhân viên</button>
                    <button type="submit" class="btn btn-primary btn-radius mt-3" name="save-edit-eployee">Lưu</button>
                    <button type="button" class="btn btn-cancel btn-radius mt-3 close-dialog" id="cancel-addeployee"
                        name="cancel-add-eployee">Hủy</button>
                </div>
            </form>
        </dialog>
        <!-- delete employee -->
        <dialog class="dialog-border confirm-del" style="width: 430px;">
            <form action="<?php echo WEB_ROOT ?>admin/employee/xoaNV" method="POST">
                <p>Bạn có chắc chắn muốn xóa nhân viên <span class="del-id" style="color: green;"></span> không
                    ?
                </p>
                <input type="text" name="delete-eployee" class="del-id" style="display: none;">
                <div style="text-align: right;">
                    <input type="submit" value="Có" class="btn-add btn-hover btn-radius"
                        name="btn-confirm-delete-eployee">
                    <input type="button" value="Không" class="close-dialog btn-radius btn-cancel">
                </div>
            </form>
        </dialog>
        <!-- add employee -->
        <dialog class="dialog-border addInfo" style="width: 50vw;">
            <div style="text-align: right;">
                <button type="button" class="btn-close close-dialog" aria-label="Close"></button>
            </div>
            <form action="<?php echo WEB_ROOT ?>admin/employee/themNV" method="POST">

                <div class="row">
                    <h3 style="text-align: center;">Thêm nhân viên mới</h3>
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
                        <label for="add-employee">Mã nhân viên</label>
                        <input type="text" class="form-control" placeholder="Enter id" required="" name="add-employee"
                            value="<?php if(!empty(Session::get("idAdd"))){
                                echo Session::get("idAdd");
                                Session::set("idAdd",'');
                            } ?>">
                    </div>
                    <div class="col">
                        <label for="add-username">Tài khoản</label>
                        <input type="text" class="form-control" placeholder="Enter username" required=""
                            name="add-username" value="<?php if(!empty(Session::get("usernameAdd"))){
                                echo Session::get("usernameAdd");
                                Session::set("usernameAdd",'');
                            } ?>">
                    </div>

                </div>

                <div class="row">
                    <div class="col">
                        <label for="add-name">Họ tên</label>
                        <input type="text" class="form-control" placeholder="Enter fullname" name="add-name" required=""
                            value="<?php if(!empty(Session::get("nameAdd"))){
                                echo Session::get("nameAdd");
                                Session::set("nameAdd",'');
                            } ?>">
                    </div>
                    <div class="col">
                        <label for="add-email">Email</label>
                        <input type="text" class="form-control" placeholder="Enter email" name="add-email" required=""
                            value="<?php if(!empty(Session::get("emailAdd"))){
                                echo Session::get("emailAdd");
                                Session::set("emailAdd",'');
                            } ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="add-phone">Số điện thoại</label>
                        <input type="number" class="form-control" placeholder="Enter phone number" name="add-phone"
                            value="<?php if(!empty(Session::get("phoneAdd"))){
                                echo Session::get("phoneAdd");
                                Session::set("phoneAdd",'');
                            } ?>">
                    </div>
                    <div class="col">
                        <label for="add-dob">Ngày sinh</label>
                        <input type="date" class="form-control" name="add-dob" value="<?php if(!empty(Session::get("dobAdd"))){
                                echo Session::get("dobAdd");
                                Session::set("dobAdd",'');
                            } ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="add-add">Địa chỉ</label>
                        <input type="text" class="form-control" placeholder="Enter address" name="add-add" value="<?php if(!empty(Session::get("addAdd"))){
                                echo Session::get("addAdd");
                                Session::set("addAdd",'');
                            } ?>">
                    </div>
                    <div class="col">
                        <label for="add-active">Chức vụ</label>
                        <select name="add-chucvu" class="form-control">
                            <?php
                               $chucvu = [];
                               while($cv = mysqli_fetch_array($data['chucvu'])){
                                   array_push($chucvu,$cv['chucvu']);
                               }  

                               $chucvu = array_unique($chucvu);
                               for($i = 0; $i < count($chucvu); $i ++){
                                   if(!empty(Session::get("cvAdd")) && Session::get("cvAdd") == $chucvu[$i]){
                                    echo "<option selected='selected' value='".$chucvu[$i]."'>$chucvu[$i]</option>";
                                        Session::set("cvAdd",'');
                                    }else{
                                        echo "<option value='".$chucvu[$i]."'>$chucvu[$i]</option>";
                                    }
                               }

                               

                            ?>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="add-add">Lương</label>
                        <input type="number" class="form-control" placeholder="Enter salary" name="add-luong" value="<?php if(!empty(Session::get("luongAdd"))){
                                echo Session::get("luongAdd");
                                Session::set("luongAdd",'');
                            } ?>">
                    </div>
                    <div class="col">
                        <label for="add-active">Khu làm việc</label>
                        <select name="add-kvc" class="form-control" value="dasD">
                            <?php
                                while($kvc = mysqli_fetch_array($data['kvc'])){   
                                    if(!empty(Session::get("kvcAdd")) && Session::get("kvcAdd") == $kvc['makhu']){
                                        echo '<option selected="selected" value='.$kvc['makhu'].'>'.$kvc['tenkhu'].'</option>';
                                        Session::set("kvcAdd",'');
                                    }else{
                                        echo '<option value='.$kvc['makhu'].'>'.$kvc['tenkhu'].'</option>';
                                    }
                               }  
                            ?>
                        </select>
                    </div>
                </div>
                <div style="text-align: right;">
                    <button type="submit" class="btn btn-primary btn-radius mt-3" name="save-add-eployee">Add</button>
                    <button type="button" class="btn btn-cancel btn-radius mt-3 close-dialog" id="cancel-addeployee"
                        name="cancel-add-eployee">Cancel</button>
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
    $('#employee-tbl').DataTable({
        "scrollX": true
    });

});
</script>