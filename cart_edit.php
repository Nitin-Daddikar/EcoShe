<?php
include('dbconfig.php');
if(isset($_GET['edit_id']))
{
  global $con;
 $sql_query="SELECT * FROM cart WHERE cart_id=".$_GET['edit_id'];
 $result_set = mysqli_query($con,$sql_query);
 $fetched_row = mysqli_fetch_array($result_set);
}

if(isset($_POST['btn-update']))
{
 
 $qty = $_POST['qty'];
 
 
 
 

 
 $sql_query = "UPDATE cart SET qty='$qty' WHERE cart_id=".$_GET['edit_id'];
 
 
 
 if(mysqli_query($con,$sql_query))
 {
  ?>
  <script type="text/javascript">
  alert('Data Are Updated Successfully');
  window.location.href='cart.php';
  </script>
  <?php
 }
 else
 {
  ?>
  <script type="text/javascript">
  alert('error occured while updating data');
  </script>
  <?php
 }
 
}
if(isset($_POST['btn-cancel']))
{
 header("Location: cart.php");
}
?>
<!DOCTYPE>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<center>

<div id="header">
 <div id="content">

    </div>
</div>

<div id="body">
 <div id="content">
    <form method="post">
    <table align="center">
    <tr>
    <td><input type="text" name="qty" placeholder="Quantity" value="<?php echo $fetched_row['qty']; ?>" required /></td>
    </tr>
    
    <tr>
    <td>
    <button type="submit" name="btn-update"><strong>UPDATE</strong></button>
    <button type="submit" name="btn-cancel"><strong>Cancel</strong></button>
    </td>
    </tr>
    </table>
    </form>
    </div>
</div>

</center>
</body>
</html>