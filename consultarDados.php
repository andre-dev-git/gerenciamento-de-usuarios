<?php

require("./conn.php");

$users = $connection->query("SELECT u.*, col.name AS color FROM users AS u
LEFT JOIN user_colors AS uc
ON (uc.user_id = u.id)
LEFT JOIN colors AS col
ON (col.id = uc.color_id)
ORDER BY name");

$dados = array(array());

$i = 0;
foreach($users as $user){
    $dados[$i][0] = $user->color;
    $dados[$i][1] = $user->id;
    $dados[$i][2] = $user->name;
    $dados[$i][3] = $user->email;
    $i++;
}
if(empty($dados)){
    echo json_encode(false);    
    die();
}
echo json_encode($dados);
?>