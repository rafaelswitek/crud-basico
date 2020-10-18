<?php

namespace Switek\Crud\Controller;

use Switek\Crud\Entity\Client;
use Switek\Crud\Infra\EntityManagerFactory;
use Switek\Crud\Helper\{FlashMessageTrait, LoadViewTrait};

class ClientController
{
    use LoadViewTrait, FlashMessageTrait;

    private $entityManager;

    public function __construct()
    {
        $entityManagerFactory = new EntityManagerFactory();
        $this->entityManager = $entityManagerFactory->getEntityManager();
    }

    public function index()
    {
        $response = $this->entityManager->getRepository(Client::class);
        $data = [
            'title' => "Listagem de clientes",
            'clients' => $response->findAll()
        ];
        $this->loadView('index.php', $data); //Carrega a view
    }

    public function create()
    {
        $data = [
            'title' => "Formulário de cadastro"
        ];
        $this->loadView('form.php', $data); //Carrega a view
    }

    public function edit()
    {
        $id = filter_input( //Valida o ID passado
            INPUT_GET,
            'id',
            FILTER_VALIDATE_INT
        );

        if (is_null($id) || $id === false) { //Verifica se o ID existe ou se a validação foi bem sucedida
            $this->defineMessage('danger', "O ID não é um numero.");
            header('Location: /');
            return;
        }
        $data = [
            'title' => "Formulário de edição",
            'client' => $this->entityManager->find(Client::class, $id) //Busca cliente pelo ID
        ];
        $this->loadView('form.php', $data); //Carrega a view
    }

    public function store()
    {
        $id = filter_input( //Valida o ID passado
            INPUT_POST,
            'id',
            FILTER_VALIDATE_INT
        );

        if (is_null($id) || $id === false) { //Verifica se o ID existe ou se a validação foi bem sucedida
            $client = new Client(); //Se não tiver ID cria uma instancia de cliente
            $type = 'cadastrado';
        } else {
            $client = $this->entityManager->find(Client::class, $id); //Se tiver ID busca o cliente
            $type = 'editado';
        }

        $name = filter_input( //Valida o Nome passado
            INPUT_POST,
            'name',
            FILTER_SANITIZE_STRING
        );

        $email = filter_input( //Valida o Email passado
            INPUT_POST,
            'email',
            FILTER_SANITIZE_EMAIL
        );

        $cpf = filter_input( //Valida o CPF passado
            INPUT_POST,
            'cpf',
            FILTER_SANITIZE_NUMBER_INT
        );

        $phone = filter_input( //Valida o Telefone passado
            INPUT_POST,
            'phone',
            FILTER_SANITIZE_NUMBER_INT
        );

        $client->setName($name);
        $client->setEmail($email);
        $client->setCpf($cpf);
        $client->setPhone($phone);

        $this->entityManager->persist($client); //Salva dados no banco
        $this->entityManager->flush();

        $this->defineMessage('success', "Cliente {$name} {$type}.");

        header('Location: /');
    }

    public function delete()
    {
        $id = filter_input( //Valida o ID passado
            INPUT_GET,
            'id',
            FILTER_VALIDATE_INT
        );

        if (is_null($id) || $id === false) { //Verifica se o ID existe ou se a validação foi bem sucedida
            $this->defineMessage('danger', "O ID não é um numero.");
            header('Location: /');
            return;
        }

        $client = $this->entityManager->getReference(Client::class, $id); //Se tiver ID busca o cliente
        $this->defineMessage('success', "Cliente {$client->getName()} excluido.");

        $this->entityManager->remove($client); //remove dados do banco
        $this->entityManager->flush();

        header('Location: /');
    }
}
