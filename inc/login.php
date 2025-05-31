
 <!-- php code for login page validation -->

<?php
require "connection.php";
header('Content-Type: application/json');

if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    $sql = "SELECT id, password FROM users WHERE email = ?";
    $stmt = $conn->prepare($sql);

    if (!$stmt) {
        echo json_encode(['error' => 'Database error: ' . $conn->error]);
        exit;
    }

    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows === 1) {
        $stmt->bind_result($id, $hashedPassword);
        $stmt->fetch();

        if (password_verify($password, $hashedPassword)) {
            echo json_encode(['success' => 'Login successful', 'user_id' => $id]);
        } else {
            echo json_encode(['error' => 'Invalid password']);
        }
    } else {
        echo json_encode(['error' => 'Email not found']);
    }

    $stmt->close();
    $conn->close();
} else {
    echo json_encode(['error' => 'Please fill in all required fields.']);
}
