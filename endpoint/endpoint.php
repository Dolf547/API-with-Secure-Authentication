<?php
header('Content-Type: application/json');
$data = array(
    array('username' => 'joaosilva', 'password' => 'NTUyOXwyNzkzfDI4NTB8MjkwN3w1NTg2fDI3OTN8Mjg1MHwyOTA3fDU2NDN8Mjc5M3wyODUwfDI5MDd8'),
    array('username' => 'alexsilva', 'password' => 'MzcwNXwzMTkyfDMxOTJ8MzE5MnwzNzYyfDMyNDl8MzI0OXwzMjQ5fDM4MTl8MjczNnwyNzM2fDI3MzZ8'),
    array('username' => 'brunosilva', 'password' => 'MzgxOXwzODE5fDM4MTl8MzE5MnwzMTkyfDMxOTJ8MzEzNXwzMTM1fDMxMzV8Mzc2MnwzNzYyfDM3NjJ8'),
    array('username' => 'carlossilva', 'password' => 'Mjc5M3wyODUwfDI5MDd8Mjk2NHwzMDIxfDMwNzh8MzEzNXwzMTkyfDMyNDl8'),
    array('username' => 'danielasilva', 'password' => 'MzI0OXwzMjQ5fDMyNDl8MzE5MnwzMTkyfDMxOTJ8MzEzNXwzMTM1fDMxMzV8MzcwNXwzNzA1fDM3MDV8Mzc2MnwzNzYyfDM3NjJ8MzgxOXwzODE5fDM4MTl8Mzg3NnwzODc2fDM4NzZ8MzkzM3wzOTMzfDM5MzN8'),
   
);
echo json_encode($data);
?>
