<?php
include "conn.php";
$status="Empty Data";
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $content=$_POST['content'];
    $remark=$_POST['remark'];
    $table=$_POST['table'];
    if($content&&$remark){
         $insert="INSERT INTO $table (`content`,`remark`) VALUES ('$content','$remark');";
        $query=mysqli_query($con,$insert);
        //$status="You Signed up Succesfully. Please Login to Continue.";
        if(mysqli_error($con))
        {$status= mysqli_error($con);
        }
        else{
            $status="POSTED succesfully.";
        }
    }
}

echo $status;
?>