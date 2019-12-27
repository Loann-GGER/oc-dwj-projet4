<?php

namespace App;

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

class Bootstrap
{
    /**
     * Connexion à la base de données SQL     
     * @param path string du chemin vers les entites
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
            'charset'  => getenv('DB_CHARSET'),
            'user'     => getenv('DB_USER'),
            'password' => getenv('DB_PASSWORD'),
            'dbname'   => getenv('DB_NAME'),
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