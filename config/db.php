<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "person";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

function fetchUsers($conn)
{
    $sql = "SELECT * FROM users";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // while ($row = $result->fetch_assoc()) {
        //     echo "userId: " . $row["userId"] . "<br>";
        //     echo "username: " . $row["username"] . "<br>";
        //     echo "email: " . $row["email"] . "<br>";
        //     echo "password: " . $row["password"] . "<br>";
        // }
        return $result;
    }
}

function registerUser($conn, $username, $email, $password)
{
    $sql = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";

    if ($conn->prepare($sql)) {
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sss", $username, $email, $password);

        if ($stmt->execute()) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $conn->error;
        }

        $stmt->close();
    } else {
        echo "Prepare failed: (" . $conn->errno . ") " . $conn->error;
    }
}

function verifyAccount($conn, $email, $password)
{
    // Prepare the SQL statement to prevent SQL injection
    $sql = "SELECT password FROM users WHERE email = ?";
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        // Bind the email parameter to the query
        $stmt->bind_param("s", $email);

        // Execute the query
        $stmt->execute();

        // Get the result
        $result = $stmt->get_result();

        if ($result->num_rows === 1) {
            // Fetch the user data
            $row = $result->fetch_assoc();
            $storedPassword = $row['password'];

            // Directly compare the passwords
            if ($password === $storedPassword) {
                return true; // Account verified
            } else {
                return false; // Incorrect password
            }
        } else {
            return false; // Email not found
        }
    } else {
        // Query preparation failed
        die("Database error: " . $conn->error);
    }
}
