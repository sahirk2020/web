<?php

function sendDataToCRM($name, $mobile, $email, $requirement, $source_details, $apikey)
{

    // MDOC API URL
    $endpointUrl = "https://satyaprabhaa.mymdoc.io/MDocBoxAPI/MdocAddEnquiryORTeleCalling/";


    // API Data
    $data = [
        "DataFrom" => "T",
        "ApiKey" => $apikey,
        "EnquiryDate" => date("Y-m-d"),

        "Salutation" => "",
        "FirstName" => $name,
        "MiddleName" => "",
        "LastName"  => "",

        "Email" => $email,
        "MobileNo" => $mobile,
        "Preferences" => $requirement,

        "Source" => "Digitals",
        "SourceDetail" => "Google Ad",

        'AgeRange' => '',
        'CurrentLivingPlace' => '',
        'NativePlace' => '',
        'Industry' => '',
        'CompanyName' => '',
        'Budget' => '',
        'PossessionReq' => '',
        'BuyingPurpose' => '',
        'BookingPlanWithin' => '',
        'PreferredBankForLoan' => '',
        'Country' => '',
        'State' => '',
        'City' => '',
        'PinCode' => '',
        'DOB' => '',
        'PanNo' => '',

    ];

     // Initialize cURL session
    $ch = curl_init($endpointUrl);

    // Set cURL options
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Content-Type: application/x-www-form-urlencoded',
    ]);

    // Execute the cURL request
    $response = curl_exec($ch);

    // Check for errors
    if (curl_errno($ch)) {
        echo 'Error: ' . curl_error($ch);
    } else {
        // Decode the JSON response
        $responseData = json_decode($response, true);
    }

    // Close cURL session
    curl_close($ch);

      //print_r($responseData);

      return $responseData;
}




   
    
   

   