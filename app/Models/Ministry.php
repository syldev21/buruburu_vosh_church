<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Ministry
 * 
 * @property int $id
 * @property string $name
 * 
 * @property User $user
 *
 * @package App\Models
 */
class Ministry extends Model
{
	protected $table = 'ministries';
	public $timestamps = false;

	protected $fillable = [
		'name'
	];

	public function user()
	{
		return $this->belongsTo(User::class, 'id', 'ministry_id');
	}
}
