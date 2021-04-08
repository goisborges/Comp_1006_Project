<?php
  // Step 1: (2 points) Include your connection
  // CREATE YOUR CONNECTION BELOW THIS LINE
  include('_connect.php');
  //$conn = mysqli_connect("localhost", "root", null, "project01");
  // Step 2: (8 points) Retrieve the 'supers' row from your database
  // Ensure you use the condition to get only the one specific row
  // CREATE YOUR QUERY LOGIC BELOW THIS LINE
  $sql = "SELECT * FROM supers WHERE id=({$_GET["id"]})";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);
 
?>

<!-- Step 3: (2 points) Include your header here -->
<?php include('_header.php') ?>
<!-- Step 4: (1 points) Create a link back to home.php -->
<!-- CREATE YOUR LINK BELOW THIS LINE -->
<div class="container">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-collapse">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item">
        <a class="nav-link" href="index.php">HOME</a>
      </li>
    </ul>
  </nav>
</div>
<!-- Step 5: (15 points) Create a form that has a field for the following columns -->
<!-- first_name, last_name, date_of_birth,  alias, active -->
<!-- Ensure you don't forget the name attribute for each field -->
<!-- Step 6: (4 points) Add the action and method attributes -->
<!-- Ensure you use the correct HTTP method and point the action at the correct processing page -->

<!-- Step 7: (10 points) Prepopulate the form with the values from the retrieved row -->
<!-- CREATE YOUR FORM BELOW THIS LINE -->
<div class="container">
    <form action="./update.php" method="POST">
        <input type="hidden" name="id" value="<?= $row['id'] ?>" >
        
        <div class="form-group">
            <label>First Name:</label>
            <input class="form-control" type="text" name="first_name" value="<?= $row["first_name"] ?>">
        </div>

        <div class="form-group">
            <label>Last Name:</label>
            <input class="form-control" name="last_name" value="<?= $row["last_name"] ?>">
        </div>

        <div class="form-group">
            <label>DOB:</label>
            <input class="form-control" name="date_of_birth" value="<?= $row["date_of_birth"] ?>">
        </div>

        <div class="form-group">
            <label>Alias:</label>
            <input class="form-control" name="alias" value="<?= $row["alias"] ?>">
        </div>

        <div class="form-group">
            <label>Active:</label>
            <input class="form-control" name="active" value="<?= $row["active"] ?>">
        </div>

        <button class="btn btn-primary" type="submit">Edit</button>
    </form>
</div>



<!-- Step 8: (2 points) Include your footer here -->
<?php include('_footer.php') ?>


<!-- TOTAL POINTS POSSIBLE: 44 -->