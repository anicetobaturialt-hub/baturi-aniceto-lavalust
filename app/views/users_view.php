<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>User List</title>
<style>
  body { font-family: Arial, sans-serif; background: #f4f4f4; padding: 40px; }
  table { border-collapse: collapse; width: 100%; max-width: 800px; margin: auto; background: #fff; }
  th, td { border: 1px solid #ddd; padding: 10px 14px; text-align: left; }
  th { background: #2b6cb0; color: #fff; }
  tr:nth-child(even) { background: #f9f9f9; }
</style>
</head>
<body>
<table>
  <thead>
    <tr>
      <th>ID</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Email</th>
      <th>Username</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($users as $user): ?>
    <tr>
      <td><?= $user['id'] ?></td>
      <td><?= $user['firstname'] ?></td>
      <td><?= $user['lastname'] ?></td>
      <td><?= $user['email'] ?></td>
      <td><?= $user['username'] ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
</body>
</html>