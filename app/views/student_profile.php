<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Student Profile</title>
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
    width: 320px;
  }
  h1 {
    margin-top: 0;
    font-size: 22px;
    color: #333;
    text-align: center;
  }
  .info p {
    margin: 6px 0;
    color: #444;
    font-size: 14px;
  }
  .info span {
    font-weight: bold;
    color: #222;
  }
  .nav {
    margin-top: 20px;
    text-align: center;
  }
  .nav a {
    text-decoration: none;
    color: #2b6cb0;
    font-weight: bold;
    margin-right: 10px;
  }
  .nav a:hover {
    text-decoration: underline;
  }
</style>
</head>
<body>
  <div class="box">
    <h1>Student Information</h1>
    <div class="info">
      <p><span>Student ID:</span> <?= $student_id ?></p>
      <p><span>Name:</span> <?= $name ?></p>
      <p><span>Course:</span> <?= $course ?></p>
      <p><span>Year Level:</span> <?= $year ?></p>
      <p><span>Section:</span> <?= $section ?></p>
      <p><span>Email:</span> <?= $email ?></p>
    </div>
    <div class="nav">
      <a href="<?= site_url('student') ?>">Home</a>
      <a href="<?= site_url('student/profile') ?>">Student Profile</a>
    </div>
  </div>
</body>
</html>