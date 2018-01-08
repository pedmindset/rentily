<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Payment.
 *
 * @author  The scaffold-interface created at 2018-01-06 05:06:57pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Payment extends Model
{
	
	use SoftDeletes;

	protected $dates = ['deleted_at'];
    
	
    protected $table = 'payments';

	
	public function invoice()
	{
		return $this->belongsTo('App\Invoice','invoice_id');
	}

	
	public function company()
	{
		return $this->belongsTo('App\Company','company_id');
	}

	
}
