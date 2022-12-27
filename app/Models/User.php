<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

//class User extends Authenticatable


/**
 * Class User
 *
 * @property int $id
 * @property string $name
 * @property string|null $email
 * @property string|null $gender
 * @property string|null $phone_no
 * @property int|null $dob
 * @property string|null $marital_status
 * @property int|null $age_cluster
 * @property int|null $cell_group_id
 * @property int|null $estate_id
 * @property int|null $employment_status
 * @property int|null $born_again
 * @property int|null $leadership_id
 * @property int|null $ministry_id
 * @property int|null $profession_id
 * @property int|null $education_level_id
 * @property Carbon|null $email_verified_at
 * @property string|null $password
 * @property string|null $remember_token
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property CellGroup $cell_group
 * @property Collection|CellGroup[] $cell_groups
 * @property EducationLevel $education_level
 * @property Leadership $leadership
 * @property Ministry $ministry
 * @property Profession $profession
 *
 * @package App\Models
 */
class User extends Authenticatable
{
	protected $table = 'users';

	protected $casts = [
		'dob' => 'int',
		'age_cluster' => 'int',
		'cell_group_id' => 'int',
		'estate_id' => 'int',
		'employment_status' => 'int',
		'born_again' => 'int',
		'leadership_id' => 'int',
		'ministry_id' => 'int',
		'profession_id' => 'int',
		'education_level_id' => 'int'
	];

	protected $dates = [
		'email_verified_at'
	];

	protected $hidden = [
		'password',
		'remember_token'
	];

	protected $fillable = [
		'name',
		'email',
		'gender',
		'phone_no',
		'dob',
		'marital_status',
		'age_cluster',
		'cell_group_id',
		'estate_id',
		'employment_status',
		'born_again',
		'leadership_id',
		'ministry_id',
		'profession_id',
		'education_level_id',
		'email_verified_at',
		'password',
		'remember_token'
	];

	public function cell_group()
	{
		return $this->hasOne(CellGroup::class, 'id', 'cell_group_id');
	}

	public function cell_groups()
	{
		return $this->hasMany(CellGroup::class, 'pastor_id');
	}

	public function education_level()
	{
		return $this->hasOne(EducationLevel::class, 'id', 'education_level_id');
	}

	public function leadership()
	{
		return $this->hasOne(Leadership::class, 'id', 'leadership_id');
	}

	public function ministry()
	{
		return $this->hasOne(Ministry::class, 'id', 'ministry_id');
	}

	public function profession()
	{
		return $this->hasOne(Profession::class, 'id', 'profession_id');
	}
}
