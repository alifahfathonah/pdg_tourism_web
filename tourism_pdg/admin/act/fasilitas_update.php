<?php
include ('../../../connect.php');

$id	= $_POST['id_fasilitas'];
$fasilitas = $_POST['fasilitas'];

$sql  = "UPDATE facility_tourism SET name = '$fasilitas' WHERE id = '$id'";
$insert = mysqli_query($conn, $sql);

if ($insert)
{
	echo "<script>alert ('Data Successfully Change');</script>";
}
else
{
	echo "<script>alert ('Error');</script>";
}
	echo "<script>
		eval(\"parent.location='../?page=fasilitas'\");
		</script>";
?>