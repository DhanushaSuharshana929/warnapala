<?php

include_once(dirname(__FILE__) . '/../../../class/include.php');
include_once(dirname(__FILE__) . '/../../auth.php');

if ($_POST['option'] == 'delete') {

    $EXCURSION_TYPE = new ExcursionType($_POST['id']);

    unlink('../../../upload/excursion/gallery/' . $EXCURSION_TYPE->image_name);
    unlink('../../../upload/excursion/gallery/thumb/' . $EXCURSION_TYPE->image_name);

    $result = $EXCURSION_TYPE->delete();


    if ($result) {

        $data = array("status" => TRUE);
        header('Content-type: application/json');
        echo json_encode($data);
    }
}