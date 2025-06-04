<?php
include "db.php";

$name = $_POST['name'];
$address = $_POST['address'];
$notes = $_POST['notes'];
$email = $_POST['email'];
$isd_code = $_POST['isd_code'];
$mobile = $_POST['mobile'];
$email_notify = isset($_POST['email_notify']) ? 1 : 0;
$sms_notify = isset($_POST['sms_notify']) ? 1 : 0;

$stmt = $conn->prepare("INSERT INTO customers (name, address, notes, email, isd_code, mobile, enable_email_notification, enable_sms_notification) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssssii", $name, $address, $notes, $email, $isd_code, $mobile, $email_notify, $sms_notify);
$stmt->execute();
$stmt->close();
$conn->close();
?>
