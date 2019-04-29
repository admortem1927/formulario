<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id_atencion
 * @property integer $id_afiliado
 * @property string $especialidad
 * @property string $descripcion
 * @property string $created_at
 * @property string $updated_at
 * @property Afiliado $afiliado
 */
class Atencion extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'atencion';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_atencion';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['id_afiliado', 'especialidad', 'descripcion', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function afiliado()
    {
        return $this->belongsTo('App\Models\Afiliado', 'id_afiliado', 'id_afiliado');
    }
}
