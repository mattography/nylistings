<?php
	require_once('auth.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="apple-touch-icon" href="icon.png">
<link rel="apple-touch-startup-image" href="splash_screen.png" 
<meta name="apple-mobile-web-app-status-bar-style" content="black-transparent" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"/>
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Nelson>Elite</title>
<link href="loginmodule.css" rel="stylesheet" type="text/css" />


<link href="mrt_base_style.css" rel="stylesheet" type="text/css">
</head>
<body>
<center>
	<!---CONTENT---->
	<?php
/* 
        VIEW.PHP
        Displays all data from 'players' table
*/

        // connect to the database
        include('connect-db.php');
		
		// Get the search variable from URL

				  $var = @$_GET['q'] ;
				  $trimmed = trim($var); //trim whitespace from the stored variable

				// rows to return
				$limit=10; 

				// check for an empty string and display a message.
				if ($trimmed == "")
				  {
				  echo "<p>Please enter a search...</p>";
				  exit;
				  }

				// check for a search parameter
				if (!isset($var))
				  {
				  echo "<p>We dont seem to have a search parameter!</p>";
				  exit;
				  }
		
		// get results from database
        $result = mysql_query("select * from listing where ADDR_STR like \"%$trimmed%\"  
								order by ID DESC") // EDIT HERE and specify your table and field names for the SQL query) 
                or die(mysql_error());  
                
        
        /*echo "<table border='0' cellpadding='1'>";
        echo "<tr> <td>ID</td><tr> <td>First Name</td><tr> <td>Last Name</td><tr> <td>Street</td><tr> <td>Yard Sign</td><tr> <td>Endorse</td></tr>";
		*/
        // loop through results of database query, displaying them in the table
        while($row = mysql_fetch_array( $result )) {
                
                echo '<div id="defaultWrapper">
          <div class="master_main clearfix">                      
			  <div id="status_message"></div>
				  <div class="acct_section_title"><label for="CurrentPurchases">' . $row['FIRSTNAME'] . ' ' . $row['LASTNAME'] . '<div class="clr"></div></div>
					  <div class="acct_section_content no_pad">
						  <div class="acct_info_row">
						  <div class="acct_sub_section">
						  <span class="mrt_label">ID:</span> ' . $row['ID'] . '<br>
						  <span class="mrt_label">Street:</span> ' . $row['ADDR_NUM'] . ' ' . $row['ADDR_STR'] . '  ' . $row['ADDR_TYPE'] . '<br>
						  <span class="mrt_label">Endorse:</span> ' . $row['Endorse'] . '<br>
						  <span class="mrt_label">Contribution:</span> ' . $row['Contribution'] . '<br>
						  <span class="mrt_label">Yard Sign:</span> ' . $row['Yardsign'] . '<br>
						  <span class="mrt_label">Volunteer:</span> ' . $row['Volunteer'] . '<br>
						  <a href="edit.php?id=' . $row['ID'] . '" data-role="button" data-inline="true" data-theme="b" rel="external"><span class="mrt_label">Edit Voter Info</span></a></td>
					  </div>
				  </div>
			  </div>
		  </div>';
				// echo out the contents of each row into a table
                /*echo '<td align='left'>ID</td><td>' . $row['id'] . '</td><br>';
                echo '<td>First Name:</td><td>' . $row['firstname'] . '</td><br>';
                echo '<td>Last Name</td><td>' . $row['lastname'] . '</td><br>';
				echo '<td>Street:</td><td>' . $row['street'] . '</td><br>';
				echo '<td>Yard Sign:</td><td>' . $row['yardsign'] . '</td><br>';
				echo '<td>Endorse:</td><td>' . $row['endorse'] . '</td><br>';
                echo '<td><a href="edit.php?id=' . $row['id'] . '">Edit</a></td>';
                echo '<td>&nbsp</td>';
				echo '<td><a href="delete.php?id=' . $row['id'] . '">Delete</a></td><br><br>';
                echo "</tr>";*/ 
        } 

        // close table>
        echo "</table>";
?>
<p><a href="new.php">Add a new record</a></p>
	<!-------------->
	
	
	<center><a href="http://kinetiktek.com/nelsonelite/logout.php" style="text-decoration:none">Logout</a></center>
	
</div><!-- /page -->
</center>
</body>
</html>
