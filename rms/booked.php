<?php require_once('connection/config.php'); ?>
<!DOCTYPE html >
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Registration Failed</title>
<link href="stylesheets/user_styles.css" rel="stylesheet" type="text/css" />
<script language="JavaScript" src="validation/user.js">
</script>
</head>
<body>
<div id="page">
  <div id="menu"><ul>
  <li><a href="index.php">Home</a></li>
  <li><a href="foodzone.php">Food Zone</a></li>
  <li><a href="specialdeals.php">Special Deals</a></li>
  <li><a href="member-index.php">My Account</a></li>
  <li><a href="contactus.php">Contact Us</a></li>
  </ul>
  </div><center>
<div id="header">
  <div id="logo"> <a href="index.php" class="blockLink"></a></div>
  </center>
</div>
<div id="center">
<h1>Registration Failed</h1>
  <div style="border:#bd6f2f solid 1px;padding:4px 6px 2px 6px">
<p>&nbsp;</p>
<div class="error">Reservation Failed!</div>
<p>You are seeing this page because partyhall has been booked already. <a href="partyhalls.php">Click Here</a> to try again.</p>
</div>
</div>
<?php include 'footer.php'; ?>
</div>
</body>
</html>