<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Category.
 *
 * @author  The scaffold-interface created at 2018-01-06 01:26:48am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Category extends Model
{
	
	
    protected $table = 'categories';

	
	public function company()
	{
		return $this->belongsTo('App\Company','company_id');
	}

	
}
