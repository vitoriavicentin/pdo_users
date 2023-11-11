<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register User</title>
    <link rel="stylesheet" href="../pdo_users/css/styles.css">
</head>

<body>

    <div class="container">
        <h2>Register User</h2>

        <form action="pdo_register_user.php" method="post" class="user-form">
            <label for="users_name">Name:</label>
            <input type="text" id="users_name" name="users_name" pattern="[A-Za-z]+" maxlength="30" required>

            <label for="users_mail">Mail:</label>
            <input type="email" id="users_mail" name="users_mail" maxlength="30" required>

            <label for="users_password">Password:</label>
            <input type="password" id="users_password" name="users_password" maxlength="30" required>

            <div class="progress-bar">
                <div class="progress" id="progress"></div>
            </div>
            <br>
            <button type="submit" id="registerButton" style="display: none;">Register</button>

            <div id="messageModal" class="modal" style="display: none; z-index: 1000;">
                <div class="modal-content">
                    <span class="close" id="closeButton" onclick="location.reload();">&times;</span>
                    <p id="messageText"></p>
                </div>
            </div>
        </form>

        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <script src="../pdo_users/js/script.js"></script>
    </div>

</body>

</html>