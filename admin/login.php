<?php
require_once __DIR__ . '/../includes/bootstrap.php';

if (admin_logged_in()) {
    header('Location: ' . base_url('admin/index.php'));
    exit;
}

$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username'] ?? '');
    $password = $_POST['password'] ?? '';

    if (!$username || !$password) {
        $error = 'Please provide your username and password.';
    } elseif (!attempt_login($username, $password)) {
        $error = 'Invalid credentials. Please try again.';
    } else {
        header('Location: ' . base_url('admin/index.php'));
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin Login &mdash; Workplace Solutions</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-oBWdlEYUoMRn8DcRbTy9VnE3NQIdlZwIYdMb9RfMge+leP4YDbi0wzfopWn7UXQ8sGdzAFhlqmcuP5HTh3YtKQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="<?= base_url('admin/css/admin.css') ?>" />
  <style>
    body { display: flex; align-items: center; justify-content: center; min-height: 100vh; background: #0f172a; }
    .login-card {
      width: 100%;
      max-width: 420px;
      background: #fff;
      padding: 2.5rem;
      border-radius: 1rem;
      box-shadow: 0 30px 70px rgba(15, 23, 42, 0.35);
    }
    .login-card h1 { margin-top: 0; margin-bottom: 2rem; text-align: center; font-size: 1.8rem; color: #0f172a; }
    .login-card label { display: block; margin-bottom: 0.5rem; font-weight: 600; }
    .login-card input { width: 100%; padding: 0.75rem; margin-bottom: 1.5rem; border-radius: 0.6rem; border: 1px solid #cbd5f5; font-size: 1rem; }
    .login-card button { width: 100%; }
    .error { background: #fef2f2; border: 1px solid #fecaca; color: #991b1b; padding: 0.75rem 1rem; border-radius: 0.5rem; margin-bottom: 1.5rem; }
  </style>
</head>
<body>
  <div class="login-card">
    <h1>Workplace CMS</h1>
    <?php if ($error): ?>
      <div class="error"><?= htmlspecialchars($error) ?></div>
    <?php endif; ?>
    <form method="post" action="">
      <label for="username">Username</label>
      <input type="text" name="username" id="username" required />

      <label for="password">Password</label>
      <input type="password" name="password" id="password" required />

      <button type="submit" class="btn"><i class="fa-solid fa-right-to-bracket"></i> Sign In</button>
    </form>
  </div>
</body>
</html>
