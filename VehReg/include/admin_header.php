  
<!DOCTYPE html>
<html lang="eng">
<head>
  <title>Home<?php echo $title ?></title>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width,intial-scale=1.0,maximum-scale=1,user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="HandheldFriendly" content="true">

   <style type="text/css">
    body{
		background-color:white;
	}
    html {
	   font-size:100%; 
	}
	.text{
		color:#000000;
	}
	input{
		width:600px;
		padding:12px;
		margin:8px 0;
		border:1px solid #ccc;
		box-sizing:border-box;
		display:block;
	}
	.p1{
		font-family:Arial, Helveica, sans-serif, "Times New Roman";
	}
	.bbutton{
		width:300px;
		background-color:#04aa6D;
		color:white;
		margin:8px 0;
		padding:14px 20px;
		border-color:#04aa6D;
		cursor:pointer;
		border-radius:10px;
	}
	button:hover{
		opacity:0.8;
	}
	a:link{
		color:#000000;
		text-decoration:none;
	}
	a:hover{
		color:#FFFF00;
		text-decoration:underline;
	}
	a:active{
		color:#03befc;
		text-decoration:none;
	}
	a:visited{
		color:#000000;
		text-decoration:none;
	}
	ul{
		height:600px;
		width:300px;
		background-color:rgba(255,255,255,0.13);
		border-radius:10px;
		padding:50px 25px;
		list-style-type: none;
		display:inline-grid;
	}
	.cont{
		position:relative;
	}
	@media screen and (max-width: 768px) {
		.text, input, .p1, button, ul, .word, .cont {
			width: 100%;
		}
		#primary { width:100%; }
        #secondary { width:100%; margin:0; border:none; }
	}
	@media (min-width: 640px) {
		body {font-size:1rem;} 
	}  
	select{
		text-decoration:none;
		border-color:white;
		box-sizing:none;
	}
	.dropbtn {
		background-color: white;
        color: black;
        font-size: 15px;
        border: none;
        cursor: pointer;
		width:80px;
    }
    .dropdown {
		position: relative;
        display: inline-block;
    }
    .dropdown-content {
		display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 150px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
    }
    .dropdown-content a {
		color: black;
		padding: 12px 16px;
		text-decoration: none;
		display: block;
    }
    .dropdown-content a:hover {background-color: #f1f1f1}

    .dropdown:hover .dropdown-content {
		display: block;
    }
   .dropdown:hover .dropbtn {
	   background-color: white;
    }
	.abutton{
		width:70px;
		background-color:#d9d9d9;
		color:black;
		padding:8px;
		border-color:#04aa6D;
		cursor:pointer;
		border-radius:10px;
		text-align:center;
	}
  </style>
</head>
<body>
<div class="text" class="p1">
  <table width="100%" height="100px" cellspacing="3" cellpadding="3" align="center">
    <tr>
	 <td align="left"><img src="logo.png" width="350px" height="150px" style="border-radius:10px;"></td>
	 <td>
	  <table width="600px" height="100px" cellspacing="5" cellpadding="5" align="right">
	    <tr>
		 <td align="right" style="font-size: 17px;"><a href="index1.php"><span class="p1" class="text">Home</span></a></td>
		 <td align="right">
         <div class="dropdown">
         <button class="dropbtn">Registration</button>
         <div class="dropdown-content">
         <a href="viewcustomer.php">View Customer</a>
         <a href="viewvehicle.php"> View Vehicle</a>
         <a href="viewdl.php">View Driver License</a>
         <a href="viewbooking.php">View Vehicle Booking</a>
         </div>
         </div>
		 </td>
		 <td align="center" style="font-size: 14px;"><a href="logs.php"><span class="p1" class="text">Booking Details</span></a></td>
		<td align="left"><a href="logout.php" style="font-size: 16px;"><span class="p1" class="text">Logout</span></a></td>
		</tr>
      </table>	  
	 </td>
	</tr> 
  </table>	
</div>