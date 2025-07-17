<?php

// db 라는 주소를 가지는 mysql에 접속
// 인증 ID : root
// 패스워드 : root
// 선택DB : gsc


// 1번 작업 : DBMS와 연결 설정
$db_conn = new mysqli("db", "root", "root", "gsc");
// mysql -u root -p
// root
// use gsc

// 연결 실패
if($db_conn->errno) {
    // 연결 실패 시 -> 프로그램 종료
    echo $db_conn->error;
    exit;
}

// 2번 작업 : 

// 새로운 레코드를 생성

// 2-1 : SQL문 작성 -> 문자열을 이용하여 실행하고자 하는 SQL문 생성
$std_id = $_POST['std_id'];
$id = $_POST['id'];
$password = $_POST['password'];
$name = $_POST['name'];
$age = $_POST['age'];
$birth = $_POST['birth'];

$sql = "insert into student(std_id, id, password, name, age, birth) 
values('$std_id', '$id', '$password', '$name', $age, '$birth')";

// 2-2 SQL문 전송 Client -> DBMS 서버
// $result 결과 값
// 1) true
// 2) Instance of mysqli_result class
// 3) false
$result = $db_conn->query($sql);
// 여기까지 2번 작업


// 3번 작업 : 반환 값 처리
// if ($result) {
//     echo "<hr><br>레코드 생성 성공<br><hr>";
// } else {
//     echo "<hr><br>레코드 생성 실패<br><hr>";
// }


while($row = $result->fetch_assoc()) {
    // 1번쨰 방법
    echo $row["std_id"] . "<br>";
    echo $row["id"] . "<br>";
    echo $row["password"] . "<br>";
    echo $row["name"] . "<br>";
    echo $row["age"] . "<br>";
    echo $row["birth"] . "<br>";
    echo "<hr><br>";
    // 2번쨰 방법
    foreach ($row as $key => $value) {
        echo $key.": ".$value."<br>";
    }
}

// 4번 작업 : 연결 종료
$db_conn->close();