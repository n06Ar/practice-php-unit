<?php

namespace App;

interface DummyItem
{
    /**
     * DummyItemの名前を取得
     * @return string
     */
    public function getName():string;

    /**
     * DummyItemの名前を取得
     * @return string
     */
    public function getId():string;
}
