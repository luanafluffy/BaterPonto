<?php
session_start();
requireValidSession(true);


$exception = null;
if(isset($_GET['delete'])) {
    try {
        User::deleteById($_GET['delete']);
        addSuccessMsg('Usuario excluído com sucesso.');
    } catch(Exception $e) {
        if(stripos($e->getMessage(), 'FOREIGN KEY')) {
        addErrorMsg('Não é possível excluir o usuário com registros de ponto.');

        } else {
            $exception = $e;
        }
    }
}

$users = User::get();
foreach($users as $user) {
    //Formatando a data no formato brasileiro
    $user->start_date = (new DateTime($user->start_date))->format('d/m/Y');
    if($user->end_date) {
        $user->end_date = (new DateTime($user->end_date))->format('d/m/Y');
    }
}

loadTemplateView('users', [
    'users' => $users, 
    'exception' => $$exception
]);