<?php

namespace App\Models;

use CodeIgniter\Model;

class DocModel extends Model
{
    protected $table = 'doc';
    protected $allowedFields = 
    [
        'nama', 
        'video',
        'image',
        '1st-img',
        '2nd-img',
        '3rd-img',
        '4th-img',
        '5th-img',
        '6th-img',
        'ppt'
    ];
}