<?php 
include 'connect.php';
    session_name("admin");
    session_start();
    if(empty($_SESSION['username'])){
        header('location:index.php');
    }
?>
<?php include 'header.php'; ?>


<?php 




?>

<?php include 'footer.php'; ?>