<?php
// Connect to the database
$conn = mysqli_connect('localhost', 'ninja123', 'test123', 'ninja_pizza');
// Check connection
if (!$conn) {
    echo 'Connection error: ' . mysqli_connect_error();
}