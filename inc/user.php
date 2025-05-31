
<!-- php code to create new user  and validates we don't have duplicate emails created-->

<?php
require "connection.php";

header('Content-Type: application/json');

// Check if required fields are present
if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Hash password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Check if email exists
    $checkSql = "SELECT id FROM users WHERE email = ?";
    $checkStmt = $conn->prepare($checkSql);
    $checkStmt->bind_param("s", $email);
    $checkStmt->execute();
    $checkStmt->store_result();

    if ($checkStmt->num_rows > 0) {
        echo json_encode(['error' => 'Email already exists']);
        exit;
    }

    $checkStmt->close();

    // Insert new user
    $sql = "INSERT INTO users (email, password) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $email, $hashedPassword);

    if ($stmt->execute()) {
        echo json_encode(['success' => 'Registration completed successfully']);
        
    } else {
        echo json_encode(['error' => 'Error inserting record: ' . $stmt->error]);
    }

    $stmt->close();
    $conn->close();
} else {
    echo json_encode(['error' => 'Please fill in all required fields.']);
}
