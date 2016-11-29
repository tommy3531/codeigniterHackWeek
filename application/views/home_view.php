

<?php if($this->session->flashdata('login_success')): ?>
    <p class="alert alert-success">
        <?php echo $this->session->flashdata('login_success') ?>
    </p>
<?php endif; ?>




<?php if($this->session->flashdata('login_failed')): ?>
    <p class="alert alert-danger">
        <?php echo $this->session->flashdata('login_failed') ?>
    </p>
<?php endif; ?>

<h1>Hello this is the home view</h1>