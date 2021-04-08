<!-- Step 1: (2 points) Include your header here -->
<?php include('_header.php') ?>
<!-- Step 2: (1 points) Create a link back to home.php -->
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

<!-- Step 3: (15 points) Create a form that has a field for the following columns -->
<!-- first_name, last_name, date_of_birth,  alias, active -->
<!-- Ensure you don't forget the name attribute for each field -->
<!-- Step 4: (4 points) Add the action and method attributes -->
<!-- Ensure you use the correct HTTP method and point the action at the correct processing page -->
<!-- CREATE YOUR FORM BELOW THIS LINE -->
<div class="container">
    <form action="./insert.php" method="POST">
        <div class="form-group">
            <label>First Name:</label>
            <input class="form-control" type="text" name="first_name">
        </div>

        <div class="form-group">
            <label>Last Name:</label>
            <textarea class="form-control" name="last_name"></textarea>
        </div>

        <div class="form-group">
            <label>DOB:</label>
            <textarea class="form-control" name="date_of_birth"></textarea>
        </div>

        <div class="form-group">
            <label>Alias:</label>
            <textarea class="form-control" name="alias"></textarea>
        </div>

        <div class="form-group">
            <label>Active:</label>
            <textarea class="form-control" name="active"></textarea>
        </div>

        <button class="btn btn-primary" type="submit">Create</button>
    </form>
</div>


<!-- Step 5: (2 points) Include your footer here -->
<?php include('_footer.php') ?>


<!-- TOTAL POINTS POSSIBLE: 24 -->