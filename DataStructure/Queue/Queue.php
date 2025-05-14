<?php
//Queue (hàng đợi) là một cấu trúc dữ liệu FIFO (First In, First Out) — nghĩa là phần tử thêm vào đầu tiên sẽ được lấy ra đầu tiên.
//Các thao tác cơ bản của Queue:
//| Tên hàm     | Mô tả                            |
//| ----------- | -------------------------------- |
//| `enqueue()` | Thêm phần tử vào **cuối hàng**   |
//| `dequeue()` | Lấy phần tử **đầu hàng** ra      |
//| `peek()`    | Xem phần tử đầu tiên (không xóa) |
//| `isEmpty()` | Kiểm tra hàng đợi có rỗng không  |

class Queue {

    private $items = [];

    //them phan tu vao cuoi hang
    public function enqueue($item) {
        array_push($this->items, $item);
    }

    //lay ra phan tu dau hang
    public function dequeue() {
        if($this->isEmpty()) {
            return null;
        }
        return array_shift($this->items);
    }

    //xem phan tu dau hang ma ko xoa
    public function peek() {
        return $this->isEmpty()? null : $this->items[0];
    }

    public function isEmpty() {
        return empty($this->items);
    }

    //hien thi toan bo hang doi
    public function display() {
        return $this->items;
    }

}

//su dung

$queue = new Queue();

$queue->enqueue("B");
$queue->enqueue("C");
$queue->enqueue("A");

echo"Hang doi hien tai: ";
print_r($queue->display());

echo"Phan tu dau tien: " . $queue->dequeue() ."\n";
echo"Hang doi sau khi dequeue: ";
print_r($queue->display());

echo"Phan tu dau tien hien tai: " . $queue->peek() ."\n";
