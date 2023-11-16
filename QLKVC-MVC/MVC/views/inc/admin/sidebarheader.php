<div class="sidebar-header d-flex align-items-center justify-content-center p-3 mb-3">
    <!-- User Info-->
    <div class="sidenav-header-inner text-center">
        <div class="avatar">
            <img class="img-fluid rounded-circle  mb-3" id="avatar-photo"
                src="<?php echo WEB_ROOT; ?>public/assets/admin/img/avatar-1.jpg" alt="person">
            <input type="file" id="file-avt">
            <label for="file-avt" id="uploadAvt"><i class="bi bi-camera"></i></label>
        </div>

        <h2 class="h5 text-white text-uppercase mb-0">
            <?php
            echo Session::get('adminName');
            ?>
        </h2>
        <p class="text-sm mb-0 text-muted" style="color: #2ecc71 !important; ">Cấp bậc:
            <?php
            $level = Session::get('level');
            echo Format::rank($level);
            ?>
        </p>
    </div>
    <!-- Small Brand information, appears on minimized sidebar--><a class="brand-small text-center" href="index.php">
        <p class="h1 m-0">DB</p>
    </a>
</div>