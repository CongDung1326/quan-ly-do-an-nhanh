<?php
if (isset($_POST['name']) && isset($_POST['number_phone']) && isset($_POST['your_problem'])) {
    require_once get_template_directory() . "/components/show-notification.php";

    $name = checkXSS($_POST['name']);
    $number_phone = checkXSS($_POST['number_phone']);
    $your_problem = checkXSS($_POST['your_problem']);
    $notification = new Notification();

    if (!is_string($name)) {
        $notification->show("Success", "Test", "The content name");
        return;
    }
    if (!is_numeric($number_phone)) {
        $notification->show("Success", "Thông báo", "Vui lòng số điện thoại nhập toàn số");
        return;
    }
    if (!is_string($your_problem)) {
        $notification->show("Success", "Test", "The content problem");
        return;
    }

    $data = [
        'time' => current_time('mysql'),
        'name' => $name,
        'number_phone' => $number_phone,
        'your_problem' => $your_problem
    ];

    insert_db_custom_plugin($data);

    my_reload(); // Reload page to remove the data post
}

ob_end_flush();
