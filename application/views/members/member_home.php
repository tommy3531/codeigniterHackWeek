
<?php if($this->session->flashdata('login_success')): ?>
    <p class="alert alert-success">
        <?php echo $this->session->flashdata('login_success') ?>
    </p>
<?php endif; ?>
<h1>Member Area</h1>