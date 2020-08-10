<?php 
    include '../includes/session.php';
    include '../includes/conn.php';

	if(isset($_POST['id'])){
		$id = $_POST['id'];
		$sql = "SELECT * FROM products WHERE id = '$id'";
		$query = $DBH->query($sql);
        $row = $query->fetch_assoc();


		echo json_encode($row);
	}
?>