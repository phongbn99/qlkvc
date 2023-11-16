<div class="container grid center">
    <div class="form" style="width: 50%; font-size: 1.6rem;">
        <h1 style="text-align: center; font-size: 200%; margin: 20px 0;">Change Password</h1>
        <form class="login-form" method="POST" action="<?php echo WEB_ROOT; ?>changepwd/checkPass">
            <div>
                <div class="input-group ">
                    <input class="input" id="old-pass" type="password" name="old-pass" autocomplete="off" required
                        value="">
                    <label class="label" for="old-pass">Current password</label>
                </div>
                <div class="input-group">
                    <input class="input" id="new-pass" type="password" name="new-pass" required value="">
                    <label class="label" for="new-pass">New password</label>
                </div>
                <div class="input-group">
                    <input class="input" id="confirm-new-pass" type="password" name="confirm-new-pass" required
                        value="">
                    <label class="label" for="confirm-new-pass">Confirm new password</label>
                </div>
            </div>
            <div class="stt" style="text-align: center; color: red; font-size: 1.4rem;">
                <?php
                    if(Session::get("thongbaodmk") && Session::get("thongbaodmk") != ''){
                        echo Session::get("thongbaodmk");
                        Session::set("thongbaodmk",'');
                    }
                ?>
            </div>
            <div class="btn-changepass">
                <input id="btn-changepass" type="submit" value="Change Pass" name="btn_changepass" onclick="check()">
            </div>

        </form>
    </div>
</div>

<script src="<?php echo WEB_ROOT; ?>public/assets/clients/js/changepass.js"></script>