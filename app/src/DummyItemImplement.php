<?php

namespace App;



class DummyItemImplement implements DummyItem
{
    private $id,$name;

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }
}
