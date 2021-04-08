<?php
  // Step 1: (2 points) Include your connection
  // CREATE YOUR CONNECTION BELOW THIS LINE
  include("_connect.php");
  //$conn = mysqli_connect("localhost", "root", null, "project01");
  // Step 2: (5 points) Retrieve all the 'supers' rows from your database
  // CREATE YOUR QUERY LOGIC BELOW THIS LINE
  $results = mysqli_query($conn, "SELECT id, first_name, last_name, date_of_birth, alias, active, hero FROM supers");
  $rows = mysqli_fetch_all($results, MYSQLI_ASSOC);
  //var_dump($rows);
?>

<!-- Step 3: (2 points) Include your header here -->
<?php include("_header.php") ?>
<!-- Step 4: (2 points) Create a navigation bar for home.php and new.php -->
<!-- CREATE YOUR NAVIGATION HTML BELOW THIS LINE -->
<div class="container">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-collapse">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item">
        <a class="nav-link" href="index.php">HOME</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="new.php">NEW</a>
      </li>
    </ul>
  </nav>
</div>
<!-- Step 5: (15 points) Create a table that display each row from the database -->
<!-- You only need to display the first_name, last_name, date_of_birth, -->
<!-- alias, active, and hero columns -->
<!-- Step 6: (6 points) Create action links pointing to 'edit.php' and 'delete.php' -->
<!-- Ensure there was one edit and delete link for each row -->

<!-- CREATE YOUR TABLE BELOW THIS LINE -->


<div class= "container"> 
  <table class="table table-striped my-5">
      <thead>
          <tr>
              <td>First Name</td>
              <td>Last Name</td>
              <td>DOB</td>
              <td>Alias</td>
              <td>Active</td>
              <td>Hero</td>
          </tr>
      </thead>

      <tbody>
          <?php
          foreach($rows as $row): ?>
              <tr>
                  <td><?= $row['first_name'] ?></td>
                  <td><?= $row['last_name'] ?> </td>
                  <td><?= $row['date_of_birth'] ?> </td>
                  <td><?= $row['alias'] ?> </td>
                  <td><?= $row['active'] ?> </td>
                  <td><?= $row['hero'] ?> </td>
                  <td>
                    <a href='./edit.php?id=<?= $row['id'] ?>'>edit</a>
                    |
                    <a href='./delete.php?id=<?= $row['id'] ?>'>delete</a>
                  </td>
              </tr>
          <?php endforeach ?>
          
      </tbody>
  </table>
</div>

<!-- Step 7: (2 points) Include your footer here -->
<?php include ("_footer.php") ?>


<!-- TOTAL POINTS POSSIBLE: 34 -->