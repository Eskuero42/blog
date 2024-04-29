<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $contenido
 * @property string $created_at
 * @property string $updated_at
 * @property string $titulo
 * @property Comentario[] $comentarios
 */
class Blog extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'blog';

    /**
     * @var array
     */
    protected $fillable = ['contenido', 'created_at', 'updated_at', 'titulo'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function comentarios()
    {
        return $this->hasMany('App\Models\Comentario', 'id_blog');
    }
}
