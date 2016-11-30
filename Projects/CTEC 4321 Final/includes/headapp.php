<!DOCTYPE HTML>
<html>
	<head>
		<title>Old West Animal Hospital</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="icon" type="image/png" href="images/logo_classic.png"/>
		<link rel="stylesheet" href="css/main.css" />
        <script>
function confirmDel(apptype, appt_id) {
// javascript function to ask for deletion confirmation

	url = "app_delete.php?appt_id="+appt_id;
	var agree = confirm("Cancel Appointment: <" + apptype + "> ?");
	if (agree) {
		// redirect to the deletion script
		location.href = url;
	}
	else {
		// do nothing
		return;
	}
}
	</script>
	</head>
<body>
<div id="page-wrapper">

	<!-- Header -->
	<div id="header">

	<!-- Logo -->
	<h1><a href="home.php" id="logo"><img src="images/logo_skyblue.png" width="3%" height"3%">  Old West Animal Hospital</a></h1>
