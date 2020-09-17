<h2>Edit post Section</h2>
         <?php
         if(isset($_GET['msg'])){
             
            if($_GET['msg']=='updated'){
        ?>  
              <div class="alert alert-success text-center" role="alert">
                Successfully Added !
              </div>
        <?php
        } if($_GET['msg']=='error') {
        ?>

              <div class="alert alert-danger text-center" role="alert">
                error !
              </div>
      <?php
      }
    
    } 
    ?> 
    <form action="php/uresume.php" method="post">
                 <div class="form-row">
<!-- 
                    <div class="form-group col-md-4">
                      <label>Select Category</label>
                        <select name="category" class="custom-select">
                          <option value="e" selected>Education</option>
                          <option value="pe">Pofessional Experience</option>
                        </select>
                    </div> -->

                  <!-- <div class="form-group col-md-8">
                    <label for="sn">Course/Position Name</label>
                    <input type="text" name="title" class="form-control" id="website" placeholder="Bacheolrs Of Computer Application" required>
                  </div>

                  <div class="form-group col-md-8">
                    <label for="website">Institute or Company Name</label>
                    <input type="text" name="ogname" class="form-control" id="website" placeholder="Working at Hedkey India Pvt. Ltd. , New Delhi" required>
                  </div>

                  <div class="form-group col-md-4">
                    <label for="website">Duration or Time Period</label>
                    <input type="text" name="year" class="form-control" id="website" placeholder="2018-2019" required>
                  </div>

                  <div class="form-group col-md-12">
                    <label for="exampleFormControlTextarea1">Description (leave blank if you dont want to)</label>
                    <textarea class="form-control" name="workdesc" id="exampleFormControlTextarea1" rows="3" placeholder="I am ambitious and driven. I thrive on challenge and constantly set goals for myself, so I have something to strive towards. I'm not comfortable with settling, and I'm always looking for an opportunity to do better and achieve greatness. In my previous role, I was promoted three times in less than two years."></textarea>
                  </div> -->


                  <div class="form-group col-md-8">
                    <label for="title_post">title_post</label>
                    <input type="text" name="title_post" value="" class="form-control" id=title_post" placeholder="" required>
                  </div>
                  <div class="form-group col-md-8">
                    <label for="author_post">author_post</label>
                    <input type="text" name="author_post" value="" class="form-control" id="author_post" placeholder="" required>
                  </div>

                  <div class="form-group col-md-8">
                    <label>img_poste</label>
                    <div class="custom-file">
                      <input type="file" name="img_post" value=""class="custom-file-input"  id="img_post" placeholder="" required>
                      <label class="custom-file-label" for="img_post"> Choisir une image</label>
                      
                    </div>
                  </div>

                 

                  <div class="form-group col-md-8">
                    <label for="id_cat">id_cat</label>
                    <input type="text" name="id_cat" value="" class="form-control" id="id_cat" placeholder="" required>
                  </div>
                  <div class="form-group col-md-8">
                    <label for="date_post">date_post</label>
                    <input type="text" name="date_post" value="" class="form-control" id="date_post" placeholder="" required>
                  </div>
                  <div class="form-group col-md-8">
                    <label for="text_post">Description (text_post)</label>
                    <textarea class="form-control" name="text_post" id="text_post" rows="3" placeholder=""></textarea>
                  </div>
                  

                  <div class="form-group col-md-2 ml-auto">
                      <!--<label class="text-white">submi</label>-->
                      <input type="submit" name="addtopost" class="btn btn-primary form-control" value="Add To post"> 
                  </div>
                    
              </div>
    </form>
         
         <table id="rlist" class="table table-striped table-sm .table-responsive ">
          <thead>
            <tr>
              <th>Id_post</th>
              <th>title_post</th>
              <th>author_post</th>
              <th>img_post</th>
              <th>text_post</th>
              <th>id_cat</th>
              <th>name_cat</th>
              <th>date_post</th>
              <th></th>
              <th></th>
            </tr>
          </thead>

          <tbody>
         <?php
            $query2="SELECT post.id_post, post.title_post, post.author_post, post.img_post, post.text_post, post.id_cat, post.date_post, categories.name_cat FROM post , categories WHERE post.id_cat = categories.id_cat GROUP BY post.id_post";
            $queryrun2=mysqli_query($db,$query2);
            $count=1;         
            while($data2=mysqli_fetch_array($queryrun2)){
                // $cat = $data2['category']=='e'?$cat="Education":$cat="Experience";
    ?>
    

     <tr>
  <div class="modal fade" id="modal<?=$data2['id_post']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h6 class="modal-title" id="exampleModalLabel">Edit</h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="skilleditbox">
       <form action="php/uresume.php" method="post">
                <input type="hidden" name="id" value="<?=$data2['id_post']?>">
                 <div class="form-row">
                   <!-- <div class="form-group col-md-4">
                   <label>Select Category</label>
                      <select name="category" class="custom-select">
                    
 
   
                      </select>
                    </div> -->

                    <div class="form-group col-md-8">
                      <label for="id_post">id_post</label>
                      <input type="text" name="id_post" value="<?=$data2['id_post']?>" class="form-control" id=id_post" placeholder="" required>
                    </div>
                  <div class="form-group col-md-8">
                    <label for="title_post">title_post</label>
                    <input type="text" name="title_post" value="<?=$data2['title_post']?>" class="form-control" id=title_post" placeholder="" required>
                  </div>
                  <div class="form-group col-md-8">
                    <label for="author_post">author_post</label>
                    <input type="text" name="author_post" value="<?=$data2['author_post']?>" class="form-control" id="author_post" placeholder="" required>
                  </div>
                  
                  <div class="form-group col-md-8">
                    <label>img_poste(Minimum 600px X 600px, Maxsize 2mb)</label>
                    <div class="custom-file">
                      <input type="file" name="img_post" value="<?=$data2['img_post']?>"class="custom-file-input"  id="img_post"  >
                      <label class="custom-file-label" for="img_post"> Choisir une image</label>
                      
                    </div>
                  </div>

                  <div class="form-group col-md-8">
                    <label for="id_cat">id_cat</label>
                    <input type="text" name="id_cat" value="<?=$data2['id_cat']?>" class="form-control" id="id_cat" placeholder="" required>
                  </div>
                  <div class="form-group col-md-8">
                    <label for="id_cat">name_cat</label>
                    <input type="text" name="id_cat" value="<?=$data2['name_cat']?>" class="form-control" id="id_cat" placeholder="" required>
                  </div>
                  <div class="form-group col-md-4">
                    <label for="date_post">date_post</label>
                    <input type="text" name="date_post" value="<?=$data2['date_post']?>" class="form-control" id="date_post" placeholder="" required>
                  </div>
                  <div class="form-group col-md-12">
                    <label for="text_post">Description (text_post)</label>
                    <textarea class="form-control" name="text_post" id="text_post" rows="3" placeholder=""><?=$data2['text_post']?></textarea>
                  </div>
                  
                
                 </div>
             
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <input type="submit" class="btn btn-primary" name="rupdate" value="Update">
          </div>
        </form>
    </div>
  </div>
</div>   
          <td>#<?=$count?></td>
          
          
       
         <td><?=$data2['title_post']?></td>
         <td><?=$data2['author_post']?></td>
         <td> <img src="../../images/<?=$data2['img_post']?>" class="oo img-thumbnail"></td>
         <td><?=$data2['text_post']?></td>
         <td><?=$data2['id_cat']?></td>
         <td><?=$data2['name_cat']?></td>
         <td><?=$data2['date_post']?></td>
         <td>
                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal<?=$data2['id_post']?>">
                  Edit
                </button> <a href="php/uresume.php?del=<?=$data2['id_post']?>"><button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModal">
                  Delete
                </button></a>
          </td>
</tr>            
         <?php $count++;} ?>
      
      
      </tbody>
             
             
</table>


