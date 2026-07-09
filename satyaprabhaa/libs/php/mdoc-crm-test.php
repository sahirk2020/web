<?php

function sendDataToCRM($name, $mobile, $email, $requirement)
{

    // MDOC API URL
    $url = "https://nexus1.maksoftbox.com/MDocBoxAPI/MdocAddEnquiryORTeleCalling/";


    // API Data
    $data = [
        "DataFrom" => "T",
        "ApiKey" => "c6e2cb34-0510-4d5a-9d34-a1101235dd10",
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

    // Convert to URL encoded
    $postFields = http_build_query($data);

    // cURL Init
    $ch = curl_init();

    curl_setopt_array($ch, [
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => $postFields,
        CURLOPT_HTTPHEADER => [
            "Content-Type: application/x-www-form-urlencoded"
        ],
    ]);

    $response = curl_exec($ch);
    $error    = curl_error($ch);

    curl_close($ch);

    // Response handling
    if ($error) {
        echo json_encode([
            "status" => 500,
            "message" => "Curl Error: " . $error
        ]);
    } else {
        $result = json_decode($response, true);

        if ($result['code'] == 200) {
            echo json_encode([
                "status" => 200,
                "message" => "Lead sent to MDOC successfully",
                "mdoc_id" => $result['id']
            ]);
        } else {
            echo json_encode([
                "status" => 400,
                "message" => $result['message']
            ]);
        }
    }
}
