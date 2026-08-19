<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Student Home</title>
<style>
  body {
    font-family: Arial, sans-serif;
    background: #f4f4f4;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
  }
  .box {
    background: #fff;
    padding: 30px 40px;
    border-radius: 8px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.15);
    text-align: center;
    width: 320px;
  }
  h1 {
    margin-top: 0;
    font-size: 22px;
    color: #333;
  }
  p {
    color: #555;
  }
  .nav a {
    display: inline-block;
    margin-top: 15px;
    margin-right: 10px;
    text-decoration: none;
    color: #2b6cb0;
    font-weight: bold;
  }
  .nav a:hover {
    text-decoration: underline;
  }
</style>
</head>
<body>
  <div class="box">
    <h1><?= $title ?? 'Student Home' ?></h1>
    <p>Welcome to the Student Information System.</p>
    <div class="nav">
      <a href="<?= site_url('student') ?>">Home</a>
      <a href="<?= site_url('student/profile') ?>">Student Profile</a>
    </div>
  </div>
</body>
</html>