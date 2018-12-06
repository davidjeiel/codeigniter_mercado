<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="<?= base_url("css/bootstrap.css") ?>">
    </head>
    <body>
        <?php  
            if ($this->session->flashdata("success")) {
                echo '<div class="alert alert-success">';
                echo $this->session->flashdata('success');
            } else if($this->session->flashdata("danger")) 
            {
                echo '<div class="alert alert-danger">';
                echo $this->session->flashdata('danger');
            }
            echo '</div>';
        ?>       