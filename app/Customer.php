<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Customer.
 *
 * @author  The scaffold-interface created at 2018-01-06 01:38:03pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Customer extends Model
{
	
	use SoftDeletes;

	protected $dates = ['deleted_at'];
    
	
    protected $table = 'customers';

	
	public function company()
	{
		return $this->belongsTo('App\Company','company_id');
	}

	
}
