<?php 

    header("Access-Control-Allow-Method: POST");
    header("Content-Type: application/json");
    include("config.php");
    $c1 = new Config();

    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $order_date = $_POST['order_date'];
        $status = $_POST['status'];

        $res = $c1->insert_order($order_date,$status);

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