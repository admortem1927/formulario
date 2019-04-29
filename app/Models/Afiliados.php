<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id_afiliado
 * @property integer $id_afiliacion
 * @property integer $id_persona
 * @property string $tipo_afiliado
 * @property string $obs_afiliado
 * @property string $created_at
 * @property string $updated_at
 * @property Afiliacion $afiliacion
 * @property Persona $persona
 * @property Atencion[] $atencions
 */
class Afiliados extends Model
{
    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_afiliado';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['id_afiliacion', 'id_persona', 'tipo_afiliado', 'obs_afiliado', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function afiliacion()
    {
        return $this->belongsTo('App/Models\Afiliacion', 'id_afiliacion', 'id_afiliacion');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function persona()
    {
        return $this->belongsTo('App/Models\Persona', 'id_persona', 'id_persona');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function atencions()
    {
        return $this->hasMany('App\Models\Atencion', 'id_afiliado', 'id_afiliado');
    }
}
