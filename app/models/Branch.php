<?php
use LaravelBook\Ardent\Ardent;
class Branch extends extends Ardent;
{
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	
	protected $table = 'branch';
	
	/**
	 *@return void
	 */
	public function user()
	{
		$this->belongsTo('User','user_id');
	}

	/**
	 * The rules applied to this model using Ardent 
	 * 
	 * @var array
	 */
	public static $rules = array(
		'branch_name' => 'required',
		'branch_address' => 'required'
		);
}
