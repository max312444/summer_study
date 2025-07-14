<?php
if (isset($_COOKIE['name'])) {
    $name = htmlspecialchars($_COOKIE['name']);
    $latte = htmlspecialchars($_COOKIE['latte']);
    $ice = htmlspecialchars($_COOKIE['ice']);
    echo "{$name}님의 주문 내용<br>";
    echo "라떼 : {$latte}잔<br>";
    echo "아이스 아메리카노 : {$ice}잔<br>";
    echo '<a href="edit_order.php">주문 수정</a><br>';
    echo '<a href="delete_cookie2.php">주문 초기화</a>';

};

if(!isset($_COOKIE['name'])) {
    echo "<form method='post' action='set_cookie2.php'>
            이름 : <input type='text' name='name'><br>
            라떼 수량 : <input type='text' name='latte'><br>
            아이스 아메리카노 수량 : <input type='text' name='ice'><br>
            <button type='submit'>주문하기</button>
            </form>";
}