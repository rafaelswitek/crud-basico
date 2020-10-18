<?php

use Switek\Crud\Infra\EntityManagerFactory;
use Doctrine\ORM\Tools\Console\ConsoleRunner;

return ConsoleRunner::createHelperSet(
    (new EntityManagerFactory())->getEntityManager()
);
