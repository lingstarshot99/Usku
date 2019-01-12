<?php
  function sanitise_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  if (isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['email'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $fname = sanitise_input($fname);
    $lname = sanitise_input($lname);

    $email = $_POST['email'];
    $email = sanitise_input($email);

    $host = "localhost";
    $username = "booak55_admin";
    $password = "admin1234";
    $sql_db = "booak55_customer";

    $conn = @mysqli_connect(
      $host,
      $username,
      $password,
      $sql_db
    );

    if (!$conn) {
      echo "No connection to Database";
    } else {
      echo "Connection established";
      $sql_table = "customers";
      $create_table_query = "CREATE TABLE IF NOT EXISTS $sql_table (
        register_id INT AUTO_INCREMENT PRIMARY KEY,
        register_date DATE NOT NULL,
        firstname VARCHAR(20) NOT NULL,
        lastname VARCHAR(20) NOT NULL,
        email VARCHAR(30) NOT NULL
      );";

      $result = mysqli_query($conn, $create_table_query);

      if (!$result) {
        // echo "Fail to create table";
      } else {

        $dt = new DateTime();
        $dt = $dt->format('Y-m-d H:i:s');
        $insert_query = "INSERT INTO customers VALUES (
          NULL,
          '$dt',
          '$fname',
          '$lname',
          '$email'
        );";

        $result = mysqli_query($conn, $insert_query);
        if (!$result) {
          // echo "Fail to insert data";
        } else {
          // echo "Insert successful";
          echo "Thank You";
        }
      }
    }

  } else {
    // echo "Cannot retrieve data";
  }
?>
