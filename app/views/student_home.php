<?php $logged_in = $logged_in ?? false; ?>

<?php if ($logged_in): ?>
  <span class="status online">● Logged In</span>
<?php else: ?>
  <span class="status offline">● Not Logged In</span>
<?php endif; ?>

<?php if ($logged_in): ?>
  <a href="<?= site_url('student/profile') ?>" class="btn btn-profile">View Profile</a>
<?php else: ?>
  <span class="btn btn-disabled">View Profile (Locked)</span>
<?php endif; ?>

<a href="<?= site_url('student/toggle') ?>" class="btn <?= $logged_in ? 'btn-logout' : 'btn-login' ?>">
  <?= $logged_in ? 'Log Out' : 'Log In' ?>
</a>
