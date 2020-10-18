<?php

namespace Switek\Crud\Infra;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Tools\Setup;

class EntityManagerFactory
{
    /**
     * @return EntityManagerInterface
     * @throws \Doctrine\ORM\ORMException
     */
    public function getEntityManager(): EntityManagerInterface
    {
        $rootDir = __DIR__ . '/../..';
        $config = Setup::createAnnotationMetadataConfiguration(
            [$rootDir . '/src'],
            true
        );
        $connection = [ //Dados de conexão com o banco MySql
            'driver' => 'pdo_mysql',
            'host' => 'localhost',
            'dbname' => 'crud',
            'user' => 'switek',
            'password' => 'switek'
        ];

        return EntityManager::create($connection, $config);
    }
}
