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
        include __DIR__ . '/../../view/create.php'; //Carrega a view
    }
}
