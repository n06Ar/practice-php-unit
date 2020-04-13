<?php

namespace App;

interface DummyItem
{
    /**
     * @return string
     */
    public function getName():string;

    /**
     * @return string
     */
    public function getId():string;
}
