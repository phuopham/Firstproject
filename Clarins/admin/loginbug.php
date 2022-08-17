<?php
    // PHP validate
    $error = array();
    $data = array();
    if (!empty($_POST['contact_action']))
    {
    // Lấy dữ liệu
    $data['fullname'] = isset($_POST['fullname']) ? $_POST['fullname'] : '';
    $data['email'] = isset($_POST['email']) ? $_POST['email'] : '';
 
    // Check format data
    require('./validate.php');
    if (empty($data['fullname'])){
    $error['fullname'] = 'You have not entered your name';
    }
 
    if (empty($data['email'])){
        $error['email'] = 'You have not entered your email';
    }
    else if (!is_email($data['email'])){
    $error['email'] = 'Email invalidate';
    }
    }
?>