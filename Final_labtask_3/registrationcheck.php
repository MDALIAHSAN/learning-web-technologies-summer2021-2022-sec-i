<?php 

    $json = $_POST['data'];
    sleep(3);
    $student = json_decode($json);
    print_r($student);
    echo $student->username;
    $student = ['username'=>'ali', 'password'=>'123', 'email'=>'ahsanmdali98@gmail.com'];
    echo $json;
?>