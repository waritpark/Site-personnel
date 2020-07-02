<?php 
    session_name("admin");
    session_start();
?>
<?php include 'header.php'; ?>
    <div class="m-0 p-0">
        <div class="container">
            <h2 class="d-flex justify-content-center font-family-julius">Connexion</h2>
            <div class="d-flex justify-content-center mb-5">
                <form action="login.php" method="post" autocomplete="off" class="mb-5 font-family-roboto">
                    <label>Nom de compte :</label>
                    <input id="name" name="username" placeholder=" nom" type="text" class="mr-1">
                    <label>Mot de passe :</label>
                    <input id="password" name="password" placeholder=" mot de passe" type="password">
                    <input name="submit" type="submit" value="Connexion" class="button1 text-white">
                </form>
            </div>   
        </div>
    </div>
<?php include 'footer.php'; ?>
