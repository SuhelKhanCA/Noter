<?php
// OpenAI API credentials
$apiKey = ''; // your_openai_api_key
$apiUrl = 'https://api.openai.com/v1/chat/completions';

// User note content
$userNote = "Your long note content goes here...";

// Request payload
$data = array(
    "model" => "gpt-3.5-turbo",  // or "gpt-4" if available
    "messages" => array(
        array("role" => "system", "content" => "Summarize the following text."),
        array("role" => "user", "content" => $userNote)
    ),
    "temperature" => 0.7
);

// Send API request
$ch = curl_init($apiUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Authorization: Bearer ' . $apiKey,
    'Content-Type: application/json'
));
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));

// API response
$response = curl_exec($ch);
curl_close($ch);

// Parse and display summary
$responseData = json_decode($response, true);
$summary = $responseData['choices'][0]['message']['content'];
echo "Summary: " . $summary;
?>
