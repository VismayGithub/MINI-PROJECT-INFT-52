<?php
session_start();
header('Content-Type: text/plain');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $comment = $_POST['text'];
    $data = "Name: $name\nEmail: $email\nComment: $comment\n\n";
    $file = fopen('feedback.txt', 'a');
    fwrite($file, $data);
    fclose($file);
    echo 'Data saved successfully.';
  } else {
    echo 'Invalid request.';
  }