<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login - Daily Learning Notes</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="<?= base_url('assets/bootstrap/bootstrap.min.css') ?>" rel="stylesheet">
  <style>
    body {
      background-color: #f8f9fa;
    }
    .login-container {
      max-width: 400px;
      margin: 5rem auto;
      padding: 2rem;
      background-color: #fff;
      border-radius: 0.5rem;
      box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.1);
    }
  </style>
</head>
<body>

  <div class="container">
    <div class="login-container">
      <h4 class="mb-4 text-center">Sign In</h4>

      <?php if(session()->getFlashdata('error')): ?>
        <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
      <?php endif; ?>

      <form action="<?= url_to('login') ?>" method="post">
        <?= csrf_field() ?>

        <div class="mb-3">
          <label for="login" class="form-label">Email or Username</label>
          <input type="text" name="login" class="form-control" id="login" required>
        </div>

        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" name="password" class="form-control" id="password" required>
        </div>

        <div class="mb-3 form-check">
          <input type="checkbox" name="remember" class="form-check-input" id="remember">
          <label class="form-check-label" for="remember">Remember me</label>
        </div>

        <button type="submit" class="btn btn-primary w-100">Login</button>
      </form>

    </div>
  </div>

  <script src="<?= base_url('assets/bootstrap/bootstrap.bundle.min.js') ?>"></script>
</body>
</html>
