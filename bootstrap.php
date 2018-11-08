<?php

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
use App\Bootstrap;

return Bootstrap::getEntityManager("model/entites");