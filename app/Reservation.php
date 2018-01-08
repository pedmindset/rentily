<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Reservation.
 *
 * @author  The scaffold-interface created at 2018-01-06 02:51:45pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Reservation extends Model
{
	
	use SoftDeletes;

	protected $dates = ['deleted_at'];
    
	
    protected $table = 'reservations';

	
	public function company()
	{
		return $this->belongsTo('App\Company','company_id');
	}

	
	public function customer()
	{
		return $this->belongsTo('App\Customer','customer_id');
	}

	

	/**
     * item.
     *
     * @return  \Illuminate\Support\Collection;
     */
    public function items()
    {
        return $this->belongsToMany('App\Item');
    }

    /**
     * Assign a item.
     *
     * @param  $item
     * @return  mixed
     */
    public function assignItem($item)
    {
        return $this->items()->attach($item);
    }
    /**
     * Remove a item.
     *
     * @param  $item
     * @return  mixed
     */
    public function removeItem($item)
    {
        return $this->items()->detach($item);
    }

}
