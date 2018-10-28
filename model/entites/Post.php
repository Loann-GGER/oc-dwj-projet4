<?php 
namespace Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity;
 * @ORM\Table(name="posts")
 */
class Post extends Entity
{
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

// GETTER
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