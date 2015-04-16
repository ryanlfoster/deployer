<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * The deployment template model
 */
class Template extends Model
{
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name'];

    /**
     * Has many relationship
     *
     * @return Command
     */
    public function commands()
    {
        return $this->hasMany('App\CommandTemplate');
    }
}