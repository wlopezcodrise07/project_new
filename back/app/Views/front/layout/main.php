<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.2/css/bulma.min.css">
    <title>    <?= $this->renderSection('title'); ?> - TestPage</title>
</head>
<body>
    <?= $this->include('front/layout/header'); ?>
    <?= $this->renderSection('content'); ?>
    <?= $this->include('front/layout/footer'); ?>
</body>
</html>