<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style-form.css" />
    <title>tp
        
    </title>
</head>
<body>
    <section class="header">
        <h1>ibn ghazala</h1>
        <a href="index.html" class="btn-bgstroke" onclick="showElement()">home</a>
        <a href="/list.html" class="btn-bgstroke">list</a>
        <a class="btn-bgstroke">add</a>
        <a class="btn-bgstroke">contact</a>
    </section>
    <div class="container">
    <h2>Contact Us</h2>
    <form>
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required>

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>

      <label for="message">Message:</label>
      <textarea id="message" name="message" rows="4" required></textarea>

      <button type="submit">Submit</button>
    </form>
  </div>
  <?php

$servername = "127.0.0.2:3307";
$username = "root";
$password = "";
$dbname = "atelier1";

$conn = new mysqli($servername, $username, $password, $dbname);


    
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = "help@example.com";  
    $subject = "Contact Us Form Submission";
    $body = "Name: $name\nEmail: $email\nMessage:\n$message";

    if (mail($to, $subject, $body)) {
        echo "Thank you! Your message has been sent.";
    } else {
        echo "Sorry, something went wrong and we couldn't send your message.";
    }
} else {
    echo "Oops! There was a problem with your submission.";
}
?>

</body>