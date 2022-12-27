<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class EducationLevel
 * 
 * @property int $id
 * @property string|null $name
 * 
 * @property User $user
 *
 * @package App\Models
 */
class EducationLevel extends Model
{
	protected $table = 'education_levels';
	public $timestamps = false;

	protected $fillable = [
		'name'
	];

	public function user()
	{
		return $this->belongsTo(User::class, 'id', 'education_level_id');
	}
}
