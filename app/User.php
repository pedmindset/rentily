<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;
use App\Traits\PlanSubscriber;
use App\Contracts\PlanSubscriberInterface;

class User extends Authenticatable implements PlanSubscriberInterface
{
    use Notifiable;
    use HasRoles;
    use PlanSubscriber;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

	/**
     * team.
     *
     * @return  \Illuminate\Support\Collection;
     */
    public function teams()
    {
        return $this->belongsToMany('App\Team');
    }

    /**
     * Assign a team.
     *
     * @param  $team
     * @return  mixed
     */
    public function assignTeam($team)
    {
        return $this->teams()->attach($team);
    }
    /**
     * Remove a team.
     *
     * @param  $team
     * @return  mixed
     */
    public function removeTeam($team)
    {
        return $this->teams()->detach($team);
    }




	/**
     * company.
     *
     * @return  \Illuminate\Support\Collection;
     */
    public function companies()
    {
        return $this->belongsToMany('App\Company');
    }

    /**
     * Assign a company.
     *
     * @param  $company
     * @return  mixed
     */
    public function assignCompany($company)
    {
        return $this->companies()->attach($company);
    }
    /**
     * Remove a company.
     *
     * @param  $company
     * @return  mixed
     */
    public function removeCompany($company)
    {
        return $this->companies()->detach($company);
    }

}
