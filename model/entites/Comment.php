<?php 
namespace Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity;
 * @ORM\Table(name="comments")
 */
class Comment extends Entity
{
    /**
     * @ORM\Column(type="integer")
     */
    private $postId;
    /**
     * @ORM\Column(type="text")
     */
    private $contents;
    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $publicationDate;
    /**
     * @ORM\Column(type="string")
     */
    private $author;
    /**
     * @ORM\Column(type="boolean")
     */
    private $alert;

    // GETTER
    public function postid()
    {
        return $this->postid;
    }

    public function contents()
    {
        return $this->contents;
    }

    public function publicationDate()
    {
        return $this->publicationDate;
    }

    public function author()
    {
        return $this->author;
    }

    public function alert()
    {
        return $this->alert;
    }
// SETTER

    public function setpostid(int $postid)
    {
        $this->postid = $postid;
    }

    public function setcontents(int $contents)
    {
        $this->contents = $contents;
    }

    public function setpublicationDate(int $publicationDate)
    {
        $this->publicationDate = $publicationDate;
    }

    public function setauthor(int $author)
    {
        $this->author = $author;
    }

    public function setalert(int $alert)
    {
        $this->alert = $alert;
    }
}