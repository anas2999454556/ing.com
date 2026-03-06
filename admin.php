<?php
require_once 'db.php';

try {
    $stmt = $pdo->query("SELECT * FROM users ORDER BY id DESC");
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Error fetching users: " . $e->getMessage());
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - View Users</title>
    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
            background-color: #fafafa;
            color: #262626;
            margin: 0;
            padding: 20px;
        }
        h1 {
            text-align: center;
            color: #262626;
        }
        .table-container {
            max-width: 1000px;
            margin: 0 auto;
            background: #fff;
            border: 1px solid #dbdbdb;
            border-radius: 4px;
            overflow-x: auto;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #dbdbdb;
            font-size: 14px;
        }
        th {
            background-color: #fafafa;
            font-weight: 600;
            color: #8e8e8e;
        }
        tr:hover {
            background-color: #fafafa;
        }
        tr:last-child td {
            border-bottom: none;
        }
        .empty-state {
            text-align: center;
            padding: 40px;
            color: #8e8e8e;
        }
    </style>
</head>
<body>

    <h1>Registered Users Dashboard</h1>
    
    <div class="table-container">
        <?php if (count($users) > 0): ?>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Registered At</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($users as $user): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($user['id']); ?></td>
                        <td><?php echo htmlspecialchars($user['first_name'] ?? ''); ?></td>
                        <td><?php echo htmlspecialchars($user['last_name'] ?? ''); ?></td>
                        <td><?php echo htmlspecialchars($user['email']); ?></td>
                        <td><?php echo htmlspecialchars($user['created_at'] ?? 'N/A'); ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php else: ?>
            <div class="empty-state">
                <p>No users found in the database.</p>
            </div>
        <?php endif; ?>
    </div>

</body>
</html>
