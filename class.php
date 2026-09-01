<?php


abstract class Category {
   
    abstract public function getName();
}


class Attualita extends Category {
    public function getName()
    {
        return "Attualità";
    }
}

class Sport extends Category {
    public function getName()
    {
        return "Sport";
    }
}


class Gossip extends Category {
    public function getName()
    {
        return "Gossip";
    }
}


class Storia extends Category {
    public function getName()
    {
        return "Storia";
    }
}

$cat = new Gossip();
echo $cat->getName();
