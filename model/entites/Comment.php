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
     * @ORM\ManyToOne(targetEntity="Entity\Post",inversedBy="comment")
     */
    private $post;
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
    public function post()
    {
        return $this->post;
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
    public function setpost(Post $post)
    {
        $this->post = $post;
    }

    public function setcontents($contents)
    {
        $this->contents = $contents;
    }

    public function setpublicationDate($publicationDate)
    {
        $this->publicationDate = $publicationDate;
    }

    public function setauthor($author)
    {
        $this->author = $author;
    }

    public function setalert($alert)
    {
        $this->alert = $alert;
    }
}