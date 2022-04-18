<?php
// Headers
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

include_once '../../config/Database.php';
include_once '../../models/messages.php';

// Instantiate DB & connect

$database = new Database();
$db = $database->connect();
// Instantiate blog message object
$message = new Messages($db);
// Blog message query
$result = $message->read();
// Get row count
$num = $result->rowCount();
// Check if any messages
if ($num > 0) {
    // message array
    $messages_arr = array();
    // $messages_arr['data'] = array();

    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        extract($row);

        $message_item = array(
            "id_msg" => $id_msg,
            "message" => $messages,
            "isRead" => $isRead,
            "important" => $important,
            "created_at" => $created_at,
            "updated_at" => $updated_at,
        );

        // Push to "data"
        array_push($messages_arr, $message_item);
        // array_push($messages_arr['data'], $message_item);
    }
    // Turn to JSON & output
    echo json_encode($messages_arr);
} else {
    // No messages
    echo json_encode(
        array('messages' => 'No messages Found')
    );
}
