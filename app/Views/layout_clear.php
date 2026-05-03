<!DOCTYPE html>
<html>
<head>
    <title>Login - IPDN Portal</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" type="image/png" href="<?= base_url('assets/img/Logo_IPDN.png') ?>">
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    
    <style>
        [x-cloak] { display: none !important; }
    </style>
</head>
<body class="bg-slate-100">
    <!-- Hanya merender konten login saja -->
    <?= $this->renderSection('content') ?>
</body>
</html>