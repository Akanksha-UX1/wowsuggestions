<?php
$post_data = json_decode(file_get_contents('php://input'), true);
$name = "hello-world/".$post_data['filename'].".csv"; 
$data = $post_data['filedata'];
file_put_contents($name, $data);
?>