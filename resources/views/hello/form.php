<?php $this->layout('layouts/app') ?>

<form action="/hello/formSubmit" method="post">
    <div style="margin-top: 15%">
        <label for="name">Name</label>
        <input type="text" name="name">
    </div>
    <div>
        <button type="submit">Send Name</button>
    </div>
</form>
