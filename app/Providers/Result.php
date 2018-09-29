<?php
/**
 * Created by PhpStorm.
 * User: rusiru
 * Date: 9/29/2018
 * Time: 6:08 PM
 */

namespace App\Providers;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    //Table Name
    protected $table = 'results';
    //primaryKey
    public $primaryKey = 'id';

}