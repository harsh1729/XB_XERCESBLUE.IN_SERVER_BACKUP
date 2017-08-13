<?php
$to      = 'anjali.watts20@gmail.com';
$subject = 'This is the subject of the electronic mail';
$message = "<html>
<head>
  <title>Birthday Reminders for August</title>
</head>
<body>
  <p>Here are the birthdays upcoming in August!</p>
  <table>
    <tr>
      <th>Person</th><th>Day</th><th>Month</th><th>Year</th>
    </tr>
    <tr>
      <td>Joe</td><td>3rd</td><td>August</td><td>1970</td>
    </tr>
    <tr>
      <td>Sally</td><td>17th</td><td>August</td><td>1973</td>
    </tr>
  </table>
  <h3>your Confirmation Code is :</h3><h1><b style='color:red'> ".mt_rand(20000,mt_getrandmax())."</b></h1>
</body>
</html>";
$msg = "Anjali Please Come To my office Once!";
$st = "";
$headers = 'From: harsh.v@xercesblue.in' . "\r\n" .
    'Reply-To: harsh.v@xercesblue.in' . "\r\n" .
    'X-Mailer: PHP/' . phpversion() . "\r\n";
    
$headers  .= 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

mail($to, $st, $msg, $headers);
echo "sent mail to :".md5($to);
?>