<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable {
	use Notifiable;

	/**
	 * The table associated with the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'username',
		'password',
		'fullname',
		'email',
		'birthday',
		'role',
	];

	/**
	 * The attributes that should be hidden for arrays.
	 *
	 * @var array
	 */
	protected $hidden = [
		'password',
		'remember_token',
	];

	/**
	 * set user password
	 *
	 * @param string $avalue
	 *
	 * @return void
	 */
	public function setPasswordAttribute( $value ) {
		if ( $value ) {
			if ( \Hash::needsRehash( $value ) ) {
				$this->attributes['password'] = \Hash::make( $value );
			} else {
				$this->attributes['password'] = $value;
			}
		}
	}

	/**
	 * Add some user's role functions
	 */
	public function isAdmin() {
		return $this->role == 1;
	}

	/**
	 * Add some user's role functions
	 */
	public function isAuthor() {
		return $this->role == 1 || $this->role == 2;
	}
}
