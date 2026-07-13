<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'vendor/autoload.php';
require("db.php");
require("user-ip.php");
// require("mdoc-crm.php");

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    echo json_encode(["status" => 400, "msg" => "Invalid request"]);
    exit;
}

// print_r($_POST);
// die();
// Form data
$name = $_POST['name'] ?? ' ';
$mobile = $_POST['mobile'] ?? ' ';
$email = $_POST['email'] ?? ' ';
// UTM Params
$source = $_POST['utm_source'] ?? ' ';
$campaignname = $_POST['utm_campaign_name'] ?? ' ';
$campaignid = $_POST['utm_campaign_id'] ?? ' ';
$campaigncity = $_POST['utm_campaign_city'] ?? ' ';
$gclid = $_POST['gclid'] ?? ' ';
$utm_term = $_POST['utm_term'] ?? ' ';
$utm_medium = $_POST['utm_medium'] ?? ' ';
$utm_adid = $_POST['utm_adid'] ?? ' ';
$utm_device = $_POST['utm_device'] ?? ' ';
$utm_matchtype = $_POST['utm_matchtype'] ?? ' ';
$utm_location = $_POST['utm_location'] ?? ' ';

$user_ip = getUserIP();

// Save data to database

// $query = "INSERT INTO lead_info (name, email, mobile_no, project, requirement, s_date, source, capaignname, capaignid, capaigncity, gclid, utm_term, utm_medium, utm_adid, utm_device, utm_matchtype, utm_location, ip) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

// $stmt = $conn->prepare($query);

// if (!$stmt) {
//     echo json_encode(["status" => 500, "error" => $conn->error]);
//     exit;
// }

// $stmt->bind_param(
//     "ssssssssssssssssss",
//     $name,
//     $email,
//     $mobile,
//     $project,
//     $requirement,
//     $s_schedule,
//     $source,
//     $campaignname,
//     $campaignid,
//     $campaigncity,
//     $gclid,
//     $utm_term,
//     $utm_medium,
//     $utm_adid,
//     $utm_device,
//     $utm_matchtype,
//     $utm_location,
//     $user_ip
// );

// if ($stmt->execute()) {

//     $lead_id = $conn->insert_id;
//     // echo json_encode(["status" => 200, "msg" => "Data save to DB successfully"]);
// } else {
//     echo json_encode([
//         "status" => 500,
//         "error" => $stmt->error
//     ]);
// }

// $stmt->close();
// $conn->close();

// $utm_source = strtolower($source);

// if ($utm_source == "Organic Leads") {
//     $source_details = 'Landing Page - Organic';
// } else if ($utm_source == "google") {
//     $source_details = 'Regular Ad- Google';
// } else if ($utm_source == "facebook") {
//     $source_details = 'Regular Ad- Meta';
// } else {
//     $source_details = 'Landing Page - Organic';
// }

if (
    isset($source) && !empty($source) &&

    isset($campaignname) && !empty($campaignname) &&

    isset($campaignid) && !empty($campaignid) &&

    isset($name) && isset($email) && isset($mobile) &&

    !empty($name) && !empty($mobile)
) {

    // MDOC CRM Calling Function

   // $response = addLeadToCRM($name, $mobile, $email, $source_details);

    // print_r($response);

    // exit();


            // Upload file 

             // File upload folder 

              $uploadDir = 'uploads/'; 

              // Allowed file types 
               $allowTypes = array('pdf', 'doc', 'docx'); 
                 
                $uploadStatus = 1; 
                $uploadedFile = ''; 

                

               if(!empty($_FILES["resume"]["name"])){ 

                // File path config 

                $fileName = basename($_FILES["resume"]["name"]); 

                $targetFilePath = $uploadDir . $fileName; 

                $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION); 

                 

                // Allow certain file formats to upload 

                if(in_array($fileType, $allowTypes)){ 

                    // Upload file to the server 

                    if(move_uploaded_file($_FILES["resume"]["tmp_name"], $targetFilePath)){ 

                        $uploadedFile = $fileName; 

                    }else{ 

                        $uploadStatus = 0; 

                        $response['message'] = 'Sorry, there was an error uploading your file.'; 

                    } 

                }else{ 

                    $uploadStatus = 0; 

                    $response['message'] = 'Sorry, only '.implode('/', $allowTypes).' files are allowed to upload.'; 

                } 

            }  




    // Send mail to cilent

    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->Host = 'smtp.hostinger.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'support@digitaltokri.co.in';
    $mail->Password = 'L9w1];pA1s;';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;
    $mail->setFrom('support@digitaltokri.co.in', 'Satyaprabhaa Current Openings Enquiry');

    $mail->addAddress('sadhan.m@digitaltokri.com');
    //$mail->addBCC('iradigital15@gmail.com');
    $mail->addBCC('supriya.w@digitaltokri.com');
    $mail->addBCC('pooja.s@digitaltokri.com');
    $mail->addBCC('nida.s@digitaltokri.com');


    $mail->isHTML(true);

    $mail->Subject = 'Satyaprabhaa  | Current Openings Enquiry';

    $mail->Body    = '<h2>Enquiry Generated by</h2>

    			<p>Name : ' . $name . '</p>
    			<p>Email : ' . $email . '</p>
    			<p>Contact No. : ' . $mobile . '</p>
    		    <p>Source : ' . $source . '</p>
    			<p>Sub Source : ' . $campaignname . '</p>
    			<p>Client IP : ' . $user_ip . '</p>';





    if ($mail->send()) {

        echo json_encode([
            "status" => 200
        ]);

        // echo 200;
    } else {

        echo $mail->ErrorInfo;

        echo 5001;
    }
} else {

    echo 5004;
}


// MDOC CRM function

