<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id_persona
 * @property integer $id_entidad
 * @property string $tipo_documento
 * @property string $numero_documento
 * @property string $primer_nombre
 * @property string $segundo_nombre
 * @property string $primer_apellido
 * @property string $segundo_apellido
 * @property string $sexo
 * @property string $fecha_nacimiento
 * @property string $lugar_nacimiento
 * @property string $tel_contacto
 * @property string $direccion
 * @property string $email
 * @property string $created_at
 * @property string $updated_at
 * @property Entidad $entidad
 * @property Afiliado[] $afiliados
 * @property Seguridad[] $seguridads
 */
class Persona extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'persona';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_persona';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['id_entidad', 'tipo_documento', 'numero_documento', 'primer_nombre', 'segundo_nombre', 'primer_apellido', 'segundo_apellido', 'sexo', 'fecha_nacimiento', 'lugar_nacimiento', 'tel_contacto', 'direccion', 'email', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function entidad()
    {
        return $this->belongsTo('App\Models\Entidad', 'id_entidad', 'id_entidad');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function afiliados()
    {
        return $this->hasMany('App\Models\Afiliado', 'id_persona', 'id_persona');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function seguridads()
    {
        return $this->hasMany('App\Models\Seguridad', 'fk_id_persona', 'id_persona');
    }
}
