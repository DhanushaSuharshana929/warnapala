<?php

include_once(dirname(__FILE__) . '/../../class/include.php');

if (isset($_POST['create'])) {
    $EXCURION_TYPE = new ExcursionType(NULL);
    $VALID = new Validator();

    $EXCURION_TYPE->name = $_POST['name'];
    $EXCURION_TYPE->short_description = $_POST['short_description'];
    $EXCURION_TYPE->description = $_POST['description'];


    $dir_dest = '../../upload/excursion-type/';
    $dir_dest_thumb = '../../upload/excursion-type/thumb';

    $handle = new Upload($_FILES['image']);

    $imgName = null;
    $img = Helper::randamId();
    if ($handle->uploaded) {
        $handle->image_resize = true;
        $handle->file_new_name_body = TRUE;
        $handle->file_overwrite = TRUE;
        $handle->file_new_name_ext = 'jpg';
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = $img;
        $handle->image_x = 800;
        $handle->image_y = 460;

        $handle->Process($dir_dest);


        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $imgName = $handle->file_dst_name;
        }
        $handle->image_resize = true;
        $handle->file_new_name_body = TRUE;
        $handle->file_overwrite = TRUE;
        $handle->file_new_name_ext = 'jpg';
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = $img;
        $handle->image_x = 400;
        $handle->image_y = 230;

        $handle->Process($dir_dest_thumb);

        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $imgName = $handle->file_dst_name;
        }
    }

    $EXCURION_TYPE->image_name = $imgName;

    $VALID->check($EXCURION_TYPE, [
        'name' => ['required' => TRUE],
        'image_name' => ['required' => TRUE]
    ]);

    if ($VALID->passed()) {
        $EXCURION_TYPE->create();

        if (!isset($_SESSION)) {
            session_start();
        }
        $VALID->addError("Your data was saved successfully", 'success');
        $_SESSION['ERRORS'] = $VALID->errors();

        header('Location: ' . $_SERVER['HTTP_REFERER']);
    } else {

        if (!isset($_SESSION)) {
            session_start();
        }

        $_SESSION['ERRORS'] = $VALID->errors();

        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
}

if (isset($_POST['update'])) {

    $dir_dest = '../../upload/excursion-type/';
    $dir_dest_thumb = '../../upload/excursion-type/thumb';

    $handle = new Upload($_FILES['image']);
    $VALID = new Validator();
    $imgName = null;

    if ($handle->uploaded) {
        $handle->image_resize = true;
        $handle->file_new_name_body = TRUE;
        $handle->file_overwrite = TRUE;
        $handle->file_new_name_ext = FALSE;
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = $_POST ["oldImageName"];
        $handle->image_x = 800;
        $handle->image_y = 460;

        $handle->Process($dir_dest);

        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $imgName = $handle->file_dst_name;
        }
        if ($handle->uploaded) {
            $handle->image_resize = true;
            $handle->file_new_name_body = TRUE;
            $handle->file_overwrite = TRUE;
            $handle->file_new_name_ext = FALSE;
            $handle->image_ratio_crop = 'C';
            $handle->file_new_name_body = $_POST ["oldImageName"];
            $handle->image_x = 400;
            $handle->image_y = 230;

            $handle->Process($dir_dest_thumb);
        }
        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $imgName = $handle->file_dst_name;
        }
    }

    $EXCURION_TYPE = new ExcursionType($_POST['id']);

    $EXCURION_TYPE->id = $_POST['id'];
    $EXCURION_TYPE->name = $_POST['name'];
    $EXCURION_TYPE->image_name = $_POST['oldImageName'];
    $EXCURION_TYPE->short_description = $_POST['short_description'];
    $EXCURION_TYPE->description = $_POST['description'];

    $VALID->check($EXCURION_TYPE, [
        'name' => ['required' => TRUE],
        'image_name' => ['required' => TRUE]
    ]);

    if ($VALID->passed()) {
        $EXCURION_TYPE->update();

        if (!isset($_SESSION)) {
            session_start();
        }
        $VALID->addError("Your data was saved successfully", 'success');
        $_SESSION['ERRORS'] = $VALID->errors();

        header('Location: ' . $_SERVER['HTTP_REFERER']);
    } else {

        if (!isset($_SESSION)) {
            session_start();
        }

        $_SESSION['ERRORS'] = $VALID->errors();

        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
}

if (isset($_POST['save-data'])) {

    foreach ($_POST['sort'] as $key => $img) {
        $key = $key + 1;

        $EXCURSION_SUB = ExcursionType::arrange($key, $img);

        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
}