<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Team.
 *
 * @author  The scaffold-interface created at 2018-01-06 12:26:05am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Team extends Model
{
	
	
    protected $table = 'teams';

	
	public function user()
	{
		return $this->belongsTo('App\User','user_id');
	}

	

	/**
     * user.
     *
     * @return  \Illuminate\Support\Collection;
     */
    public function usersTeam()
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
