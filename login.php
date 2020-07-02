<?php 
    session_name("admin");
    session_start();
    include 'connect.php';
    if(empty($_SESSION['username'])){
        header('location:index.php');
    }
        if(isset($_POST['username']) && isset($_POST['password'])) {
            if ($_POST['username']!=="" && $_POST['password']!==""){
                $name = $_POST['username'];
                $salt = "idjisjsiosi@5151@";
                $user_password = md5($_POST['password'].$salt);
                $sql= "select username, password, id FROM t_login where username='$name' AND password='$user_password'";

                $result=$connexion->query($sql);
                $resultrow=$result->fetch(PDO::FETCH_ASSOC);
                // print_r($resultrow);

                if($resultrow['username']!=""){
                    $_SESSION['username'] = $resultrow['username'];
                    $_SESSION['id'] = $resultrow['id'];
                    // echo "je suis co";
                    header('Location: http://localhost/site-perso/menu.php');
                }
                else {
                    header('Location: http://localhost/site-perso/index.php');
                    session_destroy();
                }
            }
            else {
                header('Location: http://localhost/site-perso/index.php');
            }
        }
?>