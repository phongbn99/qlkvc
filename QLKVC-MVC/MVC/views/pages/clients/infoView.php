<?php
    while($value = mysqli_fetch_array($data['result'])){
        $id = $value['id'];
        $name = $value['fullname'];
        $dob = $value['dob'];
        $user = $value['username'];
        $email = $value['email'];
        $sdt = $value['phonenumber'];
        $addr = $value['address'];
    }
?>
<div class="container grid">
    <div style="font-size: 1.6rem; width: 80%; margin: 0 auto;">
        <h1 style="text-transform: uppercase; text-align: center; margin: 50px 0;">Thông tin cá nhân</h1>
        <div class="thongbao-loi"><?php if(Session::get("thongbao")){
            echo Session::get("thongbao");
            Session::set("thongbao","");
        }  ?></div>
        <div style="display: flex; justify-content: space-between; width: 100%;">

            <form method="POST" action="<?php echo WEB_ROOT; ?>info/updateInfo">
                <div class="row form-info">
                    <div class="col1">
                        <label>Mã KH:</label>
                        <input type="text" readonly name="id" id="a" value="<?php
                                echo $id;
                        ?>">
                    </div>
                    <div class="col2">
                        <label>Tên KH:</label>
                        <input type="text" name="name" required value="<?php
                            echo $name;
                        ?>">
                    </div>
                </div>

                <div class="row form-info">
                    <div class="col1">
                        <label>Ngày sinh:</label>
                        <input type="date" name="dob" value="<?php
                            echo $dob;
                        ?>">
                    </div>
                    <div class="col2">
                        <label>Tài khoản:</label>
                        <input type="text" name="user" readonly value="<?php
                            echo $user;
                        ?>">
                    </div>
                </div>

                <div class="row form-info">
                    <div class="col1">
                        <label>Email:</label>
                        <input type="text" name="email" required value="<?php
                            echo $email;
                        ?>">
                    </div>
                    <div class="col2">
                        <label>Số điện thoại:</label>
                        <input type="number" name="sdt" value="<?php
                            echo $sdt;
                        ?>">
                    </div>
                </div>
                <div class="row form-info">
                    <div class="col1">
                        <label>Địa chỉ:</label>
                        <input type="text" name="addr" value="<?php
                            echo $addr;
                        ?>">
                    </div>
                </div>

                <div style="text-align: right;"><input type="submit" name="btn_infoCus" id="btn_infoCus"
                        value="Lưu thông tin" class="btn"></div>
            </form>
        </div>
    </div>
</div>