<?php

namespace Switek\Crud\Controller;

class Client
{

    public function index()
    {
        include __DIR__ . '/../../view/index.php'; //Carrega a view
    }

    public function create()
    {
        include __DIR__ . '/../../view/create.php'; //Carrega a view
    }
}
