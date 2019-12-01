<?php

namespace App;

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

class Bootstrap
{
    /**
     * @desc La fonction fait ceci
     * @param path string le chemin vers truc muche
     * @return class entityManager
     */
    public static function getEntityManager($path = "..model/entites")
    {
        $entitiesPath = [$path];
        $isDevMode = (getenv('ENVIRONMENT') == 'dev');
        $proxyDir = null;
        $cache = null;
        $useSimpleAnnotationReader = false;
        $dbParams = [
            'driver'   => 'pdo_mysql',
            'host'     => getenv('DB_HOST'),
            'charset'  => 'utf8mb4',
            'user'     => getenv('DB_USER'),
            'password' => getenv('DB_PASSWORD'),
            'dbname'   => getenv('DB_NAME'),
            
            // 'port'     => '8889',/* A supprimer en mode production */
            // 'unix_socket' => '/Applications/MAMP/tmp/mysql/mysql.sock'/* A supprimer en mode production */
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