<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $id_blog
 * @property string $texto
 * @property string $fecha_guardada
 * @property string $created_at
 * @property string $updated_at
 * @property Blog $blog
 */
class Comentarios extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['id_blog', 'texto', 'fecha_guardada', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function blog()
    {
        return $this->belongsTo('App\Models\Blog', 'id_blog');
    }
}
