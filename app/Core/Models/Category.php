<?php

namespace App\Core\Models;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Category extends Eloquent
{
    protected $collection = 'categories';

    protected $connection = 'mongodb';
}