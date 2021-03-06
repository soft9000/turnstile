<?php

include_once "showTurnstile.php";

include_once "messageForms.php";


$req = getRequest();

$ip = $req['ip'];

$control = $req['control'];
if ($control) {
    doControl($control);
} else {
    $form = null;
    $op = $req['op'];
    switch ($op) {
        case 'create':
            $form = getformCreate();
            break;
        case 'update':
            $form = getformUpdate();
            break;
        case 'read':
            $form = getformRead();
            break;
        case 'delete':
            $form = getformDelete();
            break;
        default:
            showTurnstile();
            return;
    }
    showTurnstileWith($form);
}
?>
