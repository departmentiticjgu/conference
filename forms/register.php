<!-- filepath: c:\laragon\www\conference\forms\register.php -->
<?php
// Proses form jika data dikirim melalui metode POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $confirm_password = trim($_POST['confirm_password']);

    // Validasi sederhana
    $errors = [];
    if (empty($username)) {
        $errors[] = "Username is required.";
    }
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "A valid email is required.";
    }
    if (empty($password)) {
        $errors[] = "Password is required.";
    }
    if ($password !== $confirm_password) {
        $errors[] = "Passwords do not match.";
    }

    // Jika tidak ada error, simpan data (contoh: ke database)
    if (empty($errors)) {
        // Contoh: Simpan ke database (pastikan koneksi database sudah diatur)
        // $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        // $query = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$hashed_password')";
        // mysqli_query($connection, $query);

        echo "<p>Registration successful!</p>";
    } else {
        // Tampilkan error
        foreach ($errors as $error) {
            echo "<p style='color: red;'>$error</p>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="../assets/css/style.css"> <!-- Sesuaikan path CSS -->
</head>
<body>
    <h1>Register</h1>
    <form action="" method="POST">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        <br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <br>

        <label for="confirm_password">Confirm Password:</label>
        <input type="password" id="confirm_password" name="confirm_password" required>
        <br>

        <button type="submit">Register</button>
    </form>
</body>
</html>