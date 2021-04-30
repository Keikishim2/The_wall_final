<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <meta name="description" content="The Wall - Final">
        <meta name="author" content="Karen Marie E. Igcasan">
        <link rel="stylesheet" href="assets/css/wall_style.css"/>
    </head>
    <body>
        <div class="error"><?=$this->session->flashdata('input_errors');?></div>

        <h1>Register</h1>

        <form action="register/validate" method="POST">
            First name: <input type="text" name="first_name">
            Last name: <input type="text" name="last_name">
            Email address: <input type="text" name="email">
            Password: <input type="password" name="password">
            Confirm Password: <input type="password" name="confirm_password"><br>
            
            <input type="submit" value="Register">
            <a href="signin">Already have an account? Log in</a>
        </form>

        
    </body>
</html>