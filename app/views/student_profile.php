<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Student Profile</title>
<style>
  * { box-sizing: border-box; }
  body {
    font-family: 'Segoe UI', Arial, sans-serif;
    background: linear-gradient(135deg, #1e293b, #0f172a);
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
    color: #e2e8f0;
  }
  .box {
    background: #1e293b;
    padding: 35px 40px;
    border-radius: 16px;
    box-shadow: 0 8px 30px rgba(0,0,0,0.5);
    width: 340px;
    border: 1px solid #334155;
  }
  h1 { margin-top: 0; font-size: 22px; color: #f8fafc; text-align: center; margin-bottom: 20px; }
  .info { background: #0f172a; border-radius: 10px; padding: 15px 18px; margin-bottom: 20px; }
  .info p { margin: 8px 0; font-size: 14px; color: #cbd5e1; display: flex; justify-content: space-between; }
  .info span.label { color: #64748b; font-weight: 600; }
  .btn {
    display: block;
    width: 100%;
    padding: 12px;
    margin-top: 10px;
    border: none;
    border-radius: 8px;
    font-size: 15px;
    font-weight: 600;
    cursor: pointer;
    text-decoration: none;
    text-align: center;
    transition: 0.2s ease;
  }
  .btn-home { background: #3b82f6; color: #eff6ff; }
  .btn-home:hover { background: #2563eb; }
  .btn-logout { background: #ef4444; color: #450a0a; }
  .btn-logout:hover { background: #dc2626; }
</style>
</head>
<body>
  <div class="box">
    <h1>Student Information</h1>
    <div class="info">
      <p><span class="label">Student ID</span> <?= $student_id ?></p>
      <p><span class="label">Name</span> <?= $name ?></p>
      <p><span class="label">Course</span> <?= $course ?></p>
      <p><span class="label">Year Level</span> <?= $year ?></p>
      <p><span class="label">Section</span> <?= $section ?></p>
      <p><span class="label">Email</span> <?= $email ?></p>
    </div>
    <a href="<?= site_url('student') ?>" class="btn btn-home">Home</a>
    <a href="<?= site_url('student/logout') ?>" class="btn btn-logout">Log Out</a>
  </div>
</body>
</html>