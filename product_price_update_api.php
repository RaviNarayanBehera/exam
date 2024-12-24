<?php 

    header("Access-Control-Allow-Method: PUT");
    header("Content-Type: application/json");
    include("config.php");
    $c1 = new Config();

    if($_SERVER['REQUEST_METHOD'] == 'PUT')
    {
        
        $data = file_get_contents("php://input");
        parse_str($data,$result);
        $id = $result['id'];
        $price = $result['price'];
        
        $res = $c1->updateProduct($id,$price);

        if($res)
        {
            $arr['msg'] = "Data Updated Successfully";
        }
        else
        {
            $arr['msg'] = "Data has not been Updated...!";
        }
    }
    else{
        $arr['error'] = "Only PUT type is allowed";
    }

    echo json_encode($arr);


?>