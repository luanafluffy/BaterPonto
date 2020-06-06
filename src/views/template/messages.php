<?php

$errors = [];
if($exception) {
    $message = [
        'type' => 'error',
        'message' => $exception->getMessage()
    ];

    if(get_class($exception) === 'ValidationException') {
        $errors = $exception->getErrors();
    }
}

$alertType = '';

if($message['type'] === 'error') {
    $alertType = 'danger';
} else {
    $alertType = 'sucess';
}

?>
<?php if($message): ?>
    <div role="alert"
        class="my3 alert alert-<?= $alertType ?>" >
        <?= $message['message'] ?>
    </div>
<?php endif ?>