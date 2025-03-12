<?php
include 'database.php';
if(isset($_GET['myid'])){
$id = $_GET['myid'];

$sql = "DELETE from tblemployee where ipkemployeeid = $id";
$result = mysqli_query($con,$sql);
if ($result){
    echo "<script>
    alert('Deleted Successfully');
    window.location.href='Index.php';
</script>";
}else{
    echo "<script>alert('Successfully Error Occured')</script>";
    die(mysqli_error($con));
}

}


?>