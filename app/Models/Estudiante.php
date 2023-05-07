<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Estudiante
 *
 * @property $e_id
 * @property $e_nombres
 * @property $e_apellidos
 * @property $e_dni
 * @property $e_edad
 * @property $e_fecha_nac
 * @property $e_facultad
 * @property $e_escuela
 * @property $e_semestre
 * @property $e_codigo
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Estudiante extends Model
{
    
    static $rules = [
		'e_id' => 'required',
		'e_nombres' => 'required',
		'e_apellidos' => 'required',
		'e_dni' => 'required',
		'e_edad' => 'required',
		'e_fecha_nac' => 'required',
		'e_facultad' => 'required',
		'e_escuela' => 'required',
		'e_semestre' => 'required',
		'e_codigo' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['e_id','e_nombres','e_apellidos','e_dni','e_edad','e_fecha_nac','e_facultad','e_escuela','e_semestre','e_codigo'];



}
