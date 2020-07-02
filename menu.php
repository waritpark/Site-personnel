<?php 
include 'connect.php';
    session_name("admin");
    session_start();
    if(empty($_SESSION['username'])){
        header('location:index.php');
    }
?>
<?php include 'header.php'; ?>
    <div class="container font-family-roboto">
        <div class="d-flex row justify-content-around align-items-center">
            <div class="barre-h3 background-color-black"></div>
            <h2 class="text-black text-align-center">Modifier une partie</h2>
            <div class="barre-h3 background-color-black"></div>
        </div>
        <div class="justify-content-around row pb-5 mb-2 mt-7">
            <p class=""><a class="border-radius10 p-1 cursor-pointer background-color-blue text-deco-none text-black hover-menu-php" href="portfolio.php">Portfolio</a></p>
            <p class=""><a class="border-radius10 p-1 cursor-pointer background-color-blue text-deco-none text-black hover-menu-php" href="formation.php">Formation</a></p>
            <p class=""><a class="border-radius10 p-1 cursor-pointer background-color-blue text-deco-none text-black hover-menu-php" href="competences.php">Compétences</a></p>
            <p class=""><a class="border-radius10 p-1 cursor-pointer background-color-blue text-deco-none text-black hover-menu-php" href="contact.php">Contact</a></p>
        </div>
    </div>
<?php include 'footer.php'; ?>