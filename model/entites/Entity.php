<?php
namespace Entity;
use Doctrine\ORM\Mapping as ORM;

abstract class Entity
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    protected $id;

    public function __construct(array $datas = null)
    {
        if($datas != null)
        {
            $this->hydrate($datas);
        }
        
    }

    private function hydrate($datas)
    {
        foreach($datas as $attribute => $value)
        {
            $method = 'set'.ucfirst($attribute);
            $this->$method($value);
        }
    } 
}