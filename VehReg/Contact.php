<?php
$title="/Contact";
require'include/header.php';
require_once 'db/conn.php';
?> 
<br/>
<br/>
<table width="100%" height="650px" cellspacing="5px" cellpadding="5px" align="center">
<tr>
 <td align="center">
<h1 align="center"><span class="p1">Contact Us</span></h1>
<form name="contact" action="success.php" method="post">
 <div class="container p1">
 <label for="id">Customer ID</label>
 <input name="id" type="number" placeholder="Enter Your Customer ID" maxlength="50" required id="id" />
 <label for="fname">First Name</label>
 <input name="fname" type="text" placeholder="Enter Your First Name" maxlength="50" required id="fname" />
 <label for="lname">Last Name</label>
 <input name="lname" type="text" placeholder="Enter Your Last Name" maxlength="50" required id="lname" />
 <label for="email">Email</label>
 <input name="email" type="text" placeholder="Enter Your Email Address " maxlength="50" required  id="email" />
 <label for="number">Contact Number</label>
 <input name="number" type="text" placeholder="Enter Your Contact Number" maxlength="11" required id="number" />
 <label for="comment">Your Message</label><br/>
 <textarea name="comment" cols="45" rows="5" id="coment">
 </textarea>
 </div>
<button type="submit"  name="submit" >SUBMIT</button>
 </form>
 </td>
 </tr>
 </table>
 <br/>
 <a href="index.php"><button type="button">BACK HOME</button></a>
 <?php require'include/footer.php'?>