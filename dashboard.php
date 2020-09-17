<?php require 'action.php'; 

/*
<?php
$sth= $mag->query('SELECT * FROM category');
    while ($row = $sth->fetch()){
    ?>
        <option value=" <?= $row['id_cat'];?>"><?= $row['name_cat'];?></option>
    <?php 

    }    
?>


*/

?>



<!DOCTYPE html>
<html lang="Ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap-rtl.min.css">
    

    <!-- CSS -->
    <link rel="stylesheet" href="style.css">
    <title>Dashboard</title>
</head>
<body>
<header>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class='container'>
        <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown"
            aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">
                    <?php if (isset($_SESSION['username']))
                    { 
                        echo ucfirst($_SESSION['username']);
                    }
                    ?></a>
                </li>

            </ul>
        </div>
    </div>
</nav>
</header>
<div class="row">
<div class="col-lg-3 cl">
            <a href="newpost.php"><h5>New post</h5></a><hr>
            <a href="managepost.php"><h5>Manage posts</h5></a><hr>
            <a href=""><h5>Manage topics</h5></a><hr>
            <a href="../login.php"><h5>Logout</h5></a><hr>
        </div>

        <div class="col-lg-9 cl">
            <div class="container">
                <h5>Create a new post</h5><br><br>
                <!-----------php/alert---------------->

                <?php if(isset($_SESSION['message'])){ ;?>
                    <div class="f1-m-2 alert alert-<?= $_SESSION['msg_type'];?>  alert-dismissible text-center">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <b><?= $_SESSION['message'] ; ?></b>
                    </div>
                <?php  } unset($_SESSION['message']) ; ?>
                <!-----------php---------------------->

                <form action="" method='POST' enctype="multipart/form-data">
                <pre>
                    <input type="hidden" name='id' value='<?= $id; ?>'> 
                    <label for="title">عنوان المقالة:</label>
                    <!---<textarea name="title" id="title" cols="100" rows="2" value='<?= $title; ?>' required></textarea><br><br>--->
                    <input class='input1' type="text" name='title' id='title' value='<?= $title; ?>' required><br>
                    <label for="text">نص المقالة:</label>
                    <!---<textarea name="text" id="text" cols="100" rows="10" value='<?= $text; ?>' required></textarea><br><br>--->
                    <input class='input2' type="text" name='text' id='text' value='<?= $text; ?>' required><br>
                    <label for="cat">التصنيف :</label>
                    <select name="cat" id="cat">
                    <option value=" ">-- اختر احدى التصنيفات --</option>
                    <!--------php --------------------->
                    
                    <?php  
                    $mag = new mysqli('localhost','root','','mag');
                    $mag->query("SET NAMES utf8");
                    $mag->query("SET CHARACTER SET utf8");
                    if($mag->connect_error){
                        die("connection failed:".$mag->connect_error);
                    }
                    
                    // get category from db
                    function categoryTree($id_parent= 0,$sub_mark =''){
                        global $mag;
                        $query = $mag->query("SELECT * FROM categories  WHERE id_parent = $id_parent ORDER BY name_cat DESC "  );
                        
                        if ($query->num_rows > 0){
                            while ($row = $query-> fetch_assoc()){
                                
                                echo '<option value="'.$row['id_cat'].'">'.$sub_mark.$row['name_cat'].'</option>';
                            
                                categoryTree($row['id_cat'],$sub_mark.'---');
                            }
                        
                        }
                    }
                    echo categoryTree();
                    ?>
                    <!--------php --------------------->
                    </select><br>
                    <label for="image">الصورة:</label>
                    <input type="hidden" name='oldimage' value='<?= $image; ?>'>
                    <input type="file" id="image" name="image"  accept="image/png,image/jpg">
                    <img src="<?= $image; ?>" width='120' class='img-thumbnail'>
                </pre>
                    <?php if($update == true){ ?>
                        <input type="submit" name='update' value='Update post' class='btn btn-info btn-md'>
                    <?php }else { ?>
                    <input type="submit" name='add' value='Add post' class='btn btn-info btn-md'>
                    <?php } ?>
                </form>
            </div>
        </div>
</div>





    









<footer>
</footer>
<!-- Bootsrap JS -->

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
</body>
</html>