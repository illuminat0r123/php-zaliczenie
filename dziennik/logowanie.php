<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dziennik Elektroniczny</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
function Login(string $email, string $password) {
    $db = new mysqli('localhost', 'root', '', 'dziennik');
    $sql = "SELECT * FROM user WHERE email = ? LIMIT 1";
    $q = $db->prepare($sql);
    $q->bind_param("s", "$email");
    $q->execute();
    $result = $q->get_result();
    $row = $result->fetch_assoc();
    $id = $row['id'];
    $passwordHash = $row['password'];
    if(password_verify($password, $passwordHash)) {
        $user = new User($id, $email);
        echo "Pomyślnie zalogowano do dziennika";
        
        $_SESSION['user'] = $user;
        header("Location: index.html"); // Przekierowanie do index.html
        exit(); // Upewnienie się, że nic nie jest wykonywane po przekierowaniu
    } else {
        return false;
        echo "Nie udalo sie zalogowac";
    }
}


?>
<div class="container">
        
        <div class="row mt-5">
            <div class="col-6 offset-3">
                <div id="header">
                <h2 class="text-center">Zaloguj się</h2>
                </div>
                


<form action="logowanie.php" method="post">
<label for="emailInput">Email:</label>
<input type="email" name="email" id="emailInput" >
<label for="passwordInput">Haslo:</label>
<input type="password" name="password" id="passwordInput" >
<input type="submit" value="Zaloguj" >
<input type="hidden" name="action" value="login">

</form>
</div>
        </div>
        
    </div>
    <script>
//function Login() {
    // Po zalogowaniu przekieruj na index.html
    //window.location.href = "index.html";
//}
</script>
</body>
</html>