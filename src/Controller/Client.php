<?php

namespace Switek\Crud\Controller;

class Client
{

    public function index()
    {
        include __DIR__ . '/../../public/list.php'; //Carrega a view
    }

    public function create()
    {
        include __DIR__ . '/../../public/form.php'; //Carrega a view
    }
}
