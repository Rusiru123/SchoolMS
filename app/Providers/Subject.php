<?php
/**
 * Created by PhpStorm.
 * User: rusiru
 * Date: 9/29/2018
 * Time: 6:10 PM
 */

namespace App\Providers;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{

    //Table name
    protected $table = 'subjects';
    //Primary Key
    public $primaryKey = 'id';
}