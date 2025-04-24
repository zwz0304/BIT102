<?php
session_start();
if (!isset($_SESSION["admin_logged_in"])) {
    header("Location: admin_login.php");
    exit;
}
include 'connect.php';

$result = $conn->query("SELECT * FROM feedback ORDER BY created_at DESC");
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Feedback Admin Panel</title>
  <style>
    body { font-family: Arial; margin: 20px; background: #f2f2f2; }
    table { width: 100%; border-collapse: collapse; background: white; }
    th, td { border: 1px solid #ccc; padding: 8px; text-align: left; }
    .btn { padding: 6px 10px; cursor: pointer; }
    .approve { background-color: green; color: white; }
    .delete { background-color: red; color: white; }
  </style>
</head>
<body>
<div class="top-bar">
    <a href="logout.php">Logout</a>
  </div>
  <h2>Feedback Management</h2>
  <table>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Rating</th>
      <th>Comment</th>
      <th>Status</th>
      <th>Actions</th>
    </tr>

    <?php while ($row = $result->fetch_assoc()): ?>
    <tr>
      <td><?= $row['id'] ?></td>
      <td><?= htmlspecialchars($row['name']) ?></td>
      <td><?= str_repeat('⭐', $row['rating']) ?></td>
      <td><?= htmlspecialchars($row['comment']) ?></td>
      <td><?= $row['approved'] ? '✅ Approved' : '❌ Pending' ?></td>
      <td>
        <?php if (!$row['approved']): ?>
        <form action="admin_action.php" method="POST" style="display:inline;">
          <input type="hidden" name="id" value="<?= $row['id'] ?>">
          <input type="hidden" name="action" value="approve">
          <button class="btn approve" type="submit">Approve</button>
        </form>
        <?php endif; ?>
        <form action="admin_action.php" method="POST" style="display:inline;">
          <input type="hidden" name="id" value="<?= $row['id'] ?>">
          <input type="hidden" name="action" value="delete">
          <button class="btn delete" type="submit" onclick="return confirm('Are you sure you want to delete this comment?')">Delete</button>
        </form>
      </td>
    </tr>
    <?php endwhile; ?>
  </table>
</body>
</html>
