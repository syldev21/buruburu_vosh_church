<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Leadership
 * 
 * @property int $id
 * @property string $name
 * 
 * @property User $user
 *
 * @package App\Models
 */
class Leadership extends Model
{
	protected $table = 'leaderships';
	public $timestamps = false;

	protected $fillable = [
		'name'
	];

	public function user()
	{
		return $this->belongsTo(User::class, 'id', 'leadership_id');
	}
}
