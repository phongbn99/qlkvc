<div class="grid index-title">
    <h1 class="candoc">
        <span>
            <img class="h1-img" src="<?php echo WEB_ROOT; ?>public/assets/clients/images/index-icon10.png" alt="">
        </span>
        <span class="uppertext">
            đặt vé
        </span>
    </h1>

    <form method="POST" action="<?php echo WEB_ROOT; ?>datve/insert">
        <div style="display: flex;">
            <div class="datve-left">

                <div class="frmTicket">
                    <div class="input-ticket">
                        <label for="">Họ tên <span style="color: red;">*</span></label>
                        <input type="text" required name="name" <?php 
                            if(Session::get("login")){
                                echo "value='".Session::get("name")."'";
                                echo 'readonly';
                            }
                         ?>>
                    </div>

                    <div class="input-ticket">
                        <label for="">Điện thoại <span style="color: red;">*</span> </label>
                        <input type="number" required name="sdt" <?php 
                            if(Session::get("login")){
                                echo "value='".Session::get("sdt")."'";
                                if(!empty(Session::get("sdt"))){
                                    echo 'readonly';
                                }
                            }
                         ?>>
                    </div>
                     <!-- <div class="input-ticket"> 
                        <label for="">Email </label>
                        <input type="email" name="email" <?php 
                            if(Session::get("login")){
                                echo "value='".Session::get("email")."'";
                                echo 'readonly';
                            }
                         ?>>
                    </div> -->
                    <div class="input-ticket">
                        <label for="">Thời gian tham quan <span style="color: red;">*</span> </label>
                        <input type="date" name="time" required id="tgthamquan">
                    </div>

                    <div class="input-ticket" style="display: inline-flex; justify-content: space-between;">
                        <div>
                            <label for="">Số lượng khách cao trên 1.3m</label>
                            <input type="number" name="tren1m3" class="nguoi" onkeyup="tienVe()" max="5" min="0"
                                onclick="tienVe()" id="ve_nl">
                        </div>
                        <div>
                            <label for="">Số lượng khách cao 0.9m - 1.3m</label>
                            <input type="number" name="duoi1m3" class="nguoi" onkeyup="tienVe()" max="5" min="0"
                                onclick="tienVe()" id="ve_te">
                        </div>
                    </div>

                </div>

            </div>
            <div class="datve-right" style="background: pink;">
                <div class="frmTicket">
                    <div class="input-ticket">
                        <label for="">Khu vui chơi</label>
                        <select name="khu" id="select_khu" class="cbo_tiket" onchange="tienVe()">
                            <option value="0-0-0">Chọn khu</option>
                            <?php 
                                while($value = mysqli_fetch_array($data['khu'])){
                                    echo "<option value='".$value[0]."-".$value[6]."-".$value[7]."' >$value[1] - (Người lớn: $value[6] đ/ng , trẻ em: $value[7] đ/ng)</option>";
                                }
                            ?>
                        </select>
                    </div>

                    <div class="input-ticket">
                        <label for="">Dịch vụ</label>
                        <select name="dv" id="select_dv" class="cbo_tiket" onchange="<?php echo 'tienVe()' ?>">
                            <option value="null-0">Chọn dịch vụ</option>
                            <?php 
                                while($value = mysqli_fetch_array($data['dv'])){   
                                    if(!empty(Session::get("dv")) && Session::get("dv") == $value[0]){
                                        echo '<option selected="selected" value='.$value[0]."-".$value[2].'>'.$value[1].' - (Giá: '.$value[2] .'đ)</option>';
                                        Session::set("dv",'');
                                    }else{
                                        echo '<option value='.$value[0]."-".$value[2].'>'.$value[1].' - (Giá: '.$value[2] .'đ)</option>';
                                    }
                               }  
                            ?>
                        </select>
                    </div>

                    <div class="input-ticket">
                        <label for="">Trò chơi</label>
                        <select name="trochoi" id="select_tc" class="cbo_tiket" onchange="<?php echo 'tienVe()' ?>">
                            <option value="null-0">Chọn trò chơi</option>
                            <?php
                                while($value = mysqli_fetch_array($data['trochoi'])){   
                                    if(!empty(Session::get("trochoi")) && Session::get("trochoi") == $value[0]){
                                        echo '<option selected="selected" value='.$value[0]."-".$value[2].'>'.$value[1].' - (Giá: '.$value[2] .'đ)</option>';
                                        Session::set("trochoi",'');
                                    }else{
                                        echo '<option value='.$value[0]."-".$value[2].'>'.$value[1].' - (Giá: '.$value[2] .'đ)</option>';
                                    }
                               }  
                            ?>
                        </select>
                    </div>

                    <div class="input-ticket" style="margin-top: 20px;">
                        <div style="color: red;">Thành tiền: <span class="giave">0</span> đ.</div>
                        <input type="text" class="giave1" name="giave" style="display: none;">
                    </div>
                    <div class="input-ticket input-ticket-btn btn-hover">
                        <input id="btn-datve" type="submit" name="btnDatve" value="Đặt vé ngayy" onclick="datve()">
                    </div>
                </div>
            </div>
        </div>
    </form>

    <?php if(!empty(Session::get("tbdatve"))){ ?>
    <script>
    window.onload = function() {
        alert(" <?php echo Session::get("tbdatve") ?>");
    }
    </script>
    <?php
    Session::set("tbdatve","");
    } ?>
</div>

<?php
    include_once './MVC/views/inc/event_video.php';
    include_once './MVC/views/inc/lSSlideOuter.php'
?>