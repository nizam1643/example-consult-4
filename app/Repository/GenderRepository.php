<?php

namespace App\Repository;

use App\Interface\GenderInterface;
use App\Models\Gender;

class GenderRepository implements GenderInterface
{   
    protected $genders = null;

    public function getGenderLists()
    {
        return Gender::get();
    }

    public function storeGenderLists($collection = [])
    {
        $saveGender = new Gender();
        $saveGender->name = $collection['name'];
        return $saveGender->save();
    }
}