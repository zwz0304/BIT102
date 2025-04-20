<?php
include 'connect.php';

$id = intval($_POST['id'] ?? 0);
$action = $_POST['action'] ?? '';

if ($id && $action) {
  if ($action === 'approve') {
    $conn->query("UPDATE feedback SET approved = 1 WHERE id = $id");
  } elseif ($action === 'delete') {
    $conn->query("DELETE FROM feedback WHERE id = $id");
  }
}

header("Location: admin.php");
exit;
?>
