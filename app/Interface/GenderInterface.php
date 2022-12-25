<?php

namespace App\Interface;

interface GenderInterface 
{
    public function getGenderLists();

    public function storeGenderLists($collection = []);
}