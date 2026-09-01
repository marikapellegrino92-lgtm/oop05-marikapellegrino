<?php

require_once 'class.php';

class Post {
    private $title;
    private $category;   
    private $tag;

    public function __construct($title, Category $category, $tag)
    {
        $this->title = $title;
        $this->category = $category;
        $this->tag = $tag;
    }

   
    public function getTitle()
    {
        return $this->title;
    }

    
    public function getCategory()
    {
        return $this->category->getName();
    }

   
    public function getTag()
    {
        return $this->tag;
    }

    public function show()
    {
        echo "Titolo: " . $this->getTitle() . "\n";
        echo "Categoria: " . $this->getCategory() . "\n";
        echo "Tag: " . $this->getTag() . "\n";
        echo " Fine articolo\n";
    }
}

$post1 = new Post("Nuove scoperte", new Attualita(), "scienza");
$post2 = new Post("Risultati Serie A", new Sport(), "calcio");
$post3 = new Post("Coppia famosa", new Gossip(), "vip");
$post4 = new Post("Impero Romano", new Storia(), "storia");

$post1->show();
$post2->show();
$post3->show();
$post4->show();
