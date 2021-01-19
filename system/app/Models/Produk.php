<?php

namespace App\Models;

class Produk extends Model{

	protected $table= 'produk';
	protected $casts = [
		'created_at' => 'datetime',
		'berat'=> 'decimal:2'
	];
function getHargaAttribute(){
	return "Rp.".number_format ($this->attributes['harga']);
	}
		
}