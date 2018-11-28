<?php
include('includes/config.php');
include('includes/db.php');
include('includes/header.php');
include('includes/sidebar.php');

if(isset($_POST['add_post'])){
  $msg="";
  $title = mysqli_real_escape_string($db , $_POST['title']);
  $author = mysqli_real_escape_string($db , $_POST['author']);
  $category = mysqli_real_escape_string($db , $_POST['category']);
  $body = mysqli_real_escape_string($db , $_POST['body']);
  $keywords = mysqli_real_escape_string($db , $_POST['keywords']);
  $image = $_FILES['image']['name'];

  $target = "images/".basename($_FILES['image']['name']);
  if(isset($_POST['id'])){
    $id = mysqli_real_escape_string($db , $_POST['id']);
    $query = "UPDATE posts SET title='$title',author='$author', image='$image', category='$category',body='$body',keywords='$keywords' WHERE id='$id' ";
  }else{
    $d = getDate();
    $date = "$d[month] $d[mday] $d[year]";

    $query = "INSERT INTO posts (title,author,image,category,body,keywords,date)
    VALUES ('$title','$author', '$image','$category','$body','$keywords','$date')";
  }

  $db->query($query);



?>



          <h1 class="page-header">Add New Post</h1>

          <div class="table-responsive">
            <form method="post" enctype="multipart/form-data">
              <?php if(isset($p)){
                echo "<input type='hidden' value='$id' name='id'>";
              } ?>
				<div class="form-group">
					<label>
						Post Title :
					</label>
					<input class="form-control" type="text" value="<?php echo @$p['title']?>" name="title" >
				</div>

				<div class="form-group">
					<label>
						Post Author :
					</label>
					<input class="form-control" type="text" value="<?php echo @$p['author']?>" name="author" >
				</div>
				<div class="form-group">
					<label>
						Post Category :
					</label>

					<select name="category" class="form-control">
            <?php while($row=$cats->fetch_assoc()){
              $selected = ($row['id'] == @$p['category'] ?"selected":"");
              ?>
						<option value="<?php echo $row['id'] ?>" <?php echo $selected ?> ><?php echo $row['text'] ?></option>
          <?php } ?>
					</select>
				</div>

        <div class="form-group">
          <label>
            Select Image :
          </label>
          <input type="file" name="image">
        </div>

				<div class="form-group">
					<label>
						Post Body :
					</label>
					<textarea name="body" class="form-control"><?php echo @$p['body']?></textarea>
				</div>

				<div class="form-group">
					<label>
						Post Keywords :
					</label>
					<input class="form-control" name="keywords" >
				</div>



			<button type="submit" name="add_post" class="btn btn-default">Add Post</button>

			</form>



          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>
  </body>
</html>
