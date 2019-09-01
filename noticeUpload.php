if (isset($_POST['submit'])) {

   $folder_path = 'health/';

   $filename = basename($_FILES['healthfile']['name']);
   $newname = $folder_path . $filename;

   if (move_uploaded_file($_FILES['healthfile']['tmp_name'], $newname)) {
      if ($_FILES['healthfile']['type'] != "application/pdf") {

          echo "<p>Class notes must be uploaded in PDF format.</p>";
      } else {
          $filesql = "INSERT INTO tbl_health (link) VALUES ('{$filename}')".die(mysql_error());
          $fileresult = mysql_query($filesql, $con).die(mysql_error());
     }

     if ($fileresult) {
          echo 'Success';
     } else {
          echo 'fail';
     }
  }

}