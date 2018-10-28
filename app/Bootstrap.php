<?php
namespace App;
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

class Bootstrap
{

    public static function getEntityManager()
    {

        $entitiesPath = ["../model/entites"];
    
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
            /* A supprimer en mode production */
            'port'     => '8889',
            'unix_socket' => '/Applications/MAMP/tmp/mysql/mysql.sock'
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
