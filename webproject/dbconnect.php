<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hotelbookingsystem";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// function filteration($data)
// {
//     foreach ($data as $key => $val) {
//         $data[$key] = trim($val);
//         $data[$key] = stripcslashes($val);
//         $data[$key] = htmlspecialchars($val);
//         $data[$key] = strip_tags($val);

//     }
//     return $data;
// }

// function select($sql, $val, $datatypes)
// {
//     $con = $GLOBALS['conn'];
//     if ($stmt = mysqli_prepare($con, $sql)) {
//         mysqli_stmt_bind_param($stmt, $datatypes, ...$val);
//         if (mysqli_stmt_execute($stmt)) {
//             $res = mysqli_stmt_get_result($stmt);
//             mysqli_stmt_close($stmt);
//             return $res;
//         } else {
//             mysqli_stmt_close($stmt);
//             die("Query execution failed - function select()");
//         }

//     } else {
//          die("Query execution failed - function select()");
//     }
// }
?>