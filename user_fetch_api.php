<?php

header("Access-Control-Allow-Method: GET");
header("Content-Type: application/json");
include("config.php");
$c1 = new Config();

if($_SERVER['REQUEST_METHOD'] == 'GET')
{
    $res = $c1->fetch();
    $user = [];
    if($res)
    {
        while($data = mysqli_fetch_assoc($res))
        {
            array_push($user, $data);
            $arr = $user;
        }
        
    }

    else
    {
        $arr['err'] = "Oopps...Data not Fetched...!";
    }
}

else
{
    $arr['err'] = "Only GET type is allowed";
}


echo json_encode($arr);