<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Invoice.
 *
 * @author  The scaffold-interface created at 2018-01-06 04:49:45pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Invoice extends Model
{
	
	use SoftDeletes;

	protected $dates = ['deleted_at'];
    
	
    protected $table = 'invoices';

	
	public function reservation()
	{
		return $this->belongsTo('App\Reservation','reservation_id');
	}

	
	public function company()
	{
		return $this->belongsTo('App\Company','company_id');
	}

	
}
