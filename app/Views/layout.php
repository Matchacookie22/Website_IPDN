<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="<?= base_url('assets/img/Logo_IPDN.png') ?>">
    <title>Portal Resmi IPDN</title>
    <!-- Google Fonts & Tailwind -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        .bg-ipdn {
            background-color: #991b1b;
        }

        .text-ipdn {
            color: #991b1b;
        }

        .ipdn-gradient {
            background: linear-gradient(135deg, #991b1b 0%, #7f1d1d 100%);
        }
    </style>
</head>

<body class="bg-white text-slate-900">
    <!-- Include Header -->
    <?= $this->include('components/header') ?>

    <!-- Area Konten -->
    <main>
        <?= $this->renderSection('content') ?>
    </main>

    <!-- Include Footer -->
    <?= $this->include('components/footer') ?>
</body>

</html>