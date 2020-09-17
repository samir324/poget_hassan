 <h2>Edit video</h2>
         <?php
            if(isset($_GET['msg'])){
             
                  if($_GET['msg']=='updated'){
                      ?>
                      <div class="alert alert-success text-center" role="alert">
                        Project Successfully Added !
                      </div>
                      <?php
                  }  
                  if($_GET['msg']=='error'){
                      ?>
                      <div class="alert alert-danger text-center" role="alert">
                        something wrong with your image please check type or size !
                      </div>
                      <?php
                  } 
            } 
          ?>  
    <form method="post" action="php/uportfolio.php" enctype="multipart/form-data">

        <div class="form-row">
<!--         
        <div class="form-group col-md-6">
          <label>Project Screenshot/Image (Minimum 600px X 600px, Maxsize 2mb)</label>
          <div class="custom-file">
            <input type="file" name="projectpic" class="custom-file-input" id="profilepic">
            <label class="custom-file-label" for="projectpic">Choose Pic...</label>
          </div>
        </div>
      
        <div class="form-group col-md-6 mt-auto">
          <label for="name">Project Name</label>
          <input type="name" name="projectname" class="form-control" id="name" placeholder="ToDo List">
        </div>
        
      
        
        <div class="form-group col-md-12">
          <label for="email">Project Link</label>
          <input type="text" name="projectlink" class="form-control" id="email" placeholder="https://">
        </div> -->
        <div class="form-group col-md-6 mt-auto">
                                      <label for="id_video">id_video</label>
                                      <input type="namber" name="id" value="" class="form-control" id="id_video" >
                                  </div>
                                  <div class="form-group col-md-6 mt-auto">
                                      <label for="title_video">title_video</label>
                                      <input type="text" name="title_video" value="" class="form-control" id="title_video" placeholder="title ">
                                  </div>
              
                                  <div class="form-group col-md-6">
                                    <label for="url_video">url_video</label>
                                    <input type="text" name="url_video" value="" class="form-control" id="url_video" placeholder="https://video.vvv">
                                  </div>

                                  <div class="form-group col-md-6">
                                    <label for="date_video">date_video</label>
                                    <input type="date" name="date_video" value="" class="form-control" id="date_video" placeholder="2020-2021">
                                  </div>                          

        <div class="form-group col-md-2 ml-auto">
            <input type="submit" name="AddTovideo" class="btn btn-primary" value="Add To video">
        </div>


    </form>
<table class="table table-striped table-sm">
          <thead>
              <tr>
                <th>id_video</th>
                <th>title_video</th>
                <th>url_video</th>
                <th>date_video</th>
              </tr>
          </thead>
          <tbody>
                <?php
                
                  $query2="SELECT * FROM `video`";

                  $queryrun2=mysqli_query($db,$query2);
                  $count=1;         
                  while($data2=mysqli_fetch_array($queryrun2)){
                ?>
          <tr>
            <div class="modal fade" id="modal<?=$data2['id_video']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h6 class="modal-title" id="exampleModalLabel">Edit progect</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                      <form method="post" action="php/uportfolio.php" enctype="multipart/form-data">
                              <input type="hidden" name="id" value="<?=$data2['id_video']?>">
                              <div class="form-row">
<!-- 
                                  <div class="form-group col-md-12">
                                      <video src="../assets/img/"></video>
                                      <!-- <img src="" class="oo img-thumbnail"> -->
                                  <!-- </div> --> 

                                  <!-- <div class="form-group col-md-6">

                                    <label>Project Screenshot/Image (Minimum 600px X 600px, Maxsize 2mb)</label>
                                    <div class="custom-file">
                                      <input type="file" name="projectpic" class="custom-file-input" id="profilepic">
                                      <label class="custom-file-label" for="projectpic">Choose Pic...</label>
                                    </div>
                                  </div> -->
                      
                                  <div class="form-group col-md-6 mt-auto">
                                      <label for="title_video">title_video</label>
                                      <input type="title_video" name="title_video" value="<?=$data2['title_video']?>" class="form-control" id="title_video" placeholder="ToDo List ">
                                  </div>
              
                                  <div class="form-group col-md-6">
                                    <label for="url_video">url_video</label>
                                    <input type="text" name="url_video" value="<?=$data2['url_video']?>" class="form-control" id="url_video" placeholder="https://">
                                  </div>

                                  <div class="form-group col-md-6">
                                    <label for="date_video">date_video</label>
                                    <input type="text" name="date_video" value="<?=$data2['date_video']?>" class="form-control" id="date_video" placeholder="https://">
                                  </div>

                                </div>
                                  
                                  
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <input type="submit" class="btn btn-primary" name="pupdate" value="Update">
                                  </div>  
                      </form>
                  </div>
                </div>
              </div>
            </div>   
            <!-- <video src=""></video> -->
            <td><?=$data2['id_video']?></td>
            <td><?=$data2['title_video']?></td>
            <td><?=$data2['url_video']?></td>
                <td><?=$data2['date_video']?></td>
                <td>
                    <a href="<?=$data2['url_video']?>"> <button type="button" class="btn btn-success btn-sm">Visit</button></a>
                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal<?=$data2['id_video']?>">
                        Edit 
                    </button>
                    <a href="php/uportfolio.php?del=<?=$data2['id_video']?>">
                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModal">
                        Delete</button>
                    </a>
                </td>
        </tr>            
            <?php $count++; } ?>
          </tbody>
</table>  