<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id_afiliacion
 * @property string $fecha_afiliacion
 * @property string $fecha_vencimiento
 * @property string $fecha_renovacion
 * @property string $obs_afiliacion
 * @property string $created_at
 * @property string $updated_at
 * @property Afiliado[] $afiliados
 */
class Afiliacion extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'afiliacion';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_afiliacion';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['fecha_afiliacion', 'fecha_vencimiento', 'fecha_renovacion', 'obs_afiliacion', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function afiliados()
    {
        return $this->hasMany('App\Models\Afiliado', 'id_afiliacion', 'id_afiliacion');
    }
}
