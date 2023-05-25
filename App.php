<?php

require_once __DIR__ . '/Entity/Todolist.php';
require_once __DIR__ . '/Helper/InputHelper.php';
require_once __DIR__ . '/Repository/TodolistRepository.php';
require_once __DIR__ . '/Service/TodolistService.php';
require_once __DIR__ . '/View/TodolistView.php';

use Repository\TodolistRepositoryImpl;
use Service\TodolistServiceImpl;
use View\TodolistView;

echo "Todolist App" . PHP_EOL;

$todolistRepository = new TodolistRepositoryImpl();
$todolistServices = new TodolistServiceImpl($todolistRepository);
$todolistView = new TodolistView($todolistServices);

$todolistView->showTodolist();