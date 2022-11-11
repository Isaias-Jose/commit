<?php

// abrir a sessao
use core\classes\Database;

session_start();

// carregar o config
require_once('../config.php');

// carrega todas as classes do projeto
require_once('../vendor/autoload.php');

require_once ('../core/rotas.php');