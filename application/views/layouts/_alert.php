<?php
$success = $this->session->flashdata('success');
$error = $this->session->flashdata('error');
$warning = $this->session->flashdata('warning');

if ($success) {
    $alert_status = 'alert-success';
    $status = 'Success!';
    $message = $success;
}

if ($error) {
    $alert_status = 'alert-danger';
    $status = 'Error!';
    $message = $error;
}

if ($warning) {
    $alert_status = 'alert-warning';
    $status = 'Warning!';
    $message = $warning;
}

if ($success || $error || $warning) : ?>
    <div class="row">
        <div class="col-md-12">
            <div class="alert <?= $alert_status ?> alert-dismissible fade show" role="alert">
                <strong><?= $status ?></strong> <?= $message ?>
            </div>
        </div>
    </div>
    <script>
        // Close the alert after 5 seconds
        setTimeout(function() {
            $('.alert').alert('close');
        }, 5000);
    </script>
<?php endif ?>
