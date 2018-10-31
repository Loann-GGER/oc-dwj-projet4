<?php 
namespace Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="Repository\PostRepository");
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
    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function setContents($contents)
    {
        $this->contents = $contents;
    }

    public function setAuthor($author)
    {
        $this->author = $author;
    }

    public function setCreationDate(int $creationDate)
    {
        $this->creationDate = $creationDate;
    }
}