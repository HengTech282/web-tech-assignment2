 <?php
session_start();
include 'settings.php';

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST["username"]);
    $password = trim($_POST["password"]);

    if ($username == "Webber" && $password == "WebTech123") {
        $_SESSION["loggedin"] = true;
        $_SESSION["username"] = $username;
        header("Location: manage.php");
        exit();
    } else {
        $error = "Invalid username or password.";
    }
}
?>

<?php include 'includes/header.inc'; ?>

<h1>Login</h1>

<form method="post" action="login.php">
    <p>
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
    </p>

    <p>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
    </p>

    <p>
        <input type="submit" value="Login">
    </p>
</form>

<?php
if ($error != "") {
    echo "<p>$error</p>";
}
?>

<?php include 'includes/footer.inc'; ?>