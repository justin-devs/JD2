<?php
if(isset($_POST['name'])){
// Multiple recipients
$to = 'voltmancoza@gmail.com, justin6225@zoho.com'; // note the comma

// Subject
$subject = 'New Message';

// Message
$message = '
<html>
<head>
  <title>New message from WEBSITE</title>
</head>
<body>
  <p>New Message!</p>
  <table>
    <tr>
      <th>Name</th><th>Email</th><th>Message</th>
    </tr>
    <tr>
      <td>'.$_POST["name"].'</td><td>'.$_POST["email"].'</td><td>'.$_POST["message"].'</td>
    </tr>
  </table>
</body>
</html>
';

// To send HTML mail, the Content-type header must be set
$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=iso-8859-1';


// Mail it
mail($to, $subject, $message, implode("\r\n", $headers));
}
?>