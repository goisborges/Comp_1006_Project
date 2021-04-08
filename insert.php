
<?php 

  // Step 1: (2 points) Include your connection
  // CREATE YOUR CONNECTION BELOW THIS LINE
  include("_connect.php");
  //$conn = mysqli_connect("localhost", "root", null, "project01");
  // Step 2: (17 points) Insert the new 'supers' row into the database
  // CREATE YOUR QUERY LOGIC BELOW THIS LINE
  $results = mysqli_query($conn, "INSERT INTO supers (
    first_name, 
    last_name, 
    date_of_birth, 
    alias, 
    active, 
    hero
    ) VALUES (
      '{$_POST['first_name']}',
      '{$_POST['last_name']}',
      '{$_POST['date_of_birth']}',
      '{$_POST['alias']}',
      '{$_POST['active']}',
      '{$_POST['hero']}'
    )
  ");
  // Step 3: (16 points) Perform basic error handling and redirect the user with a success or error message
  // Ensure you store the messages into the $_SESSION
  // Ensure you exit after your redirect
  // CREATE YOUR ERROR HANDLING BELOW THIS LINE
  session_start();
  if ($results) {
      $_SESSION["message"] = "The new entry was created successfully";
  }
  else {
      $error = mysqli_error($mysqli);
      $_SESSION["message"] = "There was an error creating the super hero";
      $error;
  }

  header("Location: notification.php");
  exit();


  // TOTAL POINTS POSSIBLE: 35
?>
