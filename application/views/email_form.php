<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Task Email Sending</title>
</head>
<body>
<?php
echo $this->session->flashdata('email_sent');
echo form_open('/Email_controller/send_mail');
?>
<input type="email" name="email" required />
<input type="submit" value="SEND MAIL">
<?php
echo form_close();
?>
</body>
</html>