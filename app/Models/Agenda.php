<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Agenda
 *
 * @property $id
 * @property $nombre
 * @property $telefono
 * @property $email
 * @property $dirección
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Agenda extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'telefono' => 'required',
		'email' => 'required',
		'dirección' => 'required',
    ];

    protected $perPage = 20;

    protected $table = 'agenda';
    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','telefono','email','dirección'];



}
