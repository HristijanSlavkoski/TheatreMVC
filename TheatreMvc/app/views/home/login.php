<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://www.phptutorial.net/app/css/style.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"">
        <title>Login</title>
    </head>
    <body>
        <?php echo $data['title'];?>
        <div class="row d-flex justify-content-center">
            <div class="col-md-4">
                <form id="login-form" method="POST" action="<?php  ?>https://localhost/TheatreMVC/TheatreMvc/public/home/login">
                    <input type="text" placeholder="Username *" name="username">
                    <span class="invalidFeedback">
                        <?php echo $data['usernameError']; ?>
                    </span>
                    <input type="password" placeholder="Password *" name="password">
                    <span class="invalidFeedback">
                        <?php echo $data['passwordError']; ?>
                    </span>
                    <button id="submit" type="submit" value="submit">Submit</button>
                </form>    
            </div>
        </div>
    </body>
</html>