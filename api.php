<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $user_message = $_POST['user_message'];


    $response = shell_exec('python3 main.py "' . escapeshellarg($user_message) . '"');


    if ($response !== null) {
        header('Content-Type: application/json; charset=utf-8'); 
        echo $response;
    } else {

        echo json_encode(array('error' => 'Unable to get response from server'));
    }
} else {

    echo "Method not allowed";
}
?>
