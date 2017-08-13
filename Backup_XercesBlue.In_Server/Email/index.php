<?php
// The message
$message = "Line 1\r\nLine 2\r\nLine 3";
$car=array('bheravabhinav@gmail.com');
// In case any of our lines are larger than 70 characters, we should use wordwrap()
$message = wordwrap($message, 70, "\r\n");

// Send
mail(.$car, 'jaadu dekh boney', $message,'From:harsh1729@gmail.com');
?>
<html>
<body>
<input type="button"   />
</body>
</html>