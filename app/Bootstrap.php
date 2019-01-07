<?php

namespace App;

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

class Bootstrap
{
    
    public static function getEntityManager($path = "..model/entites")
    {
        $entitiesPath = [$path];
        $isDevMode = true;
        $proxyDir = null;
        $cache = null;
        $useSimpleAnnotationReader = false;
        $dbParams = [
            'driver'   => 'pdo_mysql',
            'host'     => 'localhost',
            'charset'  => 'utf8mb4',
            'user'     => 'root',
            'password' => 'root',
            'dbname'   => 'OC_DWJ_PROJET-4',
            'port'     => '8889',/* A supprimer en mode production */
            'unix_socket' => '/Applications/MAMP/tmp/mysql/mysql.sock'/* A supprimer en mode production */
        ];
    
        $config = Setup::createAnnotationMetadataConfiguration(
            $entitiesPath,
            $isDevMode,
            $proxyDir,
            $cache,
            $useSimpleAnnotationReader
        );
        
        $entityManager = EntityManager::create($dbParams, $config);
    
        return $entityManager;
    }
}
