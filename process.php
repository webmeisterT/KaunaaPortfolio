<?php
$con = new mysqli("localhost","root","root","portfolio");

if ($con->connect_error) {
    die("connection failed! ". $con->connect_error);
}

$result = array('error'=>false);

$action = $_SERVER['REQUEST_METHOD'];

// if ($action == 'GET') {
//     $sql=$con->query("SELECT * FROM `contact`");
//     $users = array();
//     while ($row = $sql->fetch_assoc()) {
//         array_push($users, $row);
//     }
//     $result['users'] = $users;
// }

if ($action == 'POST') {
    $data = json_decode(file_get_contents("php://input"), true);
    $name = $data['name'];
    $email = $data['email'];
    $message = $data['message'];
    $sql = $con->query("INSERT INTO `contact` (name,email,message) VALUES ('$name','$email','$message')");
    if ($sql) {
        $result['messg'] = "Thanks for contacting me! Check your Email.";
    } else {
        $result['error'] = true;
        $result['messg'] = "Failed! Please try again!";
    }
}

// if ($action == 'PUT' || $action == 'PATCH') {
//     $data = json_decode(file_get_contents("php://input"), true);
//     $id = $data['id'];
//     $name = $data['name'];
//     $email = $data['email'];
//     $message = $data['message'];
//     $sql  = $con->query("UPDATE user SET name='$name',email='$email',message='$message' where id='$id'");
//     if ($sql) {
//         $result['messg = "Information successfully updated!'];
//     } else {
//         $result['error'] = true;
//         $result['messg'] = "Failed to update!";
//     }
// }

// if ($action == 'DELETE') {
//     $id = $_SERVER['QUERY_STRING'];
//     $sql = $con->query("DELETE FROM contact WHERE id='$id'");
//     if ($sql) {
//         $result['messg'] = "Deleted Successfully!";
//     } else {
//         $result['error'] = true;
//         $result['messg'] = "Not Successful, Please try again later!";
//     }

// }

$con->close();
echo json_encode($result);