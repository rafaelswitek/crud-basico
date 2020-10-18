<?php

namespace Switek\Crud\Controller;

use Switek\Crud\Entity\Client;
use Switek\Crud\Infra\EntityManagerFactory;

class ClientController
{

    private $entityManager;

    public function __construct()
    {
        $entityManagerFactory = new EntityManagerFactory();
        $this->entityManager = $entityManagerFactory->getEntityManager();
    }

    public function index()
    {
        $response = $this->entityManager->getRepository(Client::class);
        $clients = $response->findAll();

        include __DIR__ . '/../../view/index.php'; //Carrega a view
    }

    public function create()
    {
        include __DIR__ . '/../../view/form.php'; //Carrega a view
    }

    public function edit()
    {
        $id = filter_input( //Valida o ID passado
            INPUT_GET,
            'id',
            FILTER_VALIDATE_INT
        );

        if (is_null($id) || $id === false) { //Verifica se o ID existe ou se a validação foi bem sucedida
            header('Location: /');
            return;
        }
        $client = $this->entityManager->find(Client::class, $id); //Busca cliente pelo ID
        include __DIR__ . '/../../view/form.php'; //Carrega a view
    }
}
