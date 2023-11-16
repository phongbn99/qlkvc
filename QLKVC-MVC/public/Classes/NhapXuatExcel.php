<?php

require_once './PHPExcel.php';

$excel = new PHPExcel();
//Chọn trang cần ghi (là số từ 0->n)
// $excel->setActiveSheetIndex(0);
//Tạo tiêu đề cho trang. (có thể không cần)
$excel->getActiveSheet()->setTitle('Danh sách nhân viên');

$excel->getActiveSheet()->getColumnDimension('A')->setWidth(50);
$excel->getActiveSheet()->getColumnDimension('B')->setWidth(140);
$excel->getActiveSheet()->getColumnDimension('C')->setWidth(120);
$excel->getActiveSheet()->getColumnDimension('D')->setWidth(220);
$excel->getActiveSheet()->getColumnDimension('E')->setWidth(220);
$excel->getActiveSheet()->getColumnDimension('F')->setWidth(150);
$excel->getActiveSheet()->getColumnDimension('G')->setWidth(120);
$excel->getActiveSheet()->getColumnDimension('H')->setWidth(120);
$excel->getActiveSheet()->getColumnDimension('I')->setWidth(120);

//Xét in đậm cho khoảng cột
$excel->getActiveSheet()->getStyle('A4:I4')->getFont()->setBold(true);

$excel->getActiveSheet()->setCellValue('A4', 'STT');
$excel->getActiveSheet()->setCellValue('B4', 'Mã nhân viên');
$excel->getActiveSheet()->setCellValue('C4', 'Tài khoản');
$excel->getActiveSheet()->setCellValue('D4', 'Họ và tên');
$excel->getActiveSheet()->setCellValue('E4', 'Email');
$excel->getActiveSheet()->setCellValue('F4', 'Số điện thoại');
$excel->getActiveSheet()->setCellValue('G4', 'Ngày sinh');
$excel->getActiveSheet()->setCellValue('H4', 'Địa chỉ');
$excel->getActiveSheet()->setCellValue('I4', 'Chức vụ');


$numRow = 2;

foreach ($data as $row) {

    $excel->getActiveSheet()->setCellValue('A4' . $numRow, $row[0]);

    $excel->getActiveSheet()->setCellValue('B4' . $numRow, $row[1]);

    $excel->getActiveSheet()->setCellValue('C4' . $numRow, $row[2]);

    $numRow++;

}

PHPExcel_IOFactory::createWriter($excel, 'Excel2010')->save('data.xlsx');


// header('Content-type: application/vnd.ms-excel');

// header('Content-Disposition: attachment; filename="data.xls"');

// PHPExcel_IOFactory::createWriter($excel, 'Excel2010')->save('php://output');

?>