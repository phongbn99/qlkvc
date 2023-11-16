<head>
    <style>
    th {
        background-color: #95afc0;
    }

    td {
        padding: 10px;
    }

    table,
    th,
    td {
        border: 1px solid black;
        border-collapse: collapse;
        padding: 5px;
    }
    </style>
</head>
<div class="grid index-title">
    <h1 class="candoc">
        <span>
            <img class="h1-img" src="<?php echo WEB_ROOT; ?>public/assets/clients/images/index-icon10.png" alt="">
        </span>
        <span class="uppertext">
            lịch sử đặt vé
        </span>
    </h1>

    <table style="width: 100%;">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Khu vui chơi</th>
                <th scope="col">Giờ mở cửa</th>
                <th scope="col">Giờ đóng cửa</th>
                <th scope="col">Trẻ em</th>
                <th scope="col">Người lớn</th>
                <th scope="col">Dịch vụ</th>
                <th scope="col">Giá dịch vụ</th>
                <th scope="col">Trò chơi</th>
                <th scope="col">Giá trò chơi</th>
                <th scope="col">Tổng tiền</th>
                <th scope="col">Trạng thái</th>
            </tr>
        </thead>
        <tbody>
            <?php   
                $i = 1;
                while ($value = mysqli_fetch_assoc($data['result'])) {
                    if($value['id'] == Session::get("id")){
                        if($i % 2 == 0){
                            echo '<tr style="background: #dcdde1;">';
                        }else{
                            echo '<tr >';
                        }
                        echo 
                        '<td> '.$i.'</td>
                        <td>'.$value['tenkhu'].'</td>
                        <td>'.$value['giomo'].'</td>
                        <td>'.$value['giodong'].'</td>
                        <td>'.$value['treem'].'</td>
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
                        echo '</tr>';
                    
                   $i++;
                    }
                    
                    
                }
            ?>
        </tbody>


    </table>


</div>