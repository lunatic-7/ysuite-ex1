<!-- Description: Ignore this file, This script seeds the customers table with random data for testing purposes. -->

<?php
include "db.php";

$firstNames = ["John", "Jane", "Michael", "Sarah", "David", "Emily", "Daniel", "Sophia", "Chris", "Emma"];
$lastNames = ["Smith", "Johnson", "Williams", "Brown", "Jones", "Garcia", "Miller", "Davis", "Rodriguez", "Martinez"];
$domains = ["example.com", "test.com", "mail.com", "demo.org"];

for ($i = 1; $i <= 30; $i++) {
    $first = $firstNames[array_rand($firstNames)];
    $last = $lastNames[array_rand($lastNames)];
    $name = "$first $last";
    $email = strtolower($first) . "." . strtolower($last) . "$i@" . $domains[array_rand($domains)];
    $address = "Street " . rand(1, 100) . ", City " . rand(1, 10);
    $notes = rand(0, 1) ? "VIP customer" : "Regular customer";
    $isd = "91";
    $mobile = "98" . rand(10000000, 99999999);
    $email_notify = rand(0, 1);
    $sms_notify = rand(0, 1);

    $stmt = $conn->prepare("INSERT INTO customers (name, address, notes, email, isd_code, mobile, enable_email_notification, enable_sms_notification) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssii", $name, $address, $notes, $email, $isd, $mobile, $email_notify, $sms_notify);
    $stmt->execute();
    echo "Inserted: $name<br>";
}

$conn->close();
?>
