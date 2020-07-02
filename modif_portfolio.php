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
include ('connect.php');

$sql="SELECT * FROM t_portfolio WHERE id='".$_GET['id_portfolio']."' ";
$req = $connexion->query($sql);
    echo "<form action='' method='post' class='d-flex mx-auto flex-column w-40 mb-2'>";
while ($row=$req->fetch()){
    echo "<input type='text' class='text-align-center mb-2' name='title_pf' value='".$row['title']."' />";
    echo "<input type='text' class='text-align-center mb-2' name='content_pf' value='".$row['content']."' />";
    echo "<img class='mx-auto mb-2' width='250' height='180' src='img/".$row['pf_image']."' />";
}
    echo "<input type='submit' name='modif_pf' value='modifier'>";
    echo "</form>";



if(isset($_POST['title_pf'])){
	$update="UPDATE t_portfolio SET title = :title, content = :content WHERE id= :id";
	$stmt = $connexion->prepare($update);
	$stmt->execute(array(
        'title'=>$_POST['title_pf'],
        'content'=>$_POST['content_pf'],
        'id'=>$_GET['id_portfolio']
    ));
    // header ('location:modif_portfolio.php?id_portfolio='.$_GET['id_portfolio'].'');
    echo "<p class='container font-family-roboto d-flex justify-content-center mb-4'> Modification enregistré ! </p>";
}

?>
<?php include 'footer.php'; ?>

