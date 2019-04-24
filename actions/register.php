<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<?php

if (isset($_POST['register'])) {
  $first = $_POST['firstname'];
  if ($_POST['lastname']) $last = $_POST['lastname'];
  else $last = "";
  $email = $_POST['email'];
  $password = $_POST['password'];

  echo "Nama Depan : " . $first . "<br>";
  echo "Nama Belakang : " . $last . "<br>";
  echo "Email : " . $email . "<br>";
  echo "Password : " . $password . "<br>";
  echo "<script>
          Swal.fire('Yeah!', 'Your account registered!', 'success');
        </script>";
}

?>