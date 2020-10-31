<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
    //
    function getAll()
    {
        return $this->all();
    }
}
