<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    use HasFactory;
	public function __construct()
	{
	}
	public function add($options)
	{
		$response=0;
		$username=checkVariable($options['username'],'','strtolower');
		$password=checkVariable($options['password'],'','');
		$response=array($username,$password);
		return $response;
	}
}
