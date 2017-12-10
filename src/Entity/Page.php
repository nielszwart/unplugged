<?php


namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 */
class Page
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Id
     * @ORM\Column(type="string", length=10)
     */
    private $locale;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $slug;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $title;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $content;

    public function __construct($id, $locale) {
        $this->id = $id;
        $this->locale = $locale;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getLocale()
    {
        return $this->locale;
    }

    public function setLocale($locale)
    {
        $this->locale = $locale;
    }

    public function getSlug()
    {
        return $this->slug;
    }

    public function setSlug($slug)
    {
        $this->slug = $slug;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function setContent($content)
    {
        $this->content = $content;
    }

    public function edit($values)
    {
        if (isset($values['content'])) {
            $this->setContent($values['content']);
        }
        if (isset($values['slug'])) {
            $this->setSlug($values['slug']);
        }
        if (isset($values['title'])) {
            $this->setTitle($values['title']);
        }
    }
}