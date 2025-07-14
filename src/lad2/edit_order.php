<?php

if(isset($_COOKIE['name'])) {
echo "<form method='post' action='set_cookie2.php'>
        이름 : <input type='text' name='name'><br>
        라떼 수량 : <input type='text' name='latte'><br>
        아이스 아메리카노 수량 : <input type='text' name='ice'><br>
        <button type='submit' href='update_cookie.php'>수정 완료</button>
        </form>";

echo '<a href="index2.php">뒤로가기</a>';
}