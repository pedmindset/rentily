<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Item.
 *
 * @author  The scaffold-interface created at 2018-01-06 03:38:15am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Item extends Model
{
	
	use SoftDeletes;

	protected $dates = ['deleted_at'];
    
	
    protected $table = 'items';

	
	public function category()
	{
		return $this->belongsTo('App\Category','category_id');
	}

	
	public function company()
	{
		return $this->belongsTo('App\Company','company_id');
	}

	

	/**
     * package.
     *
     * @return  \Illuminate\Support\Collection;
     */
    public function packages()
    {
        return $this->belongsToMany('App\Package');
    }

    /**
     * Assign a package.
     *
     * @param  $package
     * @return  mixed
     */
    public function assignPackage($package)
    {
        return $this->packages()->attach($package);
    }
    /**
     * Remove a package.
     *
     * @param  $package
     * @return  mixed
     */
    public function removePackage($package)
    {
        return $this->packages()->detach($package);
    }


	/**
     * reservation.
     *
     * @return  \Illuminate\Support\Collection;
     */
    


	/**
     * reservation.
     *
     * @return  \Illuminate\Support\Collection;
     */
    public function reservations()
    {
        return $this->belongsToMany('App\Reservation');
    }

    /**
     * Assign a reservation.
     *
     * @param  $reservation
     * @return  mixed
     */
    public function assignReservation($reservation)
    {
        return $this->reservations()->attach($reservation);
    }
    /**
     * Remove a reservation.
     *
     * @param  $reservation
     * @return  mixed
     */
    public function removeReservation($reservation)
    {
        return $this->reservations()->detach($reservation);
    }

}
