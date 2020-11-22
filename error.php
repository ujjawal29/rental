<?php
$email = $_POST['email'];
$pass  = $_POST['pass'];
$qry   = mysql_query("SELECT * FROM users WHERE email='$email'", $con);
if(!$qry) {
    die("Query Failed: ". mysql_error());
} else {

    $row=mysql_fetch_array($qry);

    if ($email==$row['email']) {
        if($email=='' || $pass=='') {
            header("Location:login.php?id=Some fields are empty");
        } else if($email==$row['email'] && $pass==$row['password']) {
            header("Location: welcome.php?id=$email");
        } else {
            header("Location:login.php?id=username already taken or your password is incorrect. Please try again");
        }
    } else {
        mysql_query("alter table login auto_increment = 1;");
        $qry_name=mysql_query("INSERT INTO login(user,password) VALUES('$uname','$pass')");
        header("Location: welcome.php?id=$uname");
    }
}
