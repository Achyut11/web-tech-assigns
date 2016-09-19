<?php
if(isset($_COOKIE['userinfos'])){

    $id = $_GET['id'];
    $records = json_decode($_COOKIE['userinfos'],true);
    unset($records[$id]);
    setcookie('userinfos',json_encode($records),time()  + 86400*1);

    header('Location:./list.php');
}
?>