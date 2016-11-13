<?php

include './database.php' ;

if(isset($_GET['id'])) {
        $id=$_GET['id'];
        $sqlquery = "DELETE FROM persons WHERE id=".$id;
        mysqli_query($connection,$sqlquery);
        
        // $id = $_GET['id'];
        // $records = json_decode($_COOKIE['userinfos'],true);
        // unset($records[$id]);
        // setcookie('userinfos',json_encode($records),time()  + 86400*1);

        header('Location:./list.php');
}
?>