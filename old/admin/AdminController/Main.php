<?php

require_once("./../../db_connect.php");
session_start();

if(isset($_POST['req_type']) && $_POST['req_type']=='product-upload-from-submit'){

    $file_name= $_FILES['product_image']['name'];
    $file_temp_name = $_FILES['product_image']['tmp_name'];
    $file_path = 'product-images/'.$file_name;
    if(move_uploaded_file($file_temp_name, './../../product-images/'.$file_name)){
        $sql = mysqli_query($conn,'INSERT INTO `tb_products`(`product_name`,`product_dec`,`product_price`,`product_img`) VALUES("'.$_POST['product_name'].'","'.$_POST['product_description'].'","'.$_POST['product_price'].'","'.$file_path.'")');
        if($sql){
            SuccessStatus();
        }else{
            FailedStatus();
        }
    }else{
        FailedStatus();
    }

}

function SuccessStatus(){
    $result = [
        "status" => "200",
        "message"=> "Successfully product added."
    ];

    echo json_encode($result);
}

function FailedStatus(){
    $result = [
        "status" => "404",
        "message"=> "Failed to product adding."
    ];

    echo json_encode($result);
}

/*

(
    [product_name] => dfsf
    [req_type] => product-upload-from-submit
    [product_price] => 33
    [product_description] => afafaff
)
Array
(
    [product_image] => Array
        (
            [name] => Screenshot from 2024-01-18 23-52-45.png
            [full_path] => Screenshot from 2024-01-18 23-52-45.png
            [type] => image/png
            [tmp_name] => /tmp/php0dapRa
            [error] => 0
            [size] => 21601
        )

)

*/