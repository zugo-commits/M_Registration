<?php
/**
 * Created by IntelliJ IDEA.
 * User: ide2sen
 * Date: 2019-12-06
 * Time: 00:06
 */

include "../../src/config.php";

$data = json_decode(file_get_contents("php://input"));

$request = $data->request;

// Fetch All records
if($request == 1){
    $userData = mysqli_query($con,"select * from register order by id desc");

    $response = array();
    while($row = mysqli_fetch_assoc($userData)){
        $response[] = $row;
    }

    echo json_encode($response);
    exit;
}

// Add record
if($request == 2){
    $mobile = $data->mobile;
    $first = $data->first;
    $last = $data->last;
    $birthday = $data->birthday;
    $sex = $data->sex;
    $email = $data->email;

    $userData = mysqli_query($con,"SELECT * FROM register WHERE mobile='".$mobile."' OR email='".$email."'");
    if(mysqli_num_rows($userData) == 0){
        mysqli_query($con,"INSERT INTO register(first_name,last_name,mobile,birthday,sex,email) VALUES('".$first."','".$last."','".$mobile."','".$birthday."','".$sex."','".$email."')");
        echo "Insert successfully";
    }else{
        echo "Username already exists.";
    }

    exit;
}

// Update record
if($request == 3){
    $id = $data->id;
    $name = $data->name;
    $email = $data->email;

    mysqli_query($con,"UPDATE users SET name='".$name."',email='".$email."' WHERE id=".$id);

    echo "Update successfully";
    exit;
}

// Delete record
if($request == 4){
    $id = $data->id;

    mysqli_query($con,"DELETE FROM users WHERE id=".$id);

    echo "Delete successfully";
    exit;
}
