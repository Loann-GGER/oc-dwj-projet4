<?php
namespace Entity;
use Doctrine\ORM\Mapping as ORM;

class Entity
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    protected $id;

    // GETTER
    public function id()
    {
        return $this->id;
    }
    //SETTER
    public function setId(int $identifiant)
    {
        $this->id = $identifiant;
    }

    
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