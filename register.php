<?php

require "vendor/autoload.php";

session_start();
// 2. Why do you think the session variable assignments are wrapped inside an if-else and try-catch statements?
//// 2. Why do you think the session variable assignments are wrapped inside an if-else and try-catch statements?
// The SESSION in this particular program uses the if else and try catch as a requirement for the user to input the proper format,  if the user didnt input the format that is requiured
// the program will prompt the user to do so, due to the if else. try catch is mostly use in erro handling given the format.

try {
    if (isset($_POST['fullname'])) {
        $_SESSION['user_fullname'] = $_POST['fullname'];
        $_SESSION['user_email'] = $_POST['email'];
        $_SESSION['user_birthdate'] = $_POST['birthdate'];

        header('Location: quiz.php');
        exit;
    } else {
        throw new Exception('Missing the basic information.');
    }
} catch (Exception $e) {
    echo '<h1>An error occurred:</h1>';
    echo '<p>' . $e->getMessage() . '</p>';
}
