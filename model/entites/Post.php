<?php 
namespace Entity;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

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
    /**
     * @ORM\OneToMany(targetEntity="Comment",mappedBy="post", fetch="EAGER", cascade={"persist"})
     */
    private $comments;

// GETTER
    public function __construct($datas = null)
    {
        parent::__construct($datas);
        $this->comments = new ArrayCollection();
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

    public function comments()
    {
        return $this->comments;
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

    public function setCreationDate($creationDate)
    {
        $this->creationDate = $creationDate;
    }

    public function setaddcomments(Comment $comment)
    {
        if(!$this->comments->contains($comment))
        {
            $this->comments[]=$comment;
            $comment->setPost($this);
        }

    }
}