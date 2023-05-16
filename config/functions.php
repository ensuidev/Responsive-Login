<?php
include_once('consults.php');

if (isset($_POST['submitLogin'])) 
{
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    $connection = new DatabaseProcess($email, $pass);
    $response = $connection->mesageLogin();

    if ($response === "True") {
        header("Location: ../home.php");
    } else {
        echo "  <div>
                        Wrong email or password, please try again!
                    </div>";
    }
}

if (isset($_POST['submitLogout']))
{
    $email = "";
    $pass = "";

    $connection = new DatabaseProcess($email, $pass);
    $response = $connection->mesageLogin();

    if ($response === "False") {
        header("Location: ../index.php");
    }
}
