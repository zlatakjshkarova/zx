<?php

require "db.php";

if (
isset($_POST['qaz_inp'])&&!empty($_POST['qaz_inp'])&&
isset($_POST['qaz_data'])&&!empty($_POST['qaz_data'])&&
isset($_POST['qaz_time'])&&!empty($_POST['qaz_time'])&&
(isset($_POST['priority'])&&!empty($_POST['priority']))

){
    $qaz_inp=$_POST['qaz_inp'];
    $qaz_data=$_POST['qaz_data'];
    $qaz_time=$_POST['qaz_time'];
    $priority=$_POST['priority'];

    $smts=$conn->prepare('INSERT INTO qaz( qaz_inp, qaz_data, qaz_time, priority) VALUES (?,?,?,?,?)');

    $smts->bind_param("ssss",$qaz_inp, $qaz_data, $qaz_time, $priority);

    if($smts->execute()){
header('Location:index.php');
    }else{
        echo 'gfgthy'.$stms->error;
    }
    $smts->close();
}
    $conn->close();
?>