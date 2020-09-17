<?php
include('../../include/db.php');
include('checkupload.php');

$id=$_POST['id'];
// $query="SELECT * FROM video WHERE id='$id'";

// $queryrun=mysqli_query($db,$query);
// $data=mysqli_fetch_array($queryrun);

// $target_dir = "../../assets/img/";

if(isset($_POST['pupdate'])){    

    // $projectpic=$_FILES['date_video']['name'];      

    // if($projectpic==""){

    //     $projectpic=$data['date_video'];
    // }else{

    // $pdone = Upload('date_video',$target_dir);
    // }
    
    
    $title_video=mysqli_real_escape_string($db,$_POST['title_video']);
    $url_video=mysqli_real_escape_string($db,$_POST['url_video']);
    $date_video=mysqli_real_escape_string($db,$_POST['date_video']);
    
    // if($pdone=="error"){
    //     header("location:../?edithome=true&msg=error");
    // }else{
            $query="UPDATE video SET ";
            $query.="title_video='$title_video',";
            $query.="url_video='$url_video',";
            $query.="date_video='$date_video' WHERE id_video='$id'";

        echo    $query;    
                $queryrun=mysqli_query($db,$query);
        if($queryrun){
            header("location:../?editportfolio=true#done");
        }    

    // }    
    
}
// Delete to portfolio

if(isset($_GET['del'])){
    $id=$_GET['del'];
    $query="DELETE FROM video WHERE id_video='$id'";
    $queryrun=mysqli_query($db,$query);
    if($queryrun){
        header("location:../?editportfolio=true#done");
    }
}

// Add to portfolio

if(isset($_POST['AddTovideo'])){    
        // $projectpic=$_FILES['projectpic']['name'];        
    // if($projectpic==""){
    //     $projectpic=$data['projectpic'];
    // }else{
    //     $pdone = Upload('projectpic',$target_dir);
    // }
        
        
        $title_video=mysqli_real_escape_string($db,$_POST['title_video']);
        $url_video=mysqli_real_escape_string($db,$_POST['url_video']);
        $date_video=mysqli_real_escape_string($db,$_POST['date_video']);
        
    
    // if($pdone=="error"){

    //     header("location:../?editportfolio=true&msg=error");
    // }else{
            $query="INSERT INTO video (title_video,url_video,date_video) ";
            $query.="VALUES ('$title_video','$url_video','$date_video')";

            // $query="UPDATE video SET ";
            // $query.="title_video='$title_video',";
            // $query.="url_video='$url_video',";
            // $query.="date_video='$date_video' WHERE id_video='$id'";
            $queryrun=mysqli_query($db,$query);
            if($queryrun){
                header("location:../?editportfolio=true&msg=updated");
            }    

    // }    
    
}