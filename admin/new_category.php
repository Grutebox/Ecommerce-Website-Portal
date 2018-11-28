<?php
include('includes/config.php');
include('includes/db.php');
include('includes/header.php');
include('includes/sidebar.php');

if(isset($_GET['category'])){
  $id = mysqli_real_escape_string($db , $_GET['category']);
  $query = "SELECT * FROM categories WHERE id='$id'";
  //echo "correct";
  $cat = $db->query($query);
  $cat = $cat->fetch_assoc();
}

if(isset($_POST['add_category'])){
  $category = mysqli_real_escape_string($db , $_POST['category']);

  if($_GET['category']){
    $id =  mysqli_real_escape_string($db , $_GET['category']);
    $query = "UPDATE categories SET text = '$category' WHERE id = '$id'";
    $db->query($query);
    
  }else{
    $db->query("INSERT INTO categories (text) VALUES ('$category')");
  }



}
?>



          <h1 class="page-header">Categories</h1>

		  <a href="new_category.php" class="btn btn-info btn-lg">Add New</a>

          <div class="table-responsive">
            <form method="post">
				<div class="form-group">
					<label for="category">
						Category :
					</label>
					<input class="form-control" name="category" value="<?php echo @$cat['text'] ?>">

				</div>
			<button type="submit" name="add_category" class="btn btn-default">Add Category</button>

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
