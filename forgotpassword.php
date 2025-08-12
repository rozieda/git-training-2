<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST['email']);

    // Validasi email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $message = "Format email tidak sah!";
    } else {
        // Simulasi: email pengguna yang sah (boleh ganti dengan database query)
        $registeredEmail = "admin@example.com";

        if ($email === $registeredEmail) {
            // Simulasi: di dunia sebenar, buat token reset dan hantar email
            $resetLink = "https://yourwebsite.com/reset_password.php?token=abcd1234";
            $message = "Link reset password telah dihantar ke: $email<br>Link: $resetLink";
        } else {
            $message = "Email tidak dijumpai!";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Forgot Password</title>
</head>
<body>

<h2>Lupa Kata Laluan</h2>
<form method="post" action="">
    <label for="email">Masukkan Email:</label><br>
    <input type="email" name="email" id="email" required><br><br>
    <input type="submit" value="Hantar">
</form>

<?php if (!empty($message)) echo "<p>$message</p>"; ?>

</body>
</html>
