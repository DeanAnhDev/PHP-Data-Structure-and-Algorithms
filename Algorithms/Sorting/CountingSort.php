<?php
//Thuật toán Counting Sort là một thuật toán sắp xếp không so sánh phần tử, mà thay vào đó, nó đếm số lần xuất hiện của mỗi phần tử để đưa chúng về đúng vị trí trong mảng đã sắp xếp.
//
//Counting Sort dùng để làm gì?
//    Mục tiêu:
//Sắp xếp nhanh các số nguyên (integers) trong một phạm vi giá trị nhỏ và cố định (ví dụ: 0–100).
//
//    Khi nào nên dùng:
//Dữ liệu là số nguyên không âm (0 hoặc dương)
//
//Phạm vi giá trị nhỏ (ví dụ: 0–1000)
//
//Không cần dùng cho số thực (float) hoặc giá trị lớn
//
//Ưu điểm
//Rất nhanh: Độ phức tạp thời gian là O(n + k) với:
//
//n: số phần tử trong mảng
//
//k: giá trị lớn nhất trong mảng
//
//Không dùng phép so sánh (>, <)

//Nhược điểm:
//Tốn bộ nhớ nếu phạm vi giá trị (k) quá lớn
//
//Chỉ dùng được cho số nguyên không âm

//Ý tưởng hoạt động của Counting Sort
//Giả sử bạn có mảng:
//$arr = [4, 2, 2, 8, 3, 3, 1];
//Bước 1: Đếm số lần xuất hiện của từng giá trị
//count[1] = 1
//count[2] = 2
//count[3] = 2
//count[4] = 1
//count[8] = 1
//Bước 2: Sử dụng bảng đếm để xây dựng mảng đã sắp xếp:
//=> [1, 2, 2, 3, 3, 4, 8]
//

function countingSort($arr)
{
    if(empty($arr)) return [];

    $maxNumber = max($arr);
    $countArray = array_fill(0, $maxNumber+1, 0);

    //step 1
    foreach ($arr as $value) {
        $countArray[$value]++;
    }
    //step 2
    $sortedArray = [];
    for ($i=0; $i < $maxNumber; $i++) {
        while ($countArray[$i] > 0){
            $sortedArray[] = $i;
            $countArray[$i]--;
        }
    }

    return $sortedArray;
}

$arr = [4,2,2,8,3,3,1];
$resultCount = countingSort($arr);

echo "Mang da sap xep: ";
print_r($resultCount);