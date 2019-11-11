<?php  
include_once 'includes/connection.php';
session_start();
$title=$_POST['title'];
$pro_status=$_POST['status'];
$progress=$_POST['progress'];
$category=$_POST['category'];
$keywords=$_POST['keywords'];
$documents=$_POST['documents'];
$due_date=$_POST['due_date'];

$query = "INSERT INTO project(title, pro_status,progress,category,keywords,documents,location,due_date) VALUES ('$title','$pro_status','$progress','$category','$keywords','$documents','$due_date')";
if ($connection->query($query) === TRUE) {
    echo "<script type='text/javascript'>alert('Successfully Added! We Review! We Confirm!');
    window.location.href = 'addingnewproject.php'</script>";
} else {
    echo "<script type='text/javascript'>alert('Error!');
    window.location.href = 'addingnewproject.php'</script>";
}
$connection->close();
?>
