<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CellGroup
 * 
 * @property int $id
 * @property string $name
 * @property int|null $pastor_id
 * @property int|null $estate_id
 * 
 * @property User|null $user
 * @property Estate $estate
 *
 * @package App\Models
 */
class CellGroup extends Model
{
	protected $table = 'cell_groups';
	public $timestamps = false;

	protected $casts = [
		'pastor_id' => 'int',
		'estate_id' => 'int'
	];

	protected $fillable = [
		'name',
		'pastor_id',
		'estate_id'
	];

	public function user()
	{
		return $this->belongsTo(User::class, 'pastor_id');
	}

	public function estate()
	{
		return $this->hasOne(Estate::class, 'id', 'estate_id');
	}
}
