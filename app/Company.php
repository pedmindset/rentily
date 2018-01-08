<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Company.
 *
 * @author  The scaffold-interface created at 2018-01-05 02:01:13am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Company extends Model
{
	
	use SoftDeletes;

	protected $dates = ['deleted_at'];
    
	
    protected $table = 'companies';

	
	public function owner()
	{
		return $this->belongsTo('App\User','user_id');
	}

	

	/**
     * user.
     *
     * @return  \Illuminate\Support\Collection;
     */
    public function userCompany()
    {
        return $this->belongsToMany('App\User');
    }

    /**
     * Assign a user.
     *
     * @param  $user
     * @return  mixed
     */
    public function assignUser($user)
    {
        return $this->users()->attach($user);
    }
    /**
     * Remove a user.
     *
     * @param  $user
     * @return  mixed
     */
    public function removeUser($user)
    {
        return $this->users()->detach($user);
    }

}
