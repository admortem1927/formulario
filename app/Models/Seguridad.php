<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id_seguridad
 * @property integer $fk_id_persona
 * @property integer $fk_id_entidad
 * @property string $created_at
 * @property string $updated_at
 * @property Entidad $entidad
 * @property Persona $persona
 */
class Seguridad extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'seguridad';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_seguridad';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['fk_id_persona', 'fk_id_entidad', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function entidad()
    {
        return $this->belongsTo('App/Models\Entidad', 'fk_id_entidad', 'id_entidad');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function persona()
    {
        return $this->belongsTo('App\Models\Persona', 'fk_id_persona', 'id_persona');
    }
}
