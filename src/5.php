<?php

$mervury = round((5790 / 30) / 60, 2);
$earth = round((15000 / 30) / 60, 2);
$mars = round((23000 / 30) / 60, 2);

if(isset($_POST['planet'])) {
    $name = $_POST['planet'];
    if($name == "수성") {
        echo"Travel time from Sun to Mercury: ", $mervury, "minutes";
    }elseif($name == "지구") {
        echo"Travel time from Sun to Earth: ", $earth, "minutes";
    }elseif($name == "화성") {
        echo"Travel time from Sun to Mars: ", $mars, "minutes";
    }else{
        return "잘못된 입력입니다.";
    }
}
?>