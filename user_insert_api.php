<?php 

    header("Access-Control-Allow-Method: POST");
    header("Content-Type: application/json");
    include("config.php");
    $c1 = new Config();

    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];

        $res = $c1->insert($name,$email,$phone);

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