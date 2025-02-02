<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login/Register - La flèche d'argent</title>
    </head>
    <?php require_once("style.php") ?>
    <body>
        <header>
            <div class="logo">
                <a href="index.php"><img class="logo-img" src="css/img/logo_cropped(2).png" alt="Logo"></a>
            </div>
        </header>
        <main>
            <div class="articles">
                <!-- Formulaire Login -->
                <article>
                    <h1>Login</h1>
                    <form action="auth.php" method="POST">
                        <input type="email" placeholder="Email" name="email" required>
                        <input type="password" placeholder="Password" name="password" required>
                        <input class="submit-button" type="submit" value="Login">
                    </form>
                </article>
                <div class="break"></div>
                <!-- Formulaire Register -->
                <article>
                    <h1>Register</h1>
                    <form action="register.php" method="POST">
                        <input type="text" placeholder="Nom d'utilisateur" name="username" required>
                        <input type="email" placeholder="Email" name="email" required>
                        <input type="password" placeholder="Password" name="password" required>
                        <input class="submit-button" type="submit" value="Register">
                    </form>
                </article>
            </div>
        </main>
    </body>
</html>
