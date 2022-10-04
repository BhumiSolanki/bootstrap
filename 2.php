<body>
<div class="container mt-5">
<form method"post" action="1.php">
<input type ="text" name="txtnm" class="form>
control"placholder="name"reguard>
<input type="submit" value="display" class="btn
btn.primary">
</form>
</div>
</body>
</html>
<?php
 if(isset($_REQUEST['txtnm']))
 {
   $nm=$REQUEST['txtnm'];
   echo$nm;
 }
?>