<?php

//Stack (ngăn xếp) là cấu trúc dữ liệu kiểu LIFO (Last In, First Out) — tức là phần tử được đưa vào sau cùng sẽ được lấy ra đầu tiên.

//Các tao tác:
//| Tên hàm     | Mô tả                                   |
//| ----------- | --------------------------------------- |
//| `push()`    | Thêm phần tử vào **đỉnh stack**         |
//| `pop()`     | Lấy phần tử **ở đỉnh stack** và xóa nó  |
//| `peek()`    | Xem phần tử **ở đỉnh stack**, không xóa |
//| `isEmpty()` | Kiểm tra stack có rỗng không            |


class Stack
{
    private $items = [];

    // Thêm phần tử vào đỉnh stack
    public function push($item)
    {
        array_push($this->items, $item);
    }

    // Lấy và xóa phần tử ở đỉnh stack
    public function pop()
    {
        if ($this->isEmpty()) {
            return null;
        }
        return array_pop($this->items);
    }

    // Xem phần tử ở đỉnh stack (không xóa)
    public function peek()
    {
        return $this->isEmpty() ? null : end($this->items);
    }

    // Kiểm tra stack có rỗng không
    public function isEmpty()
    {
        return empty($this->items);
    }

    // Hiển thị toàn bộ stack
    public function display()
    {
        return $this->items;
    }
}

// 🧪 Ví dụ sử dụng
$stack = new Stack();
$stack->push("A");
$stack->push("B");
$stack->push("C");

echo "Stack hiện tại: ";
print_r($stack->display());

echo "Phần tử đỉnh (pop): " . $stack->pop() . "\n";

echo "Stack sau khi pop: ";
print_r($stack->display());

echo "Phần tử đỉnh hiện tại (peek): " . $stack->peek() . "\n";
