<?php

require("db.php");

//  database credentials

// $servername = "localhost";

// $username = "u932802978_rgsforteaspire";

// $password = '9ofCxxlvYd|M';

// $dbname = "u932802978_rgsforteaspire";





// Function to check if the email address is unique in the database

function checkEmailUnique($email, $conn)
{

    $email = mysqli_real_escape_string($conn, $email);

    $query = "SELECT * FROM lead_info WHERE email = '$email'";

    $result = mysqli_query($conn, $query);

    return mysqli_num_rows($result) === 0;
}



// Function to check if the mobile number is unique in the database

function checkMobileUnique($mobile, $conn)
{

    $mobile = mysqli_real_escape_string($conn, $mobile);

    $query = "SELECT * FROM lead_info WHERE mobile_no = '$mobile'";

    $result = mysqli_query($conn, $query);

    return mysqli_num_rows($result) === 0;
}



// Main code to handle the AJAX request

if (isset($_POST['email']) && isset($_POST['mobile'])) {

    $email = $_POST['email'];

    $mobile = $_POST['mobile'];



    $conn = mysqli_connect($hostname, $username, $password, $database);



    if (!$conn) {

        die("Connection failed: " . mysqli_connect_error());
    }



    // Check if email is unique

    $isEmailUnique = checkEmailUnique($email, $conn);



    // Check if mobile number is unique

    $isMobileUnique = checkMobileUnique($mobile, $conn);



    mysqli_close($conn);



    $response = array('isEmailUnique' => $isEmailUnique, 'isMobileUnique' => $isMobileUnique);

    header('Content-Type: application/json');

    echo json_encode($response);
}
