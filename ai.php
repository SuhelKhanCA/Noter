<?php
function callAIBackend($url, $data) {
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
    $response = curl_exec($ch);
    curl_close($ch);
    return json_decode($response, true);
}

// For Summarization
$text = $_POST[""];
$url = "http://localhost:5000/summarize";
$response = callAIBackend($url, ['text' => $text]);
echo "Summary: " . $response['summary'];

// For Note Generation
$topic = $_POST["note_title"];
$url = "http://localhost:5000/generate";
$response = callAIBackend($url, ['topic' => $topic]);
echo "Generated Note: " . $response['generated_text'];

?>