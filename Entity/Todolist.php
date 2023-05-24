<?php

namespace Entity {

    class Todolist
    {
        private string $todo;

        public function getTodo(): string
        {
            echo "kala";

            return $this->todo;
        }

        public function setTodo(string $todo): void
        {
            $this->todo = $todo;
        }


    }
}