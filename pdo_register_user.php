<?php
include("pdo_connection.php");

$message = "";
$success = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["users_name"];
    $mail = $_POST["users_mail"];
    $password = password_hash($_POST["users_password"], PASSWORD_DEFAULT);

    $checkQuery = "SELECT * FROM users WHERE users_mail = ?";
    $checkStmt = $pdoConnection->prepare($checkQuery);
    $checkStmt->bindParam(1, $mail, PDO::PARAM_STR);
    $checkStmt->execute();

    if ($checkStmt->rowCount() > 0) {
        $message = "Error: There is already a user registered with this email.";
    } else {
        $insertQuery = "INSERT INTO users (users_name, users_mail, users_password) VALUES (?, ?, ?)";
        $insertStmt = $pdoConnection->prepare($insertQuery);
        $insertStmt->bindParam(1, $name, PDO::PARAM_STR);
        $insertStmt->bindParam(2, $mail, PDO::PARAM_STR);
        $insertStmt->bindParam(3, $password, PDO::PARAM_STR);

        if ($insertStmt->execute()) {
            $message = "Registration completed successfully!";
            $success = true;
        } else {
            $message = "Error registering user: " . $insertStmt->errorInfo()[2];
        }
    }

    $checkStmt = null;
    $insertStmt = null;
}

echo json_encode(["message" => $message, "success" => $success]);
?>
