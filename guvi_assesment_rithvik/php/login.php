<?php
require '../vendor/autoload.php';
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'guvidb';
$conn = mysqli_connect($host, $user, $password, $dbname);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["email"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM users WHERE email = '$username' and password = '$password'";
    $result = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($result);
    echo $count;
    $t0 = 0;
    $t1 = 0;
    if ($count == 1) {
        $redis = new Predis\Client();
      
            $temp = 
        // }
        $row=$result->fetch_assoc();
        $redis->set('email', $row['email']);
        $res = [
            "msg"=>"success",
            "status"=>"200",
            "user"=>$row

        ];
        // }

        echo json_encode($res);
    } else {
        echo "Invalid username or password";
    }
}

mysqli_close($conn);
exit;
?>