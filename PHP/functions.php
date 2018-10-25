<?php 

$conn=null;
function Database(){
        
        
        $hostname="localhost";
        $username="root";
        $password="root";
        $DBname="IMDB";

        global $conn;
        
        $conn = mysqli_connect($hostname,$username,$password,$DBname) or die (mysqli_error());
        mysqli_select_db($conn,$DBname) or die(mysql_error());
        
    }

function Query($query){

    Database();
    // echo "hellllo";
    global $conn;
    $result=mysqli_query($conn,$query);
    // echo $result;
    if(!$result){
        echo '<div class="alert alert-danger">Query Execution failed<br> MySql Error'.mysql_error($link).'</div>';
        die();
    }
    mysqli_close($conn);
    return $result;
}
?>