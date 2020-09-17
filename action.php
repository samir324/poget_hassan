<?php

// conexion db 
require 'connect.php';

// declarer session
session_start();

// fonction pr tester les input
function valid_data($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// script for login :::::::::::::::::::::::::::::::::::::

    if(isset($_POST['submit'])){

        $email = valid_data ($_POST['email']);
        $password = $_POST['password'];
    
    
        $sth = $mag->prepare("SELECT * FROM admin WHERE email_admin = :email ");
        $sth->bindParam(':email',$email);
        $sth->execute();
        while ($row = $sth->fetch())
        {
            $name=$row['name_admin'];
            $email=$row['email_admin'];
            $password=$row['password'];

            if ($row && ($_POST['password'] === $row['password']))
            {
                header("LOCATION:dashboard.php"); 
    
                //$_SESSION['message']= " You are login as admin !";
                //$_SESSION['msg_type']= "success";
                
                
                
            }else{

                $_SESSION['message']= "يرجى إدخال بيانات صحيحة";
                $_SESSION['msg_type']= "danger";
        
            }

        } 
        

    }

    // script for contact us :::::::::::::::::::::::::::::::::


if (isset($_POST['send'])) {
    $name = valid_data($_POST['name']);
    $email= valid_data($_POST['email']);
    $subject= valid_data($_POST['subject']);
    $message = valid_data($_POST['message']);

    if((!empty($name)) && (!empty($email)) && (!empty($subject)) && (!empty($message))){
        $dest = "fadaa.al.adala@gmail.com";
        $subj = "Contact Form";
        $msg= " New message recieved \n
        Name = $name \n
        E-mail = $email \n
        Subject = $subject \n
        Message = $message ";
        $headers= 'MINE-Version: 1.0'. "<br>";
        $headers= 'From : $name <$email>'. "<br>";
        $headers= 'Content-type: text/html; charset=iso-8859-1'. "\r\n";
        mail($dest, $subj, $msg, $headers);
    }else{
        echo "error";
    }

    $_SESSION['message']= "شكرا على تواصلكم ";
    $_SESSION['msg_type']= "success";

}



// script for newpost :::::::::::::::::::::::::::::::::::::

    $update = false;

    $id=" ";
    $title=" ";
    $text=" ";
    $categories=" ";
    $image=" ";
    
    
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
        $_SESSION['message']= " تم حفظ المقال ";
        $_SESSION['msg_type']= "success";
    
        //header('Location : dashboard.php');
    
    
    } 



// script select posts by category :::::::::::::::::::::::::::::::::::::




if(isset($_GET['cat'])){

    $cat=$_GET['cat'];
    if($cat == 'فضاء التشريع')
    {
        $query= "SELECT * FROM post INNER JOIN categories ON post.id_cat = categories.id_cat WHERE id_parent = 2 ORDER BY date_post DESC";
    }
    elseif($cat == 'مقالات قانونية')
    {
     $query= "SELECT * FROM post INNER JOIN categories ON post.id_cat = categories.id_cat WHERE id_parent = 1 ORDER BY date_post DESC";
    }
    elseif($cat == 'إجتهاد قضائي')
    {
     $query= "SELECT * FROM post INNER JOIN categories ON post.id_cat = categories.id_cat WHERE name_cat = 'إجتهاد قضائي' ORDER BY date_post DESC";
    }
    elseif($cat == 'أنشطة علمية')
    {
     $query= "SELECT * FROM post INNER JOIN categories ON post.id_cat = categories.id_cat WHERE id_parent = 4 ORDER BY date_post DESC";
    }
    elseif($cat == 'صوت و صورة')
    {
     $query= "SELECT * FROM video ORDER BY date_video DESC";
    }
    else{
     $query= "SELECT * FROM post INNER JOIN categories ON post.id_cat = categories.id_cat WHERE id_post = :cat";
    }

	

}

// script select posts by subCategory :::::::::::::::::::::::::::::::::::::


if(isset($_GET['sub'])){

    $sub=$_GET['sub'];
    
    $query= "SELECT * FROM post INNER JOIN categories ON post.id_cat = categories.id_cat WHERE name_cat = '$sub'  ORDER BY date_post DESC";
 
}



// script for viewpost :::::::::::::::::::::::::::::::::::::


if(isset($_GET['id'])){

	$id=$_GET['id'];
	$sth= $mag->prepare("SELECT * FROM post INNER JOIN categories ON post.id_cat = categories.id_cat WHERE id_post = :id");
	$sth->bindParam(':id',$id);
	$sth->execute();
	while ($row = $sth->fetch())
		{
					$id=$row['id_post'];
					$title=$row['title_post'];
					$categories=$row['name_cat'];
					$author=$row['author_post'];
					$text=$row['text_post'];
					$image=$row['img_post'];
					$date=$row['date_post'];

        }
}







    

    
    







?>