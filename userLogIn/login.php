<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        
    </head>
    <body>
        <h1>Login</h1>
        <h2>Enter your information to display your account information.</h2>

        <!--Form to enter credentials-->
        <form method = "post" action = "verifyUser.php">
            <input type = "text" name = "username" placeholder = "Username"/><br />
            <input type = "password" name = "password" placeholder = "Password"/><br />
            <input type="submit" name="submit" value ="Login"/>
        </form>
    </body>
</html>