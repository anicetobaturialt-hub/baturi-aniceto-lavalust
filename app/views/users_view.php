<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>User Directory</title>

<style>
    * {
        box-sizing: border-box;
    }

    body {
        margin: 0;
        padding: 50px 20px;
        font-family: Arial, Helvetica, sans-serif;
        background: #080808;
        color: #111;
    }

    /* Main forum container */
    .forum {
        width: 100%;
        max-width: 1050px;
        margin: auto;
    }

    /* Header */
    .forum-header {
        background: #111;
        border: 1px solid #292929;
        border-bottom: none;
        padding: 22px 28px;
        color: white;
        border-radius: 10px 10px 0 0;
    }

    .forum-header h1 {
        margin: 0;
        font-size: 24px;
        letter-spacing: 0.5px;
    }

    .forum-header p {
        margin: 7px 0 0;
        color: #888;
        font-size: 14px;
    }

    /* White content box */
    .content {
        background: #fff;
        padding: 25px;
        border-radius: 0 0 10px 10px;
        box-shadow: 0 15px 40px rgba(0, 0, 0, 0.45);
    }

    /* Small forum-style bar */
    .toolbar {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 18px;
        padding-bottom: 15px;
        border-bottom: 1px solid #ddd;
    }

    .toolbar-title {
        font-size: 15px;
        font-weight: bold;
        color: #333;
    }

    .user-count {
        background: #111;
        color: #fff;
        padding: 6px 12px;
        border-radius: 20px;
        font-size: 12px;
    }

    /* Table */
    table {
        width: 100%;
        border-collapse: collapse;
        overflow: hidden;
        border: 1px solid #ddd;
    }

    th {
        background: #171717;
        color: #fff;
        padding: 13px 15px;
        text-align: left;
        font-size: 13px;
        letter-spacing: 0.4px;
    }

    td {
        padding: 13px 15px;
        border-bottom: 1px solid #e5e5e5;
        font-size: 14px;
        color: #333;
    }

    tbody tr {
        transition: 0.15s ease;
    }

    tbody tr:hover {
        background: #f1f1f1;
    }

    tbody tr:last-child td {
        border-bottom: none;
    }

    /* ID styling */
    td:first-child {
        width: 60px;
        color: #888;
        font-weight: bold;
    }

    /* Username */
    td:last-child {
        font-weight: bold;
        color: #111;
    }

    /* Mobile */
    @media (max-width: 700px) {
        body {
            padding: 20px 10px;
        }

        .content {
            padding: 15px;
            overflow-x: auto;
        }

        table {
            min-width: 700px;
        }

        .forum-header {
            padding: 18px;
        }
    }
</style>
</head>

<body>

<div class="forum">

    <div class="forum-header">
        <h1>User Directory</h1>
        <p>Community members and account information</p>
    </div>

    <div class="content">

        <div class="toolbar">
            <span class="toolbar-title">Registered Users</span>

            <span class="user-count">
                <?= count($users) ?> Users
            </span>
        </div>

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

    </div>

</div>

</body>
</html>