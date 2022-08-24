<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Producto
 *
 * @property $id
 * @property $codigo
 * @property $nombreProducto
 * @property $referencia
 * @property $precio
 * @property $peso
 * @property $categoria
 * @property $stock
 * @property $created_at
 * @property $updated_at
 *
 * @property Venta[] $ventas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Producto extends Model
{
    
    static $rules = [
		'codigo' => 'required',
		'nombreProducto' => 'required',
		'referencia' => 'required',
		'precio' => 'required',
		'peso' => 'required',
		'categoria' => 'required',
		'stock' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['codigo','nombreProducto','referencia','precio','peso','categoria','stock'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ventas()
    {
        return $this->hasMany('App\Models\Venta', 'producto_id', 'id');
    }
    

}
