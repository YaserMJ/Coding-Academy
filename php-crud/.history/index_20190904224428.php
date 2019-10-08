<?php
session_start();
include("db.php");
?>
<?php
$msg = "";
if (isset($_POST['submitBtnLogin'])) {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    if ($username != "" && $password != "") {
        try {
            $query = "select * from `user_login` where `username`=:username and `password`=:password";
            $stmt = $db->prepare($query);
            $stmt->bindParam('username', $username, PDO::PARAM_STR);
            $stmt->bindValue('password', $password, PDO::PARAM_STR);
            $stmt->execute();
            $count = $stmt->rowCount();
            $row   = $stmt->fetch(PDO::FETCH_ASSOC);
            if ($count == 1 && !empty($row)) {
                /******************** Your code ***********************/
                $_SESSION['sess_user_id']   = $row['uid'];
                $_SESSION['sess_user_name'] = $row['username'];
                $_SESSION['sess_name'] = $row['name'];
            } else {
                $msg = "Invalid username and password!";
            }
        } catch (PDOException $e) {
            echo "Error : " . $e->getMessage();
        }
    } else {
        $msg = "Both fields are required!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

</body>

</html>

</form>