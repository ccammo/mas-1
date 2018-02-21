<!-- INSTRUCTIONS: this is the header and footer template for the primary USER pages. Code your forms, tables, etc., below the navigation tags. Placeholders have been included where variables will be displayed based on session login information for the user. Leave these "AS IS" for now. To maintain consistency, please do not change the header information other than where indicated with additional comments. -->

<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href="css/new_master_stylesheet.css">
	<title>Membership and Accounting System (MAS)</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
<div class="main-heading">
	<h1>Yokota Sportsmen&#39;s Club</h1>
</div>

<!-- this redirects the user to a signout page where the variables will be reset and the session terminated -->
<div class="signout">
	<a href="signout.php">Sign Out</a>	
</div>

<div class="logininfo">
	<p>[placeholder][placeholder] you are logged in as an MEMBER</p>
</div>
<br>
<br>
<br>
<br>
<!-- IMPORTANT #1: change the links to the pages in which users should be directed for YOUR specific wireframe as well as the text to display on the button -->
<div class="nav-user">
	<ul>
		<li><a href="user_view_edit_personal_information.php">View Profile</a></li>
		<li><a href="user_view_purchase_history.php">Purchase History</a></li>
		<li><a href="user_view_amounts_paid.php">Amounts Paid</a></li>
	</ul>
<br>
</div>
<hr>
<br>
<div class="main-title">
<h2>MEMBERSHIP AND ACCOUNTING SYSTEM</h2>
</div>
<!-- IMPORTANT #2: change the H3 tag to match the title of YOUR specific wireframe -->
<div class="individual-page-title">	
	<h3>ATF Status (View/Update)</h3>
</div>
<br>
<!-- IMPORTANT #3: insert/paste YOUR code below to create the table, form, etc. -->

<center>
	<table class="user-table"> 
	<thead>
		 <th>Serial Number</th> 
		 <th>ATF Form Sent</th> 
		 <th>Date Sent</th> 
		 <th>Form Approved</th> 
		 <th>Comment</th> 
		 <th>Date Added</th> 
		 <th>Last Updated</th> 
		 <th>Updated By</th> 
 	</thead>
<tbody>

<?php
 include 'database.php';
 $pdo = Database::connect();
 $sql = 'SELECT * 
FROM atf
ORDER BY atf_serial_no DESC';

foreach ($pdo->query($sql) as $row) {
					echo '<tr>';
					echo '<td>'. $row['atf_serial_no'] . '</td>';
					echo '<td>'. $row['atf_status_cd'] . '</td>';
					echo '<td>'. $row['atf_form_sent_date'] . '</td>';
					echo '<td>'. $row['atf_form_approval_date'] . '</td>';
					echo '<td>'. $row['atf_comment'] . '</td>';
					echo '<td>'. $row['atf_date_added'] . '</td>';
					echo '<td>'. $row['atf_last_updated'] . '</td>';
					echo '<td>'. $row['atf_updated_by'] . '</td>';
					echo ' ';
					echo '</tr>';
 }
 Database::disconnect();
?>
<tbody>
</center> 

<!-- Page footer; please do not change. Footer should always be on the bottom of the page but not fixed. -->
<footer>
<p>This site is intended for personal use by the members of the Yokota Sportsmen&#39;s Club specifically for conducting club business. All rights reserved. Yokota Sportsmen&#39;s Club, Fussa-shi, Tokyo, Japan | Yokota Air Base, Tokyo, Japan</p>
