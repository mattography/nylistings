<!DOCTYPE html>
<!------SO YOU WANT TO CHECK UNDER THE HOOD, HUH? LET ME KNOW WHAT YOU THINK: mattography-at-gmail-dot-com----->
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Search Results</title>
<link href="mrt_base_style.css" rel="stylesheet" type="text/css">
<style>

html, body
{
    height: 100%;
	background-image: url('http://www.usewa.com/files/attach/images/68/107/452/new-york-manhattan-1920x1080-wallpaper-4898.jpg') no-repeat;
}

body
{
    font: 12px 'Lucida Sans Unicode', 'Trebuchet MS', Arial, Helvetica;    
    margin: 0;
    background-color: #d9dee2 url(http://www.red-team-design.com/wp-content/uploads/2011/09/login-sprite.png) no-repeat;
    background-image: -webkit-gradient(linear, left top, left bottom, from(#ebeef2), to(#d9dee2));
    background-image: -webkit-linear-gradient(top, #ebeef2, #d9dee2);
    background-image: -moz-linear-gradient(top, #ebeef2, #d9dee2);
    background-image: -ms-linear-gradient(top, #ebeef2, #d9dee2);
    background-image: -o-linear-gradient(top, #ebeef2, #d9dee2);
    background-image: linear-gradient(top, #ebeef2, #d9dee2);    
}


#content
{
    background-color: #fff;
    background-image: -webkit-gradient(linear, left top, left bottom, from(#fff), to(#eee));
    background-image: -webkit-linear-gradient(top, #fff, #eee);
    background-image: -moz-linear-gradient(top, #fff, #eee);
    background-image: -ms-linear-gradient(top, #fff, #eee);
    background-image: -o-linear-gradient(top, #fff, #eee);
    background-image: linear-gradient(top, #fff, #eee);  
    height: 500px;
    width: 800px;
    margin: -150px 0 0 -230px;
    padding: 30px;
    position: absolute;
    top: 30%;
    left: 38%;
    z-index: 0;
    -moz-border-radius: 3px;
    -webkit-border-radius: 3px;
    border-radius: 3px;  
    -webkit-box-shadow:
          0 0 2px rgba(0, 0, 0, 0.2),
          0 1px 1px rgba(0, 0, 0, .2),
          0 3px 0 #fff,
          0 4px 0 rgba(0, 0, 0, .2),
          0 6px 0 #fff,  
          0 7px 0 rgba(0, 0, 0, .2);
    -moz-box-shadow:
          0 0 2px rgba(0, 0, 0, 0.2),  
          1px 1px   0 rgba(0,   0,   0,   .1),
          3px 3px   0 rgba(255, 255, 255, 1),
          4px 4px   0 rgba(0,   0,   0,   .1),
          6px 6px   0 rgba(255, 255, 255, 1),  
          7px 7px   0 rgba(0,   0,   0,   .1);
    box-shadow:
          0 0 2px rgba(0, 0, 0, 0.2),  
          0 1px 1px rgba(0, 0, 0, .2),
          0 3px 0 #fff,
          0 4px 0 rgba(0, 0, 0, .2),
          0 6px 0 #fff,  
          0 7px 0 rgba(0, 0, 0, .2);
		  
	-webkit-box-shadow: 0 0 4px rgba(0, 0, 0, 0.2), inset 0 0 50px rgba(0, 0, 0, 0.1);  
    -moz-box-shadow: 0 0 4px rgba(0, 0, 0, 0.2), inset 0 0 50px rgba(0, 0, 0, 0.1);  
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.2), inset 0 0 50px rgba(0, 0, 0, 0.1);
}



#login:before
{
    content: '';
    position: absolute;
    z-index: -1;
    border: 1px dashed #ccc;
    top: 5px;
    bottom: 5px;
    left: 5px;
    right: 5px;
    -moz-box-shadow: 0 0 0 1px #fff;
    -webkit-box-shadow: 0 0 0 1px #fff;
    box-shadow: 0 0 0 1px #fff;
}

#content:before
{
    content: '';
    position: absolute;
    z-index: -1;
    border: 1px dashed #ccc;
    top: 5px;
    bottom: 5px;
    left: 5px;
    right: 5px;
    -moz-box-shadow: 0 0 0 1px #fff;
    -webkit-box-shadow: 0 0 0 1px #fff;
    box-shadow: 0 0 0 1px #fff;
}

/*--------------------*/

h1
{
    text-shadow: 0 1px 0 rgba(255, 255, 255, .7), 0px 2px 0 rgba(0, 0, 0, .5);
    text-transform: uppercase;
    text-align: center;
    color: #666;
    margin: 0 0 30px 0;
    letter-spacing: 4px;
    font: normal 26px/1 Verdana, Helvetica;
    position: relative;
}

h1:after, h1:before
{
    background-color: #777;
    content: "";
    height: 1px;
    position: absolute;
    top: 15px;
    width: 120px;   
}

h1:after
{ 
    background-image: -webkit-gradient(linear, left top, right top, from(#777), to(#fff));
    background-image: -webkit-linear-gradient(left, #777, #fff);
    background-image: -moz-linear-gradient(left, #777, #fff);
    background-image: -ms-linear-gradient(left, #777, #fff);
    background-image: -o-linear-gradient(left, #777, #fff);
    background-image: linear-gradient(left, #777, #fff);      
    right: 0;
}

h1:before
{
    background-image: -webkit-gradient(linear, right top, left top, from(#777), to(#fff));
    background-image: -webkit-linear-gradient(right, #777, #fff);
    background-image: -moz-linear-gradient(right, #777, #fff);
    background-image: -ms-linear-gradient(right, #777, #fff);
    background-image: -o-linear-gradient(right, #777, #fff);
    background-image: linear-gradient(right, #777, #fff);
    left: 0;
}

/*--------------------*/

fieldset
{
    border: 0;
    padding: 0;
    margin: 0;
}

/*--------------------*/

#inputs input
{
    background: #f1f1f1 url(http://www.red-team-design.com/wp-content/uploads/2011/09/login-sprite.png) no-repeat;
    padding: 15px 15px 15px 30px;
    margin: 0 0 10px 0;
    width: 253px; /* 353 + 2 + 45 = 400 */
    border: 1px solid #ccc;
    -moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    border-radius: 5px;
    -moz-box-shadow: 0 1px 1px #ccc inset, 0 1px 0 #fff;
    -webkit-box-shadow: 0 1px 1px #ccc inset, 0 1px 0 #fff;
    box-shadow: 0 1px 1px #ccc inset, 0 1px 0 #fff;
}

#username
{
    background-position: 5px -2px !important;
}

#password
{
    background-position: 5px -52px !important;
}

#inputs input:focus
{
    background-color: #fff;
    border-color: #e8c291;
    outline: none;
    -moz-box-shadow: 0 0 0 1px #e8c291 inset;
    -webkit-box-shadow: 0 0 0 1px #e8c291 inset;
    box-shadow: 0 0 0 1px #e8c291 inset;
}

/*--------------------*/
#actions
{
    margin: 25px 0 0 0;
}

#submit
{		
    background-color: #ffb94b;
    background-image: -webkit-gradient(linear, left top, left bottom, from(#fddb6f), to(#ffb94b));
    background-image: -webkit-linear-gradient(top, #fddb6f, #ffb94b);
    background-image: -moz-linear-gradient(top, #fddb6f, #ffb94b);
    background-image: -ms-linear-gradient(top, #fddb6f, #ffb94b);
    background-image: -o-linear-gradient(top, #fddb6f, #ffb94b);
    background-image: linear-gradient(top, #fddb6f, #ffb94b);
    
    -moz-border-radius: 3px;
    -webkit-border-radius: 3px;
    border-radius: 3px;
    
    text-shadow: 0 1px 0 rgba(255,255,255,0.5);
    
     -moz-box-shadow: 0 0 1px rgba(0, 0, 0, 0.3), 0 1px 0 rgba(255, 255, 255, 0.3) inset;
     -webkit-box-shadow: 0 0 1px rgba(0, 0, 0, 0.3), 0 1px 0 rgba(255, 255, 255, 0.3) inset;
     box-shadow: 0 0 1px rgba(0, 0, 0, 0.3), 0 1px 0 rgba(255, 255, 255, 0.3) inset;    
    
    border-width: 1px;
    border-style: solid;
    border-color: #d69e31 #e3a037 #d5982d #e3a037;

    float: left;
    height: 35px;
    padding: 0;
    width: 120px;
    cursor: pointer;
    font: bold 15px Arial, Helvetica;
    color: #8f5a0a;
}

#submit:hover,#submit:focus
{		
    background-color: #fddb6f;
    background-image: -webkit-gradient(linear, left top, left bottom, from(#ffb94b), to(#fddb6f));
    background-image: -webkit-linear-gradient(top, #ffb94b, #fddb6f);
    background-image: -moz-linear-gradient(top, #ffb94b, #fddb6f);
    background-image: -ms-linear-gradient(top, #ffb94b, #fddb6f);
    background-image: -o-linear-gradient(top, #ffb94b, #fddb6f);
    background-image: linear-gradient(top, #ffb94b, #fddb6f);
}	

#submit:active
{		
    outline: none;
   
     -moz-box-shadow: 0 1px 4px rgba(0, 0, 0, 0.5) inset;
     -webkit-box-shadow: 0 1px 4px rgba(0, 0, 0, 0.5) inset;
     box-shadow: 0 1px 4px rgba(0, 0, 0, 0.5) inset;		
}

#submit::-moz-focus-inner
{
  border: none;
}

#actions a
{
    color: #3151A2;    
    float: right;
    line-height: 35px;
    margin-left: 10px;
}

/*--------------------*/

#back
{
    display: block;
    text-align: center;
    position: relative;
    top: 60px;
    color: #999;
}



/*-------NAVIGATION STYLE---------*/
a {
	color: #333;
}
#nav {
	margin: 0;
	width: 100%;
	padding: 7px 6px 0;
	background: #7d7d7d url(img/gradient.png) repeat-x 0 -110px;
	line-height: 100%;
	    z-index: 2;
	border-radius: 2em;
	-webkit-border-radius: 2em;
	-moz-border-radius: 2em;

	-webkit-box-shadow: 0 1px 3px rgba(0,0,0, .4);
	-moz-box-shadow: 0 1px 3px rgba(0,0,0, .4);
}
#nav li {
	margin: 0 5px;
	padding: 0 0 8px;
	float: left;
	position: relative;
	list-style: none;
}


/* main level link */
#nav a {
	font-weight: bold;
	color: #e7e5e5;
	text-decoration: none;
	display: block;
	padding:  8px 20px;
	margin: 0;

	-webkit-border-radius: 1.6em;
	-moz-border-radius: 1.6em;
	
	text-shadow: 0 1px 1px rgba(0,0,0, .3);
}
#nav a:hover {
	background: #000;
	color: #fff;
}

/* main level link hover */
#nav .current a, #nav li:hover > a {
	background: #666 url(img/gradient.png) repeat-x 0 -40px;
	color: #fff;
	border-top: solid 1px #f8f8f8;

	-webkit-box-shadow: 0 1px 1px rgba(0,0,0, .2);
	-moz-box-shadow: 0 1px 1px rgba(0,0,0, .2);
	box-shadow: 0 1px 1px rgba(0,0,0, .2);

	text-shadow: 0 1px 0 rgba(255,255,255, 1);
}

/* sub levels link hover */
#nav ul li:hover a, #nav li:hover li a {
	background: none;
	border: none;
	color: #666;

	-webkit-box-shadow: none;
	-moz-box-shadow: none;
}
#nav ul a:hover {
	background: #0078ff url(img/gradient.png) repeat-x 0 -100px !important;
	color: #fff !important;

	-webkit-border-radius: 0;
	-moz-border-radius: 0;

	text-shadow: 0 1px 1px rgba(0,0,0, .1);
}

/* dropdown */
#nav li:hover > ul {
	display: block;
}

/* level 2 list */
#nav ul {
	display: none;

	margin: 0;
	padding: 0;
	width: 185px;
	position: absolute;
	top: 35px;
	left: 0;
	background: #ddd url(img/gradient.png) repeat-x 0 0;
	border: solid 1px #b4b4b4;

	-webkit-border-radius: 10px;
	-moz-border-radius: 10px;
	border-radius: 10px;

	-webkit-box-shadow: 0 1px 3px rgba(0,0,0, .3);
	-moz-box-shadow: 0 1px 3px rgba(0,0,0, .3);
	box-shadow: 0 1px 3px rgba(0,0,0, .3);
}
#nav ul li {
	float: none;
	margin: 0;
	padding: 0;
}

#nav ul a {
	font-weight: normal;
	text-shadow: 0 1px 0 #fff;
}

/* level 3+ list */
#nav ul ul {
	left: 181px;
	top: -3px;
}

/* rounded corners of first and last link */
#nav ul li:first-child > a {
	-webkit-border-top-left-radius: 9px;
	-moz-border-radius-topleft: 9px;

	-webkit-border-top-right-radius: 9px;
	-moz-border-radius-topright: 9px;
}
#nav ul li:last-child > a {
	-webkit-border-bottom-left-radius: 9px;
	-moz-border-radius-bottomleft: 9px;

	-webkit-border-bottom-right-radius: 9px;
	-moz-border-radius-bottomright: 9px;
}

/* clearfix */
#nav:after {
	content: ".";
	display: block;
	clear: both;
	visibility: hidden;
	line-height: 0;
	height: 0;
}
#nav {
	display: inline-block;
} 
html[xmlns] #nav {
	display: block;
}
 
* html #nav {
	height: 1%;
}
/*--------------------------------*/

#search, #submit
        {
            float: left;
        }
        

#search
        {
            padding: 5px 2px;
            height: 23px;
            width: 380px;
            border: 1px solid #a4c3ca;
            font: normal 13px 'trebuchet MS', arial, helvetica;
            background: #f1f1f1;
            
            -moz-border-radius: 50px 3px 3px 50px;
             border-radius: 50px 3px 3px 50px;
             -moz-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.25) inset, 0 1px 0 rgba(255, 255, 255, 1);
             -webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.25) inset, 0 1px 0 rgba(255, 255, 255, 1);
             box-shadow: 0 1px 3px rgba(0, 0, 0, 0.25) inset, 0 1px 0 rgba(255, 255, 255, 1);            
        }
		
		/* ----------------------- */
		
		#submit
		{		
            background: #6cbb6b;
            background-image: -moz-linear-gradient(#95d788, #6cbb6b);
            background-image: -webkit-gradient(linear,left bottom,left top,color-stop(0, #6cbb6b),color-stop(1, #95d788));
            
            -moz-border-radius: 3px 50px 50px 3px;
            border-radius: 3px 50px 50px 3px;
            
            border-width: 1px;
            border-style: solid;
            border-color: #7eba7c #578e57 #447d43;
            
             -moz-box-shadow: 0 0 1px rgba(0, 0, 0, 0.3), 0 1px 0 rgba(255, 255, 255, 0.3) inset;
             -webkit-box-shadow: 0 0 1px rgba(0, 0, 0, 0.3), 0 1px 0 rgba(255, 255, 255, 0.3) inset;
             box-shadow: 0 0 1px rgba(0, 0, 0, 0.3), 0 1px 0 rgba(255, 255, 255, 0.3) inset;   		

			height: 35px;
			margin: 0 0 0 10px;
			padding: 0;
			width: 90px;
			cursor: pointer;
			font: bold 14px Arial, Helvetica;
			color: #23441e;
			
			text-shadow: 0 1px 0 rgba(255,255,255,0.5);
		}
		
		#submit:hover
		{		
            background: #95d788;
            background-image: -moz-linear-gradient(#6cbb6b, #95d788);
            background-image: -webkit-gradient(linear,left bottom,left top,color-stop(0, #95d788),color-stop(1, #6cbb6b));
		}	

		#submit:active
		{		
            background: #95d788;
			outline: none;
           
             -moz-box-shadow: 0 1px 4px rgba(0, 0, 0, 0.5) inset;
             -webkit-box-shadow: 0 1px 4px rgba(0, 0, 0, 0.5) inset;
             box-shadow: 0 1px 4px rgba(0, 0, 0, 0.5) inset;		
		}

		#submit::-moz-focus-inner
		{
		  border: none;
		}		
		
		/* ----------------------- */
        
        #search::-webkit-input-placeholder {
           color: #9c9c9c;
           font-style: italic;
        }
        
        #search:-moz-placeholder {
           color: #9c9c9c;
           font-style: italic;
        }    
        
        #search.placeholder {
           color: #9c9c9c !important;
           font-style: italic;
        }  
        
        #search:focus
        {
            border-color: #8badb4;
            background: #fff;
            outline: none;
        }	
		

</style>
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

<?php
/* 
        VIEW.PHP
        Displays all data from 'listing' table
*/

        // connect to the database
        include('connect-db.php');

        // get results from database
        $result = mysql_query("SELECT * FROM listing") 
                or die(mysql_error());  
                
        // display data in table
        echo "<table border='0' cellpadding='5'>";
        echo "<tr> <th>Address</th> <th>Neighborhood</th> <th>Tenant Comments</th>";

        // loop through results of database query, displaying them in the table
        while($row = mysql_fetch_array( $result )) {
                
                // echo out the contents of each row into a table
                echo "<tr>";
                echo '<td bgcolor="CDCDC1">' . $row['ADDR_NUM'] . ' ' . $row['ADDR_STR'] . '</td>';
                echo '<td bgcolor="CDCDC1">' . $row['NEIGHBORHOOD'] . '</td>';
				echo '<td bgcolor="CDCDC1">' . $row['COMMENTS'] . '</td>';
                echo "</tr>"; 
        } 

        // close table>
        echo "</table>";
?>
</div>

</body>
</html> 