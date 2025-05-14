<?php
//Selection Sort là thuật toán sắp xếp đơn giản hoạt động bằng cách lặp qua mảng, mỗi lần chọn phần tử nhỏ nhất trong đoạn chưa sắp xếp và hoán đổi với phần tử ở đầu đoạn đó.
//Đặc điểm của Selection Sort
//Tiêu chí	Giá trị
//Độ phức tạp:	O(n²) với mọi trường hợp
//Sắp xếp tại chỗ: Có (không cần mảng phụ)
//Ổn định: Không
//Dễ hiểu: Rất dễ triển khai
//Dùng tốt khi:	Mảng nhỏ, đơn giản

//Ý tưởng hoạt động:
//Duyệt từ đầu mảng đến cuối.
//
//Ở mỗi vị trí i, tìm phần tử nhỏ nhất trong đoạn từ i → n-1.
//
//Hoán đổi phần tử nhỏ nhất đó với phần tử tại vị trí i.
//Ví dụ:
//Giả sử có mảng: [29, 10, 14, 37, 13]
//Vòng 1: tìm nhỏ nhất từ [29..13] → là 10, đổi với 29 → [10, 29, 14, 37, 13]
//
//Vòng 2: tìm nhỏ nhất từ [29..13] → là 13, đổi với 29 → [10, 13, 14, 37, 29]
//
//Vòng 3: tìm nhỏ nhất từ [14..29] → là 14, không cần đổi
//
//Vòng 4: tìm nhỏ nhất từ [37, 29] → là 29, đổi với 37
//
//Kết quả: [10, 13, 14, 29, 37]

function selectionSort($arr){
    $n = count($arr);

    for($i = 0; $i < $n; $i++){

        //gia su so nho nhat la arr[i]
        $minIndex = $i;

        //tim phan tu nho nhat trong doan chua sap xep
        for($j = $i+1; $j < $n; $j++) {
            if ($arr[$j] < $arr[$minIndex]) {
                $minIndex = $j;
            }
        }

            //hoan doi neu tim dc phan tu nho hon
            if ($minIndex != $i) {
                $temp = $arr[$i];
                $arr[$i] = $arr[$minIndex];
                $arr[$minIndex] = $temp;
            }
        }
    return $arr;
}

$arr = [23,21,2,12,42,-3,24];
$sortedArray = selectionSort($arr);

echo "Mang da sap xep";
print_r($sortedArray);