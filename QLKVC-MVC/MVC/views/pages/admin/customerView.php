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
                    <li class="breadcrumb-item active fw-light" aria-current="page">Quản lý </li>
                    <li class="breadcrumb-item active fw-light" aria-current="page">Khách hàng </li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header-->
    <header class="py-4">
        <div class="container-fluid py-2">
            <h1 class="h3 fw-normal mb-0">Quản lý khách hàng</h1>
        </div>
    </header>
    <section>
        <div style="width: 90% ; margin: 0 auto;">
            <!-- table-striped -->

            <div><button class="btn-add btn-radius btn-hover" id="btn-add" onclick="showDialogAdd()"><i
                        class="bi bi-plus-circle" style="margin: 5px ;"></i>Add</button></div>
            <table class="table table-hover table-bordered " id="customer-tbl">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Id</th>
                        <th scope="col">Full name</th>
                        <th scope="col">Birth day</th>
                        <th scope="col">Username</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone number</th>
                        <th scope="col">Address</th>
                        <th scope="col">Create At</th>
                        <th scope="col">Active</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody id="tbl-cus">
                    <?php   
                            $i = 1;
                            while ($value = mysqli_fetch_assoc($data['result'])) {
                        ?>
                    <tr class="row-hover">
                        <td scope="row"><?php echo $i; ?></td>
                        <td><?php echo $value['id']; ?></td>
                        <td><?php echo $value['fullname']; ?></td>
                        <td><?php echo $value['dob']; ?></td>
                        <td><?php echo $value['username']; ?></td>
                        <td><?php echo $value['email']; ?></td>
                        <td><?php echo $value['phonenumber']; ?></td>
                        <td><?php echo $value['address']; ?></td>
                        <td><?php echo $value['create_at']; ?></td>
                        <?php
                        if ($value['active'] == 1)
                                echo '<td><input type="checkbox" checked ></td>';
                            else
                                echo '<td><input type="checkbox"></td>';
                                ?>
                        <td><button type="submit" class="editRow btn-hover btn-edit btn-radius"
                                onclick="postData('<?php echo $value['id'] ?>', '<?php echo $value['fullname'] ?>','<?php echo $value['dob'] ?>', '<?php echo $value['username'] ?>','<?php echo $value['email'] ?>', '<?php echo $value['phonenumber'] ?>','<?php echo $value['address'] ?>', '<?php echo $value['active'] ?>')">
                                <i class=" bi bi-pencil-square"></i>
                                Edit</button>
                            <button type="submit" class="deleteRow btn-hover btn-delete btn-radius"
                                onclick="dataDelete(' <?php echo $value['id'] ?>')"><i class="bi bi-trash"></i>
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
                        <th scope="col">Id</th>
                        <th scope="col">Full name</th>
                        <th scope="col">Birth day</th>
                        <th scope="col">Username</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone number</th>
                        <th scope="col">Address</th>
                        <th scope="col">Active</th>
                    </tr>
                </tfoot>
            </table>

        </div>
        <!-- edit customer -->
        <dialog style="width: 50vw;" class="dialog-border edit">

            <div style="text-align: right;">
                <button type="button" class="btn-close close-dialog" aria-label="Close"></button>
            </div>
            <form action="<?php echo WEB_ROOT ?>admin/customer/suaKH" method="POST">

                <div class="row">
                    <h3 style="text-align: center;">Cập nhật thông tin khách hàng</h3>
                </div>
                <div class="thongbao"><?php if(!empty(Session::get("thongbao2"))){ ?>
                    <script>
                    window.onload = function() {
                        document.querySelector(".edit").showModal();
                    }
                    </script>
                    <?php
                    echo Session::get("thongbao2");
                    Session::set("thongbao2",'');
                    } ?>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="edit-idCus">Id</label>
                        <input type="text" class="form-control" id="edit-idCus" readonly name="edit-idCus" value="<?php if(!empty(Session::get("idEdit"))){
                                echo Session::get("idEdit");
                                Session::set("idEdit",'');
                            } ?>">
                    </div>
                    <div class="col">
                        <label for="edit-name">Fullname</label>
                        <input type="text" class="form-control" required placeholder="Enter fullname" id="edit-name"
                            name="edit-name" value="<?php if(!empty(Session::get("nameEdit"))){
                                echo Session::get("nameEdit");
                                Session::set("nameEdit",'');
                            } ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="edit-dob">Birth day</label>
                        <input type="date" class="form-control" id="edit-dob" name="edit-dob" value="<?php if(!empty(Session::get("dobEdit"))){
                                echo Session::get("dobEdit");
                                Session::set("dobEdit",'');
                            } ?>">
                    </div>
                    <div class="col">
                        <label for="edit-username">Username</label>
                        <input type="text" class="form-control" placeholder="Enter username" id="edit-user"
                            name="edit-user" readonly value="<?php if(!empty(Session::get("usernameEdit"))){
                                echo Session::get("usernameEdit");
                                Session::set("usernameEdit",'');
                            } ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="edit-email">Email</label>
                        <input type="text" class="form-control" placeholder="Enter email" id="edit-email"
                            name="edit-email" readonly value="<?php if(!empty(Session::get("emailEdit"))){
                                echo Session::get("emailEdit");
                                Session::set("emailEdit",'');
                            } ?>">
                    </div>
                    <div class="col">
                        <label for="edit-phone">Phone number</label>
                        <input type="number" class="form-control" placeholder="Enter phone number" id="edit-phone"
                            name="edit-phone" value="<?php if(!empty(Session::get("phoneEdit"))){
                                echo Session::get("phoneEdit");
                                Session::set("phoneEdit",'');
                            } ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="edit-add">Address</label>
                        <input type="text" class="form-control" placeholder="Enter address" id="edit-add"
                            name="edit-add" value="<?php if(!empty(Session::get("addEdit"))){
                                echo Session::get("addEdit");
                                Session::set("addEdit",'');
                            } ?>">
                    </div>
                    <div class="col">
                        <label for="edit-active">Trạng thái</label>
                        <select class="form-control" id="edit-active" name="edit-active">
                            <option value="Đã kích hoạt">Đã kích hoạt</option>
                            <option value="Chưa kích hoạt">Chưa kích hoạt</option>
                        </select>
                    </div>
                </div>
                <div style="text-align: right;">
                    <button type="button" class="btn btn-primary btn-radius mt-3" name="rspass-cus">Reset
                        password</button>
                    <button type="submit" class="btn btn-primary btn-radius mt-3" name="save-edit-cus">Save</button>
                    <button type="button" class="btn btn-cancel btn-radius mt-3 close-dialog" id="cancel-addCus"
                        name="cancel-add-cus">Cancel</button>
                </div>
            </form>
        </dialog>
        <!-- delete customer -->
        <dialog class="dialog-border confirm-del" style="width: 430px;">
            <form action="<?php echo WEB_ROOT ?>admin/customer/xoaKH" method="POST">
                <p>Bạn có chắc chắn muốn xóa khách hàng <span class="del-id" style="color: green;"></span> không ?
                </p>
                <input type="text" name="delete-cus" class="del-id" style="display: none;">
                <div style="text-align: right;">
                    <input type="submit" value="Có" class="btn-add btn-hover btn-radius" name="btn-confirm-delete-cus">
                    <input type="button" value="Không" class="close-dialog btn-radius btn-cancel">
                </div>
            </form>
        </dialog>

        <!-- add customer -->
        <dialog class="dialog-border addInfo" style="width: 50vw;">
            <div style="text-align: right;">
                <button type="button" class="btn-close close-dialog" aria-label="Close"></button>
            </div>
            <form action="<?php echo WEB_ROOT ?>admin/customer/themKH" method="POST">

                <div class="row">
                    <h3 style="text-align: center;">Thêm khách hàng mới</h3>
                </div>
                <div class="thongbao"><?php if(!empty(Session::get("thongbao1"))){ ?>
                    <script>
                    window.onload = function() {
                        showDialogAdd();
                    }
                    </script>
                    <?php
                    echo Session::get("thongbao1");
                    Session::set("thongbao1",'');
                    } ?>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="add-idCus">Id</label>
                        <input type="text" class="form-control" placeholder="Enter id customer" required=""
                            name="add-idCus" value="<?php if(!empty(Session::get("idAdd"))){
                                echo Session::get("idAdd");
                                Session::set("idAdd",'');
                            } ?>">
                    </div>
                    <div class="col">
                        <label for="add-name">Fullname</label>
                        <input type="text" class="form-control" placeholder="Enter fullname" name="add-name" required=""
                            value="<?php if(!empty(Session::get("nameAdd"))){
                                echo Session::get("nameAdd");
                                Session::set("nameAdd",'');
                            } ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="add-dob">Birth day</label>
                        <input type="date" class="form-control" name="add-dob" value="<?php if(!empty(Session::get("dobAdd"))){
                                echo Session::get("dobAdd");
                                Session::set("dobAdd",'');
                            } ?>">
                    </div>
                    <div class="col">
                        <label for="add-username">Username</label>
                        <input type="text" class="form-control" placeholder="Enter username" name="add-username" value="<?php if(!empty(Session::get("usernameAdd"))){
                                echo Session::get("usernameAdd");
                                Session::set("usernameAdd",'');
                            } ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="add-email">Email</label>
                        <input type="text" class="form-control" placeholder="Enter email" name="add-email" required=""
                            value="<?php if(!empty(Session::get("emailAdd"))){
                                echo Session::get("emailAdd");
                                Session::set("emailAdd",'');
                            } ?>">
                    </div>
                    <div class="col">
                        <label for="add-phone">Phone number</label>
                        <input type="number" class="form-control" placeholder="Enter phone number" name="add-phone"
                            value="<?php if(!empty(Session::get("phoneAdd"))){
                                echo Session::get("phoneAdd");
                                Session::set("phoneAdd",'');
                            } ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="add-add">Address</label>
                        <input type="text" class="form-control" placeholder="Enter address" name="add-add" value="<?php if(!empty(Session::get("addAdd"))){
                                echo Session::get("addAdd");
                                Session::set("addAdd",'');
                            } ?>">
                    </div>
                    <div class="col">
                        <label for="add-active">Trạng thái</label>
                        <input type="text" class="form-control" name="add-active" readonly value="Chưa kích hoạt">
                    </div>
                </div>
                <div style="text-align: right;">
                    <button type="submit" class="btn btn-primary btn-radius mt-3" name="save-add-cus">Add</button>
                    <button type="button" class="btn btn-cancel btn-radius mt-3 close-dialog" id="cancel-addCus"
                        name="cancel-add-cus">Cancel</button>
                </div>
            </form>
        </dialog>
    </section>
    <?php
        include_once './MVC/views/inc/admin/footer.php';
    ?>

    <?php if(!empty(Session::get("thongbao0"))){ ?>
    <script>
    window.onload = function() {
        alert("<?php echo Session::get("thongbao0") ?>");
    }
    </script>
    <?php
    Session::set("thongbao0","");
    } ?>
</div>

<script>
$(document).ready(function() {
    $('#customer-tbl').DataTable({
        "scrollX": true
    });

});
</script>