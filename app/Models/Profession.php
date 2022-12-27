<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Profession
 * 
 * @property int $id
 * @property string|null $name
 * 
 * @property User $user
 *
 * @package App\Models
 */
class Profession extends Model
{
	protected $table = 'professions';
	public $timestamps = false;

	protected $fillable = [
		'name'
	];

	public function user()
	{
		return $this->belongsTo(User::class, 'id', 'profession_id');
	}
}
