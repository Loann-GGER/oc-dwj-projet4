<?php 
namespace Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity;
 * @ORM\Table(name="posts")
 */
class Post
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;
    /**
     * @ORM\Column(type="string")
     */
    private $title;
    /**
     * @ORM\Column(type="text")
     */
    private $contents;
    /**
     * @ORM\Column(type="string")
     */
    private $author;
    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $creationDate;

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
// GETTER
    public function id()
    {
        return $this->id;
    }

    public function title()
    {
        return $this->title;
    }

    public function contents()
    {
        return $this->contents;
    }

    public function author()
    {
        return $this->author;
    }

    public function creationDate()
    {
        return $this->creationDate;
    }
// SETTER
    public function setId(int $identifiant)
    {
        $this->id = $identifiant;
    }

    public function settitle(int $title)
    {
        $this->title = $title;
    }

    public function setcontents($contents)
    {
        $this->contents = $contents;
    }

    public function setauthor(int $author)
    {
        $this->author = $author;
    }

    public function setcreationDate(int $creationDate)
    {
        $this->creationDate = $creationDate;
    }
}