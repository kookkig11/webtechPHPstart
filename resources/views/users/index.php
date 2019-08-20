<?php $this->layout('layouts/app') ?>

<?php foreach ($users as $user) : ?>
<div>
    <h1 style="margin-top: 15%">
    (<?= $user->id ?>) <?= $user->name ?>
    </h1>
</div>
<?php endforeach; ?>
