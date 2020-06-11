<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/assets/css/comum.css">
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/icofont.min.css">
    <link rel="stylesheet" href="/assets/css/template.css">
    <title>Bater Ponto</title>
</head>
<body > <!-- class="hide-sidebar" - Esconde menu -->
    <header class="header">
        <div class="logo">
            <i class="icofont-login mr-2"></i>
            <span class="font-weight-light">Bater</span>
            <span class="font-weight-light">&nbsp;Ponto</span>
            <i class="icofont-logout ml-2"></i>
        </div>
        <div class="menu-toggle mx-3">
            <i class="icofont-navigation-menu"></i>
        </div>
        <div class="spacer"></div>
        <div class="dropdown">
            <div class="dropdown-button">
                <span class="ml-3">
                    <?= $_SESSION['user']->name ?>    
                </span>
                <i class="icofont-simple-down mx-2"></i>
            </div>
            <div class="dropdown-content">
                <ul class="nav-list">
                    <li class="nav-item">
                        <a href="logout.php">
                            <i class="icofont-logout mr-2"></i>
                            Sair
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </header>