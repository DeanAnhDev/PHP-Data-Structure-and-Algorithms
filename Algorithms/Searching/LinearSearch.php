<?php
//Linear Search là thuật toán đơn giản nhất để tìm một phần tử trong mảng:
//duyệt từng phần tử từ đầu đến cuối mảng, so sánh từng giá trị với giá trị cần tìm.
//
//Ưu điểm:
//Dễ hiểu, dễ cài đặt.
//Không cần mảng sắp xếp trước.
//Nhược điểm:
//Chậm khi mảng lớn (vì phải kiểm tra từng phần tử).

function linearSearch($arr, $target){
    for($i = 0; $i < count($arr); $i++){
        if($arr[$i] == $target){
            return $i;
        }
    }
    return -1;
}

$arr = [23,21,2,12,42,-3,24];
$target = -3;

$result = linearSearch($arr, $target);
if($result != -1){
    echo "Tim thay $target o vi tri $result\n";
}else{
    echo "Khong tim thay $target";
}