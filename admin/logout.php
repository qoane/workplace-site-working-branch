<?php
require_once __DIR__ . '/../includes/bootstrap.php';
logout();
header('Location: ' . base_url('admin/login.php'));
exit;
