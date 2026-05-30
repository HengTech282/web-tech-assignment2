<?php
session_start();

if (!isset($_SESSION["loggedin"])) {
    header("Location: login.php");
    exit();
}
?>

<?php include 'includes/header.inc'; ?>

<h1>Management Page</h1>

<p>Welcome, <?php echo $_SESSION["username"]; ?>!</p>

<p>You have successfully logged in.</p>

<h2>EOI Management</h2>

<p>This page will be used to:</p>

<ul>
    <li>View all applications</li>
    <li>Search applications</li>
    <li>Update application status</li>
    <li>Delete applications</li>
</ul>

<form action="logout.php" method="post">
    <input type="submit" value="Logout">
</form>

<?php include 'includes/footer.inc'; ?>