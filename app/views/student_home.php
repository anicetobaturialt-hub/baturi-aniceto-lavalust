<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title><?= $title ?? 'Student Home' ?></title>
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
    padding: 40px 45px;
    border-radius: 16px;
    box-shadow: 0 8px 30px rgba(0,0,0,0.5);
    text-align: center;
    width: 340px;
    border: 1px solid #334155;
  }
  h1 { margin-top: 0; font-size: 22px; color: #f8fafc; }
  p.sub { color: #94a3b8; font-size: 14px; margin-bottom: 25px; }
  .status {
    display: inline-block;
    padding: 6px 14px;
    border-radius: 20px;
    font-size: 13px;
    font-weight: 600;
    margin-bottom: 20px;
  }
  .status.online { background: #14532d; color: #4ade80; }
  .status.offline { background: #3f2020; color: #f87171; }
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
    transition: 0.2s ease;
  }
  .btn-login { background: #22c55e; color: #052e16; }
  .btn-login:hover { background: #16a34a; }
  .btn-logout { background: #ef4444; color: #450a0a; }
  .btn-logout:hover { background: #dc2626; }
  .btn-profile { background: #3b82f6; color: #eff6ff; }
  .btn-profile:hover { background: #2563eb; }
  .btn-disabled {
    background: #334155;
    color: #64748b;
    cursor: not-allowed;
  }
</style>
</head>
<body>
  <div class="box">
    <h1><?= $title ?? 'Student Home' ?></h1>
    <p class="sub">Welcome to the Student Information System.</p>

    <?php if ($logged_in): ?>
      <span class="status online">● Logged In</span>
    <?php else: ?>
      <span class="status offline">● Not Logged In</span>
    <?php endif; ?>

    <?php if ($logged_in): ?>
      <a href="<?= site_url('student/profile') ?>" class="btn btn-profile">View Profile</a>
      <a href="<?= site_url('student/logout') ?>" class="btn btn-logout">Log Out</a>
    <?php else: ?>
      <a href="<?= site_url('student/login') ?>" class="btn btn-login">Log In</a>
      <span class="btn btn-disabled">View Profile (Locked)</span>
    <?php endif; ?>
  </div>
</body>
</html>