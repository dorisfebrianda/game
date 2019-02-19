<?php
$data = json_decode(file_get_contents('php://input'), true);
$username = $data['username'];
echo json_encode($data);
?>