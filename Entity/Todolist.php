<?php

namespace Entity {

    class Todolist
    {
        private string $todo;

        public function getTodo(): string
        {
            return $this->todo;
        }

        public function setTodo(string $todo): void
        {
            $this->todo = $todo;
        }


    }
}