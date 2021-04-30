<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <meta name="description" content="The Wall - Final">
        <meta name="author" content="Karen Marie E. Igcasan">
        <link rel="stylesheet" href="assets/css/home_style.css"/>
    </head>
    <body>
        <div class="error"><?=$this->session->flashdata('input_errors');?></div>

        <h1>Login</h1>
        <form action="signin/validate" method="POST">            
            <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" />
            Email address: <input type="text" name="emails">
            Password: <input type="password" name="password">
        
            <input type="submit" value="Signin">
            <a href="register">Don't have an account? Register</a>
        </form>
        
    </body>
</html>

