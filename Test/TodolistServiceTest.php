<?php

require_once __DIR__ . "/../Entity/Todolist.php";
require_once __DIR__ . "/../Service/TodolistService.php";
require_once __DIR__ . "/../Repository/TodoListRepository.php";

use Repository\TodoListRepositoryImpl;
use Service\TodoListServiceImpl;

function testShowTodoList():void
{
    $todoListRepository = new TodoListRepositoryImpl();
    $todoListService = new TodoListServiceImpl($todoListRepository);

    $todoListService->showTodoList();
}

function testAddTodoList():void
{
    $todoListRepository = new TodoListRepositoryImpl();
    $todoListService = new TodoListServiceImpl($todoListRepository);
    $todoListService->addTodoList("Belajar PHP");
    $todoListService->addTodoList("Belajar OOP");
    $todoListService->addTodoList("Belajar Database");

    $todoListService->showTodoList();
}

function testRemoveTodoList():void
{
    $todoListRepository = new TodoListRepositoryImpl();
    $todoListService = new TodoListServiceImpl($todoListRepository);
    $todoListService->addTodoList("Belajar PHP");
    $todoListService->addTodoList("Belajar OOP");
    $todoListService->addTodoList("Belajar Database");

    $todoListService->showTodoList();
    
    $todoListService->removeTodoList(1);
    $todoListService->showTodoList();

    $todoListService->removeTodoList(4);
    $todoListService->showTodoList();

    $todoListService->removeTodoList(2);
    $todoListService->showTodoList();

    $todoListService->removeTodoList(1);
    $todoListService->showTodoList();
}

testRemoveTodoList();