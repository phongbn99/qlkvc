<div id="top-nav">
    <div class="nav-menu grid">
        <div class="top-nav-left">
            <a href="tel:+84708844444"><i class="fa fa-phone icon"></i>
                <span class="hotline">Hotline: Anh Phong Bắc Ninh 0355348622</span>
            </a>
        </div>
        <div class="top-nav-right">
            <i class="fa-solid fa-magnifying-glass search"></i>
            <a href="" class="language"><i class="fa-solid fa-globe"></i>Tiếng việt</a>
            <input type="button" class="login open-login" value="Đăng nhập" onclick="location.href= 'login'"></input>
            <ul id="menu-info">
                <li><a><i style="margin-right: 5px;" class="fa-regular fa-user"></i>
                        <?php
                if(Session::get("name") != null && !empty(Session::get("name"))){
                    echo Session::get("name");
                }            
            ?></a>
                    <ul id="header-info">
                        <li><a href="thong-tin-khach-hang">Thông tin cá nhân</a></li>
                        <li><a href="doi-mat-khau">Đổi mật khẩu</a></li>
                        <li><a href="lich-su-dat-ve">Lịch sử đặt vé</a></li>
                        <li><a href="?action=logout">Đăng xuất<i style="margin-left: 10px;"
                                    class="fa-solid fa-right-from-bracket"></i></a></li>
                    </ul>
                </li>

            </ul>
            <?php
                if(isset($_GET['action']) && !empty($_GET['action'])){
                    Session::destroy(1);
                    Response::redirect("index.php");
                }
            ?>
        </div>
    </div>
