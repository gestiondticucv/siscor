<?php

namespace Modules\Correspondencia\Models;

use Illuminate\Database\Eloquent\Model;

class Correspondencia extends Model
{
    protected $table = 'correspondencia';
    protected $fillable = ['archivo','tipo_id','categoria_id','estatus_id'];

    public function tipo()
    {
        return $this->belongsTo(Tipos::class, 'tipo_id', 'id_tipo');
    }
    public function categoria()
    {
        return $this->belongsTo(Categorias::class, 'categoria_id', 'id_categoria');
    }
    public function estatus()
    {
        return $this->belongsTo(Estatus::class, 'estatus_id', 'id_estatus');
    }
}
