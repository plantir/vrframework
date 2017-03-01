<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model {

    protected $fillable = ['names'];

    protected $dates = [];

    public static $rules = [
        // Validation rules
    ];

    // Relationships

}
