<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Estate
 * 
 * @property int $id
 * @property string $name
 * 
 * @property CellGroup $cell_group
 *
 * @package App\Models
 */
class Estate extends Model
{
	protected $table = 'estates';
	public $timestamps = false;

	protected $fillable = [
		'name'
	];

	public function cell_group()
	{
		return $this->belongsTo(CellGroup::class, 'id', 'estate_id');
	}
}
