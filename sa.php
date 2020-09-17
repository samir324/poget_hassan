line 84 <?php 
                        if($data2['id_cat']=='e'){ ?>
                            <option value="e" selected>Education</option>
                            <option value="pe">Pofessional Experience</option> 
                    <?php  }else{ ?>
                            <option value="e">Education</option>
                            <option value="pe" selected>Pofessional Experience</option>
                    <?php    } ?>






   // script on html pour afficher une list des categories:::::::                 

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


// script add new with save image in folder with name uploads::::

if(isset($_POST['add'])){                    

//test values on input

$title =valid_data ($_POST['title']);
$text= valid_data($_POST['text']);
$categories = valid_data($_POST['cat']);
$image= $_FILES['image']['name'];
$upload="images/".$image;

//insert values in  db
$sth = $mag->prepare("
INSERT INTO post(title_post, text_post, img_post,id_cat)
VALUES(:title, :text, :image, :cat)");
$sth->bindParam(':title',$title);
$sth->bindParam(':text',$text);
$sth->bindParam(':image',$upload);
$sth->bindParam(':cat',$categories);
$sth->execute();
move_uploaded_file($_FILES['image']['tmp_name'],$upload);
// show alert
$_SESSION['message']= " تم حفظ المقال ";
$_SESSION['msg_type']= "success";




} 



// crud from my portfolio :::::::::::::::::::::::::::::::::::::::::::::::::::::::::


if(isset($_POST['add-projet'])){                    

//test values on input
$title =valid_data ($_POST['title']);
$url= valid_data($_POST['url']);
$categorie= valid_data($_POST['cat']);
$image= $_FILES['image']['name'];
$upload="uploads/".$image;

//insert values in  db
$sth = $db->prepare("
INSERT INTO projet (titre, url, categorie, image)
VALUES(:titre,:url, :categorie, :image)");
$sth->bindParam(':titre',$title);
$sth->bindParam(':url',$url);
$sth->bindParam(':categorie',$categorie);
$sth->bindParam(':image',$upload);
$sth->execute();
move_uploaded_file($_FILES['image']['tmp_name'],$upload);


//$_SESSION['message']= " le projet est bien ajouté !";
//$_SESSION['msg_type']= "success";

header("LOCATION:projet.php"); 

}

// script to delet post ::::::::::::::::::::::::::::::::::

if(isset($_GET['delete'])){

$id = $_GET['delete'];

//delete image from uploads folder
$sth=$db->prepare( 'SELECT image FROM projet WHERE id_p= :id ');
$sth->bindParam(':id',$id);
$sth->execute();
while ($row = $sth->fetch())
{
$imagepath=$row['image'];
unlink($imagepath);
}

// delete the post from db
$sth=$db->prepare('DELETE FROM projet WHERE id_p= :id ')  ;
$sth->bindParam(':id',$id);
$sth->execute();

//header(""LOCATION:projet.php");

$_SESSION['message']= "Une ligne est bien suprimée !";
$_SESSION['msg_type']= "danger";

}

// recuperer details de projet in form::::::::::::::::::::::

if(isset($_GET['edit'])){

$id = $_GET['edit'];

// select the post a modifier selon son id et recuperer les details de ce post
$sth=$db->prepare('SELECT * FROM projet INNER JOIN category ON projet.categorie = category.id_c  WHERE id_p = :id ')  ;
$sth->bindParam(':id',$id);
$sth->execute();
while ($row = $sth->fetch())
{
$id=$row['id_p'];
$title=$row['titre'];
$url=$row['url'];
$categorie=$row['name'];
$image=$row['image'];



}




}

// edit details of projet

if(isset($_POST['update-projet'])){

//valider new details for update 
$id = $_POST['id'];
$title = valid_data($_POST['title']);
$url= valid_data ($_POST['url']);
$categorie=$_POST['cat'];
$oldimage= $_POST['oldimage'];

// to change and upload new image 
if(isset($_FILES['image']['name']) && ($_FILES['image']['name'] != " ")){

$newimage="uploads/".$_FILES['image']['name'];
unlink($oldimage);
move_uploaded_file($_FILES['image']['tmp_name'],$newimage);

} else{
$newimage=$oldimage;
}

$sth=$db->prepare('UPDATE projet SET titre=?,url=?,categorie=?,image=?  WHERE id_p = ? ')  ;
$sth->bindParam(1,$title);
$sth->bindParam(2,$url);
$sth->bindParam(3,$categorie);
$sth->bindParam(4,$newimage);
$sth->bindParam(5,$id);
$sth->execute();

$_SESSION['message']= " Une ligne est bien modifiée!";
$_SESSION['msg_type']= "danger";

//header(""LOCATION:projet.php");

}
