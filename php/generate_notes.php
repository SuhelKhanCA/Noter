<?php
// OpenAI API credentials
$apiKey = ''; // your_openai_api_key
$apiUrl = 'https://api.openai.com/v1/chat/completions';

// User input topic
$topic = $_POST['topic'];

// Request payload
$data = array(
    "model" => "gpt-3.5-turbo",
    "messages" => array(
        array("role" => "system", "content" => "Write a detailed note on the given topic."),
        array("role" => "user", "content" => $topic)
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

// Parse and display generated note
$responseData = json_decode($response, true);
$generatedNote = $responseData['choices'][0]['message']['content'];
echo "Generated Note: " . $generatedNote;
?>
