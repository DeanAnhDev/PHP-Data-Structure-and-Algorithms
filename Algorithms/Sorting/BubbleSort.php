<?php
//Thuật toán: Duyệt mảng từ phần tử đầu tiên. Ta sẽ so sánh mỗi phần tử với phần tử liền trước nó, nếu chúng đứng sai vị trí, ta sẽ đổi chỗ chúng cho nhau. Quá trình này sẽ được dừng nếu gặp lần duyệt từ đầu dãy đến cuối dãy mà không phải thực hiện đổi chỗ bất kì 2 phần từ nào (tức là tất cả các phần tử đã được sắp xếp đúng vị trí).
//Đánh giá: Tuy đơn giản nhưng Bubble là thuật toán kém hiệu quả nhất trong 3 thuật toán ở mục này
function bubbleSort($arr) {
    $arrCount = count($arr);
    echo "Mảng ban đầu: " . implode(", ", $arr) . "\n\n";

    for ($i = 0; $i < $arrCount - 1; $i++) {
        $swapped = false;

        for ($j = 0; $j < $arrCount - $i - 1; $j++) {
            if ($arr[$j] > $arr[$j + 1]) {
                // Hoán đổi
                $temp = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $temp;
                $swapped = true;
            }
        }

        if (!$swapped) break;
    }
    return $arr;
}

$arr = [6, 34, 8, 2];
print_r(bubbleSort($arr));
