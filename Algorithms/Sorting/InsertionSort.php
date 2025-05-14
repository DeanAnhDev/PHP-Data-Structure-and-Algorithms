<?php
//Sắp xếp mảng bằng cách xây dựng dần một mảng con đã sắp xếp, từng bước chèn từng phần tử vào đúng vị trí trong mảng đã sắp xếp
//Ý tưởng hoạt động:
//Bắt đầu từ phần tử thứ 2 (vì phần tử đầu tiên xem như đã sắp xếp).
//
//Mỗi vòng lặp, lấy phần tử tại vị trí đó, so sánh và chèn vào đúng chỗ trong đoạn bên trái (đã sắp xếp).
//Example: Cho mảng: [5, 2, 4, 6, 1]
//
//Bước 1: Chèn 2 vào trước 5 → [2, 5, 4, 6, 1]
//
//Bước 2: Chèn 4 vào giữa 2 và 5 → [2, 4, 5, 6, 1]
//
//Bước 3: 6 đúng vị trí → [2, 4, 5, 6, 1]
//
//Bước 4: Chèn 1 vào đầu → [1, 2, 4, 5, 6]

function insertionSort($arr)
{
    $n = count($arr);
    for( $i = 1; $i < $n ; $i++) {
        $key = $arr[$i];//phan tu can chen
        $j = $i-1;
        while ($j >= 0 && $arr[$j] > $key ) {
            $arr[$j+1] = $arr[$j];
            $j--;
        }

        //chen key vao vi tri dung
        $arr[$j+1] = $key;
    }
    return $arr;
}

$arr = [4,23,42,12,3,6,3];
$sortedArray = insertionSort($arr);

echo "Mang da sap xep";
print_r($sortedArray);