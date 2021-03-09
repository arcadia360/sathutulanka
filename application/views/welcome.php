<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <a href="">Login</a>
    <a href="">Register</a>
    <a href="<?php
                $url = "";
                for ($i = 0; $i < count($this->uri->segment_array()); $i++) {
                    $url = $url . $this->uri->segment($i + 1) . "/";
                }

                echo base_url("Welcome/ChangeLanguage/1/" . $url); ?>">English</a>
    <a href="<?php
                $url = "";
                for ($i = 0; $i < count($this->uri->segment_array()); $i++) {
                    $url = $url . $this->uri->segment($i + 1) . "/";
                }

                echo base_url("Welcome/ChangeLanguage/2/" . $url); ?>">සිංහල</a>
    <?php
    // $this->session->sess_destroy();
    if (isset($_SESSION['language_id'])) {
        echo $_SESSION['language_id']; 
    }
    ?>
</body>

</html>