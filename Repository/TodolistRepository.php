<?php

namespace Repository {

    use Entity\Todolist;

    interface TodolistRepository
    {

        function save(Todolist $todolist): void;

        function remove(int $number): bool;

        function findAll(): array;

    }

    class TodolistRepositoryImpl implements TodolistRepository
    {
        private array $todolist = array();

        function save(Todolist $todolist): void
        {
        }

        function remove(int $number): bool
        {
        }

        function findAll(): array
        {
        }
    }
}