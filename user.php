<?php
/**
 * Created by PhpStorm.
 * User: UnderTaker
 * Date: 12-Apr-20
 * Time: 4:32 PM
 */

$conn = mysqli_connect('localhost','root','','test');

$query = 'select *from users';


$result = mysqli_query($conn, $query);

$users = mysqli_fetch_all($result, MYSQLI_ASSOC);

echo json_encode($users);

?>