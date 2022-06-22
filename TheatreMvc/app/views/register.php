<!DOCTYPE html>
<html lang="en">
    <?php
        require APPROOT . '/views/includes/head.php';
    ?>    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://www.phptutorial.net/app/css/style.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
    </head>
    <body>
        <?php
            require APPROOT . '/views/includes/navigation.php';
        ?>
        <div class="row d-flex justify-content-center">
            <div class="col-md-4">
                <br>
                <h1>Ве молиме внесете ги вашите податоци</h1>
                <hr/>
                <form id="register-form" method="POST" action="<?php  ?>https://localhost/TheatreMVC/TheatreMvc/public/home/register">
                    <input type="text" placeholder="Username *" name="username">
                    <input type="email" placeholder="Email *" name="email">
                    <input type="password" placeholder="Password *" name="password">
                    <input type="password" placeholder="Confirm Password *" name="confirmPassword">
                    <a href="../home/login">Веќе сте корисник?Најавете се</a>
                    <button id="submit" type="submit" value="submit">Регистрирај се</button> 
                    <span class="invalidFeedback">
                        <?php echo $data['usernameError']; ?>
                    </span>
                    <span class="invalidFeedback">
                        <?php echo $data['emailError']; ?>
                    </span>
                    <span class="invalidFeedback">
                        <?php echo $data['passwordError']; ?>
                    </span>
                    <span class="invalidFeedback">
                        <?php echo $data['confirmPasswordError']; ?>
                    </span>
                </form>
            </div>
        </div>
    </body>
</html>