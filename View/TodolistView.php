<?php

namespace View {

    use Helper\InputHelper;
    use Service\TodolistService;

    class TodolistView
    {
        private TodolistService $todolistService;

        public function __construct(TodolistService $todolistService)
        {
            $this->todolistService = $todolistService;
        }

        function showTodolist(): void
        {
            while (true) {
                $this->todolistService->showTodolist();

                echo "Todolist Menu" . PHP_EOL;
                echo "1. Add Todolist" . PHP_EOL;
                echo "2. Remove Todolist" . PHP_EOL;
                echo "x. Exit" . PHP_EOL;

                $choose = InputHelper::input("Choose");

                if ($choose == "1") {
                    $this->addTodolist();
                } elseif ($choose == "2") {
                    $this->removeTodolist();
                } elseif ($choose == "x") {
                    break;
                } else {
                    echo "Wrong input" . PHP_EOL;
                }
            }

            echo "Goodbye" . PHP_EOL;
        }

        function addTodolist(): void
        {
            echo "Add todolist" . PHP_EOL;

            $todo = InputHelper::input("Todo (x for cancel)");

            if ($todo == "x") {
                echo "Cancel to add todo" . PHP_EOL;
            } else {
                $this->todolistService->addTodolist($todo);
            }
        }

        function removeTodolist(): void
        {
        }
    }
}