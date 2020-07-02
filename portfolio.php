<?php 
include 'connect.php';
    session_name("admin");
    session_start();
    if(empty($_SESSION['username'])){
        header('location:index.php');
    }
?>

<?php include 'header.php'; ?>

<div class='container font-family-roboto'>
    <?php 
    include 'connect.php';
    $sql="SELECT * FROM t_portfolio ";
    $req = $connexion->query($sql);
    echo "<div class='d-flex justify-content-around row'>";
        while ($row=$req->fetch()){
            echo "<div class='card-portfolio-php border-blue border-radius10 pt-2 mt-4'>";
                echo "<p class='text-align-center'>".$row['title']." </p>";
                echo "<p class='text-align-center'>".$row['content']." </P>";
                echo "<img class='mx-auto mb-2 d-flex' width='250' height='180' src='img/".$row['pf_image']."' id ='".$row['id']."' />";
                echo "<div class='d-flex justify-content-around'>";
                    echo "<a class='d-flex justify-content-center mb-2 border-radius10 p-2 cursor-pointer border-blue text-deco-none text-black' href=modif_portfolio.php?id_portfolio=".$row['id'].">modifier</a>";
                    echo "<a class='d-flex justify-content-center mb-2 border-radius10 p-2 cursor-pointer border-blue text-deco-none text-black' href=supprimer_portfolio.php?id_portfolio2=".$row['id'].">Supprimer</a>";
                echo "</div>";
            echo "</div>";
        }
    echo "</div>";
    ?>
    <div class="d-flex justify-content-center mb-2 mt-5">Ajouter du contenu dans la section Portfolio :</div>
    <form enctype="multipart/form-data" action="" method="post" class="mx-auto w-40 d-flex justify-content-center flex-column mb-4" >
        <label for="ajout_title" class="d-flex justify-content-center">Titre</label>
        <input type="text" name="ajout_title" class="mb-2"/>
        <label for="ajout_content" class="d-flex justify-content-center">Contenu</label>
        <input type="text" name="ajout_content" class="mb-2"/>
        <label for="ajout_img" class="d-flex justify-content-center">Image</label>
        <input type="file" name="file" class="mb-2"/>
        <input type="submit" name="ajout_form" class=""/>
        <?php 
        include ('connect.php');
        if (isset($_POST['ajout_title'])){
            $title = $_POST['ajout_title'];
            $content = $_POST['ajout_content'];
            $img = $_FILES['file']['name'];
            $sql2= " INSERT INTO t_portfolio (title, content, pf_image) VALUES ( '$title','$content', '$img' ) ";
            $result=$connexion->query($sql2);
        }
        if (isset($_POST['ajout_title'])){
            $file_name = $_FILES['file']['name'];
            $file_type = $_FILES['file']['type'];
            $file_size = $_FILES['file']['size'];
            $file_tem_loc = $_FILES['file']['tmp_name'];
            echo $file_store = "img/".$file_name;

            if (move_uploaded_file($file_tem_loc, $file_store)){
                echo "<div class='mt-4 d-flex justify-content-center'>";
                echo "Fichier envoyé avec succès !";
                echo "</div>";
            }
        }
        ?>
    </form>
</div>
<?php include 'footer.php'; ?>