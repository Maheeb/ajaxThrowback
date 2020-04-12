<?php
/**
 * Created by PhpStorm.
 * User: UnderTaker
 * Date: 12-Apr-20
 * Time: 2:22 PM
 */
$conn = mysqli_connect('localhost','root','','test');
echo "processing ";

if (isset($_POST['name'])){
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    echo 'POST: Your name is '. $_POST['name'];

    $query = "Insert into users(name) VALUES('$name')";


    if(mysqli_query($conn, $query)){
        echo " User added...";
    }else{

        echo "Error: ".mysqli_error($conn);
    }

}


if (isset($_GET['name'])){

    echo "Get:Your name is ". $_GET['name'];
}


?>