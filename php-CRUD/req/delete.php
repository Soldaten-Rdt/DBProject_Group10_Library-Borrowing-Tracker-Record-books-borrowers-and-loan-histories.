<?php 
if (isset($_GET['id'])) {
    include "../db_conn.php";
    $id = $_GET['id'];
    
    try {
        $sql = "DELETE FROM users WHERE user_id=?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$id]);
        
        $sm = "Berhasil menghapus user!";
        header("Location: ../index.php?success=$sm");
        exit;
    } catch(PDOException $e) {
        $em = "Error: " . $e->getMessage();
        header("Location: ../index.php?error=$em");
        exit;
    }
} else {
    header("Location: ../index.php");
    exit;
}