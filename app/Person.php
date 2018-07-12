<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use App\Scopes\ScopePerson;

class Person extends Model
{
    protected static function boot()
    {
        parent::boot();
        static::addGlobalScope(new ScopePerson);
    }

    public function getData()
    {
        return $this->id . ': ' . $this->name . ' (' . $this->age . ')';
    }

    protected $guarded = array('id');

    public static $rules = array(
        'name' => 'required',
        'mail' => 'email',
        'age' => 'integer|min:0|max:150'
    );
}
