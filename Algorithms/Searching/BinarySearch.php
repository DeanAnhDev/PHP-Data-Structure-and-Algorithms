<?php

//Binary Search là một thuật toán tìm kiếm nhanh trong mảng đã được sắp xếp. Nó hoạt động bằng cách:
//
//So sánh phần tử giữa (mid) với giá trị cần tìm.
//
//Nếu không khớp, loại bỏ một nửa mảng (trái hoặc phải) và tiếp tục tìm

//Mảng phải được sắp xếp tăng dần trước khi áp dụng Binary Search.

//Ý tưởng hoạt động:
//Giả sử bạn có mảng đã sắp xếp:
//[1, 3, 5, 7, 9, 11, 13]
//Cần tìm số 9.
//
//Lấy chỉ số giữa: mid = (0 + 6) / 2 = 3 → arr[3] = 7
//
//So sánh 9 > 7 → loại bỏ bên trái → tìm trong [9, 11, 13]
//
//Tiếp tục tìm đến khi thấy hoặc hết mảng.


function binarySearch($arr, $target){
     $left = 0;
     $right = count($arr)-1;

     while($left <= $right){
         $mid = floor(($left + $right) / 2);

         if($arr[$mid] == $target){
             return $mid;//tra về vị trí
         }
         if($arr[$mid] < $target){
             $left = $mid + 1;
         }else{
             $right = $mid - 1;
         }
     }
    return -1;//ko tim dc

}

$arr = [1, 3, 5, 7, 9, 11, 13];
$target = 9;

$result = binarySearch($arr, $target);

if($result != -1){
    echo "Tim thay $target o vi tri $result";
}else{
    echo "Khong tim thay $target o trong mang";
}