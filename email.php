<?php




$fname = $_POST['Name'];
$lname = $_POST['lname'];
$phone = $_POST['phone'];
$applying = $_POST['job'];
$resume = $_POST['resume'];
$city = $_POST['city'];
$state = $_POST['state '];
$zip = $_POST['zip'];

$visitor_email = $_POST['email'];
$address = $_POST['address'];
$subject = $_POST['subject'];
$message = $_POST['message'];



$email_from = 'info@axiomevproducts.com';
$email_subject = 'New form Submission';



$email_body = "User first name: $fname.\n" .
"User email: $visitor_email .\n" .
    "User phone: $phone.\n" .
    "user Applying for: $applying .\n " .
   "user attached file: $resume .\n" .
    "User Address: $address .\n" .
    "User subject: $subject.\n" .
    "User message: $message .\n";


$to = 'axiommarcom@gmail.com';
$headers = "From: $email_from \r\n";
$headers = "Reply-to: $visitor_email \r\n";

mail($to, $email_subject, $email_body, $headers);

header("Location:./thankyou.html");

?>

// $target_dir = "uploads/";
// $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
// $uploadOk = 1;
// $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// // Check if image file is a actual image or fake image
// if(isset($_POST["submit"])) {
//   $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
//   if($check !== false) {
//     echo "File is an image - " . $check["mime"] . ".";
//     $uploadOk = 1;
//   } else {
//     echo "File is not an image.";
//     $uploadOk = 0;
//   }
// }

// // Check if file already exists
// if (file_exists($target_file)) {
//   echo "Sorry, file already exists.";
//   $uploadOk = 0;
// }

// // Check file size
// if ($_FILES["fileToUpload"]["size"] > 500000) {
//   echo "Sorry, your file is too large.";
//   $uploadOk = 0;
// }

// // Allow certain file formats
// if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
// && $imageFileType != "gif" ) {
//   echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
//   $uploadOk = 0;
// }

// // Check if $uploadOk is set to 0 by an error
// if ($uploadOk == 0) {
//   echo "Sorry, your file was not uploaded.";
// // if everything is ok, try to upload file
// } else {
//   if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
//     echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
//   } else {
//     echo "Sorry, there was an error uploading your file.";
//   }
// }


// ?>