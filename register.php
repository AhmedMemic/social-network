<?php include "inc/header.php"; ?>

<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $first_name = escape($_POST['first_name']);
    $last_name = escape($_POST['last_name']);
    $username = escape($_POST['username']);
    $email = escape($_POST['email']);
    $password = escape($_POST['password']);
    $password = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (first_name, last_name, username, profile_image, email, password) ";
    $sql .= "VALUES ('$first_name', '$last_name', '$username', 'uploads/default.jpg', '$email', '$password) ";

    confirm(query($sql));
}

?>

<form action="POST">
    <input type="text" name="first_name" placeholder="First Name" required>
    <input type="text" name="last_name" placeholder="Last Name" required>
    <input type="text" name="username" placeholder="Username" required>
    <input type="email" name="email" placeholder="example@gmail.com" required>
    <input type="password" name="password" placeholder="Password" required>
    <input type="password" name="confirm_password" placeholder="Confirm Password" required>
    <input type="submit" name="register_submit" placeholder="Register Now">
</form>

<?php include "inc/footer.php"; ?>