<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $data = json_decode(file_get_contents("php://input"), true);
    $email = $data["email"];

    $to = $email;
    $subject = "Order Confirmation";
    $message = "Your order has been successfully booked.";
    $headers = "From: no-reply@glock.com";

    if (mail($to, $subject, $message, $headers)) {
        echo json_encode(["success" => true]);
    } else {
        echo json_encode(["success" => false]);
    }
}
?>
