<?php 

    header("Access-Control-Allow-Method: POST");
    header("Content-Type: application/json");
    include("config.php");
    $c1 = new Config();

    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $product_name = $_POST['product_name'];
        $price = $_POST['price'];

        $res = $c1->insert_product($product_name,$price);

        if($res)
        {
            $arr['msg'] = "Data Inserted Successfully";
        }
        else
        {
            $arr['msg'] = "Oopps...Data Not Inserted...!";
        }
    }
    else{
        $arr['error'] = "Only POST type is allowed";
    }

    echo json_encode($arr);


?>