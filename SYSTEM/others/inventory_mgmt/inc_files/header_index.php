<?php
	include_once("inc_files/inventory.php");
	$getname = mysql_query("SELECT * FROM hos_data") or die(mysql_error());
	$rowN = mysql_fetch_array($getname);
	$name = $rowN['Name'];
	$address = $rowN['Address'];
?>
<div id="sitename"><p><?php echo $name; ?> <br />
        <?php echo $address; ?></p>
</div>
<?php if(@$_SESSION['uname']=="admlog"){ ?>
  <div id="welcome">Welcome Administrator</div>
<?php }?>
<?php if(@$_SESSION['uname']=="uslog")
{ ?>
  <div id="welcome">Usertpe: <?php echo $_SESSION['utype'];?> <br />Welcome: <?php echo $_SESSION['jname']; ?><img src="<?php echo "../passport".@$_SESSION['pass'];?>" width="100px" height="100px" style="padding-top:4px; padding-bottom:10px; float:right" />
</div>
<?php }?>
