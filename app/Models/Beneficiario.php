<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id_beneficiario
 * @property integer $id_persona
 * @property string $tipo_documento
 * @property string $numero_documento
 * @property string $primer_nombre
 * @property string $segundo_nombre
 * @property string $primer_apellido
 * @property string $segundo_apellido
 * @property string $sexo
 * @property string $fecha_nacimiento
 * @property string $lugar_nacimiento
 * @property string $created_at
 * @property string $updated_at
 * @property Persona $persona
 */
class Beneficiario extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'beneficiario';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_beneficiario';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['id_persona', 'tipo_documento', 'numero_documento', 'primer_nombre', 'segundo_nombre', 'primer_apellido', 'segundo_apellido', 'sexo', 'fecha_nacimiento', 'lugar_nacimiento', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function persona()
    {
        return $this->belongsTo('App\Models\Persona', 'id_persona', 'id_persona');
    }
}
