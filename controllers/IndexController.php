<?php

namespace controllers;
use View;
class IndexController extends AbstractController
{
    public function index()
    {
        $view = new View('index_create');                 $view->render();
    }
}