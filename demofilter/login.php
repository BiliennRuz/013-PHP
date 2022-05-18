<?php 
    require_once "traitement.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Connexion</title>
</head>
<body>
    <section>

        <hgroup>
            <h2>Connexion</h2>
        </hgroup>

        <form method = "post" class = "log-form">

            <p> 

                <?php if(isset($erreur)): ?>
                    <?=$erreur?>
                <?php endif; ?>    
            
            </p>

            <div class="group log-input">
                <input type="text" name = "email" placeholder = "exemple@gmail.com">
            </div>

            <div class="group log-input">
                <input type="password"  name = "password"  placeholder = "Password">
            </div>



            <br><br>

            <div class="container-log-btn">
            <button type="submit" name = "submit"  value="ok" class="log-form-btn">
                <span>Login</span>
            </button>
            </div>

        </form>

        

    </section>    
</body>
</html>