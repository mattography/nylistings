<!DOCTYPE html>
<!------SO YOU WANT TO CHECK UNDER THE HOOD, HUH? LET ME KNOW WHAT YOU THINK: mattography-at-gmail-dot-com----->
<html>
    <head><meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
        <title>NY Apartment Listings</title>
        <link href="default.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div id="content">
            <h1>New York Apartment Talk</h1>
            <center><ul id="nav">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="#">Search Listings By</a>
                        <ul>
                            <li><a href="zip.html">Zip</a></li>
                            <li><a href="#">Neighborhood</a>
                        </ul>
                    </li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul></center>
            <br>
            <br>
            <p><a href="http://www.nyapartmenttalk.com">NY Apartment Talk</a> is a place where you can get the nitty gritty information on your apartment BEFORE you move in.</p>
            <br>
            <p>You spent your time apartment hunting, found that perfect place to live, signed the lease, put your security deposit down and finally moved in! Congratulations!</p>
            Only now after you've done all the hard work are you discovering the REAL story.</p>
        <br>
        <p>NY Apartment Talk is a place that allows former tennants to rate an apartment, unit, or building on several different levels so new tennants can get a feel for how comfortable that living environment would be.</p>
        <br><br>
        <?php
        include('connect-db.php');
        $result = mysql_query("select * from listing LIMIT 1") // EDIT HERE and specify your table and field names for the SQL query) 
                or die(mysql_error());
        while ($row = mysql_fetch_array($result)) {

            echo '<div id="defaultWrapper">
					  <div class="master_main clearfix">                      
						  <div id="status_message"></div>
							  <div class="acct_section_title"><label for="CurrentPurchases">LATEST LISTINGS: ' . $row['ADDR_NUM'] . ' ' . $row['ADDR_STR'] . '<div class="clr"></div></div>
								  <div class="acct_section_content no_pad">
									  <div class="acct_info_row">
									  <div class="acct_sub_section">
									  <span class="mrt_label">Neighborhood:</span> ' . $row['NEIGHBORHOOD'] . '<br>
									  <span class="mrt_label">Comments:</span> ' . $row['COMMENTS'] . '<br>
									  
								  </div>
							  </div>
						  </div>
					  </div>';
        }
        ?>
    </div>

</body>
</html> 