</div>
<header id="header">
    <div id="header-menu-icon">
        <i class="fa-solid fa-bars"></i>
    </div>
    <div class="header-logo">
        <img src="<?php echo WEB_ROOT; ?>public/assets/clients/images/logo-utt-border.png" alt="logo" />
    </div>
    <ul class="header-menu">
        <li class="menu-item">
            <a href="trang-chu" class="color-home link"><img class="menu-item-img"
                    src="<?php echo WEB_ROOT; ?>public/assets/clients/images/menu-icon1.png" />
                <span>Trang chủ</span></a>
        </li>
        <li class="menu-item">
            <a href="gioi-thieu" class="color-infor link">
                <img class="menu-item-img" src="<?php echo WEB_ROOT; ?>public/assets/clients/images/menu-icon2.png" />
                <span>Thông tin khu vui chơi</span>
            </a>
        </li>
        <li class="menu-item" id="item-khamphacv">
            <a href="kham-pha-cong-vien" class="color-green link"><img class="menu-item-img"
                    src="<?php echo WEB_ROOT; ?>public/assets/clients/images/menu-icon3.png" />
                <span>Quản lý hoạt động và lịch trình</span></a>
            <ul id="khamphacv" class="sub-item">
                <li class="khamphacv-li">
                    <a href="to-hop-safari" class="sub-item-link">
                        <img class="sub-item-img" src="<?php echo WEB_ROOT; ?>public/assets/clients/images/safari.jpg"
                            alt="" />
                        <span>Tổ hợp safari</span>
                    </a>
                </li>
                <li class="khamphacv-li">
                    <a href="thuy-cung" class="sub-item-link">
                        <img class="sub-item-img"
                            src="<?php echo WEB_ROOT; ?>public/assets/clients/images/thuycung.jpg" alt="" />
                        <span>Thủy cung</span>
                    </a>
                </li>
                <li class="khamphacv-li">
                    <a href="cong-vien-nuoc" class="sub-item-link">
                        <img class="sub-item-img"
                            src="<?php echo WEB_ROOT; ?>public/assets/clients/images/congviennuoc.jpg" alt="" />
                        <span>Công viên nước</span>
                    </a>
                </li>
                <li class="khamphacv-li">
                    <a href="to-hop-tro-choi" class="sub-item-link">
                        <img class="sub-item-img"
                            src="<?php echo WEB_ROOT; ?>public/assets/clients/images/tohoptrochoi.jpg" alt="" />
                        <span>Tổ hợp trò chơi</span>
                    </a>
                </li>
                <li class="khamphacv-li">
                    <a href="lang-nghe" class="sub-item-link">
                        <img class="sub-item-img"
                            src="<?php echo WEB_ROOT; ?>public/assets/clients/images/langnghe.jpg" alt="" />
                        <span>Làng nghề</span>
                    </a>
                </li>
                <li class="khamphacv-li">
                    <a href="hoi-truong" class="sub-item-link">
                        <img class="sub-item-img"
                            src="<?php echo WEB_ROOT; ?>public/assets/clients/images/hoitruong.jpg" alt="" />
                        <span>Hội trường</span>
                    </a>
                </li>
                <li class="khamphacv-li">
                    <a href="am-thuc" class="sub-item-link">
                        <img class="sub-item-img" src="<?php echo WEB_ROOT; ?>public/assets/clients/images/amthuc.jpg"
                            alt="" />
                        <span>Ẩm thực</span>
                    </a>
                </li>
                <li class="khamphacv-li">
                    <a href="luu-tru" class="sub-item-link">
                        <img class="sub-item-img" src="<?php echo WEB_ROOT; ?>public/assets/clients/images/luutru.jpg"
                            alt="" />
                        <span>Lưu trú</span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item">
            <a href="tin-tuc-su-kien" class="color-news link"><img class="menu-item-img"
                    src="<?php echo WEB_ROOT; ?>public/assets/clients/images/menu-icon4.png" />
                <span>Tin tức sự kiện</span></a>
        </li>
        <li class="menu-item" id="item-banggia" class="sub-item">
            <a href="bang-gia" class="color-dolla link"><img class="menu-item-img"
                    src="<?php echo WEB_ROOT; ?>public/assets/clients/images/menu-icon5.png" />
                <span>Dịch vụ và Đặt vé</span></a>
            <ul id="banggia" class="sub-item">
                <li class="banggia-li">
                    <a href="dich-vu-vui-choi" class="sub-item-link">
                        <img class="sub-item-img"
                            src="<?php echo WEB_ROOT; ?>public/assets/clients/images/dvvuichoi.png" alt="" />
                    </a>
                </li>
                <li class="banggia-li">
                    <a href="dich-vu-an-uong" class="sub-item-link">
                        <img class="sub-item-img"
                            src="<?php echo WEB_ROOT; ?>public/assets/clients/images/dvanuong.png" alt="" />
                    </a>
                </li>
                <li class="banggia-li">
                    <a href="dich-vu-nghi-ngoi" class="sub-item-link">
                        <img class="sub-item-img"
                            src="<?php echo WEB_ROOT; ?>public/assets/clients/images/dvnghingoi.png" alt="" />
                    </a>
                </li>
                <li class="banggia-li">
                    <a href="to-chuc-su-kien" class="sub-item-link">
                        <img class="sub-item-img"
                            src="<?php echo WEB_ROOT; ?>public/assets/clients/images/tochucsk.png" alt="" />
                    </a>
                </li>
                <li class="banggia-li">
                    <a href="dat-ve" class="sub-item-link">
                        <img class="sub-item-img" src="<?php echo WEB_ROOT; ?>public/assets/clients/images/datve.png"
                            alt="" />
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item" id="item-huongdan" class="sub-item">
            <a href="huong-dan" class="color-note link"><img class="menu-item-img"
                    src="<?php echo WEB_ROOT; ?>public/assets/clients/images/menu-icon6.png" />
                <span>Hướng dẫn</span></a>
            <ul id="huongdan" class="sub-item">
                <li class="huongdan-li">
                    <a href="so-do-cong-vien" class="sub-item-link">
                        <img class="sub-item-img" src="<?php echo WEB_ROOT; ?>public/assets/clients/images/map.jpg"
                            alt="" />
                        <span>Sơ đồ công viên</span>
                    </a>
                </li>
                <li class="huongdan-li">
                    <a href="tuyen-bus" class="sub-item-link">
                        <img class="sub-item-img"
                            src="<?php echo WEB_ROOT; ?>public/assets/clients/images/tuyenxebus.png" alt="" />
                        <span>Các tuyến xe bus</span>
                    </a>
                </li>
                <li class="huongdan-li">
                    <a href="thoi-gian-hoat-dong" class="sub-item-link">
                        <img class="sub-item-img"
                            src="<?php echo WEB_ROOT; ?>public/assets/clients/images/tghoatdong.png" alt="" />
                        <span>Thời gian hoạt động</span>
                    </a>
                </li>
                <li class="huongdan-li">
                    <a href="quy-dinh" class="sub-item-link">
                        <img class="sub-item-img"
                            src="<?php echo WEB_ROOT; ?>public/assets/clients/images/quydinh.png" alt="" />
                        <span>Quy định</span>
                    </a>
                </li>
            </ul>
        </li>
        <!-- <li class="menu-item">
            <a href="tuyen-dung" class="color-bag link"><img class="menu-item-img"
                    src="<?php echo WEB_ROOT; ?>public/assets/clients/images/menu-icon7.png" />
                <span>Tuyển dụng</span></a>
        </li> -->
        <!-- <li class="menu-item">
            <a href="lien-he" class="color-mail link"><img class="menu-item-img"
                    src="<?php echo WEB_ROOT; ?>public/assets/clients/images/menu-icon8.png" />
                <span>Liên hệ</span></a>
        </li> -->
    </ul>
</header>