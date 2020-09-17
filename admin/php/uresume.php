<?php
include('../../include/db.php');
include('checkupload.php');

// if(isset($_POST['addtoresume'])){        
//     $category=mysqli_real_escape_string($db,$_POST['category']);
//     $title=mysqli_real_escape_string($db,$_POST['title']);
//     $ogname=mysqli_real_escape_string($db,$_POST['ogname']);
//     $year=mysqli_real_escape_string($db,$_POST['year']);
//     $workdesc=mysqli_real_escape_string($db,$_POST['workdesc']);   

//     $query="INSERT INTO resume(category,title,ogname,year,workdesc) ";
//     $query.="VALUES ('$category','$title','$ogname','$year','$workdesc')";    
//     $queryrun=mysqli_query($db,$query);
//     if($queryrun){
//         header("location:../?editresume=true&msg=updated");
//     }    

// }    
    

if(isset($_POST['rupdate'])){
    $id_post=$_POST['id_post'];
    $title_post=mysqli_real_escape_string($db,$_POST['title_post']);
    $author_post=mysqli_real_escape_string($db,$_POST['author_post']);
    $id_cat=mysqli_real_escape_string($db,$_POST['id_cat']);
    $date_post=mysqli_real_escape_string($db,$_POST['date_post']);
    $text_post=mysqli_real_escape_string($db,$_POST['text_post']);

    $img_post=$_FILES['img_post']['name'];      

    if($img_post===""){

        $img_post==$data['img_post'];
    }else{

        // $pdone = Upload('$img_post',$target_dir);

        // if($pdone=="error"){

        //     header("location:../?editresume=true&msg=error");
    
        // }else{
            $query="UPDATE `post` SET  `title_post`='$title_post',`author_post`='$author_post',`id_cat`='$id_cat',`date_post`='$date_post',`text_post`='$text_post', `img_post`='$img_post' WHERE `id_post`='$id_post'";
            // UPDATE `post` SET `id_post`='$title_post',`title_post`=$title_post,`author_post`=[value-3],`img_post`=[value-4],`text_post`=[value-5],`id_cat`=[value-6],`date_post`=[value-7] WHERE 1
            $run=mysqli_query($db,$query);
            if($run){
                header("location:../?editresume=true#rlist");
            
           
        } 
    // }

     
} 

}
    


// if(isset($_GET['del'])){
//     $id=$_GET['del'];

//     $query="DELETE FROM resume WHERE id='$id'";
//     $run=mysqli_query($db,$query);
//     if($run){
//         header("location:../?editresume=true#rlist");
//     }
// }