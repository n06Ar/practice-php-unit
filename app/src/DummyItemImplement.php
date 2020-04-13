<?php

namespace App;



class DummyItemImplement implements DummyItem
{
    private $id,$name;

    public function getId():string
    {
        return $this->id;
    }

    public function getName():string
    {
        return $this->name;
    }
}
