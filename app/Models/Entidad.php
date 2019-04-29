<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id_entidad
 * @property string $afiliado
 * @property string $nom_entidad
 * @property string $tipo_entidad
 * @property string $created_at
 * @property string $updated_at
 * @property Seguridad[] $seguridads
 */
class Entidad extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'entidad';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_entidad';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['afiliado', 'nom_entidad', 'tipo_entidad', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function seguridads()
    {
        return $this->hasMany('App\Models\Seguridad', 'fk_id_entidad', 'id_entidad');
    }
}
