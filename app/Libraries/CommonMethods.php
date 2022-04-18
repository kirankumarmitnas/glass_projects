<?php
namespace App\Libraries;
class  CommonMethods
{
    public static function getUserPermission($options=false)
    {
		$response=0;
		$response=array(
		array('userType'=>2,'catelog'=>1,'isAll'=>1,'urlType'=>array(1)),
		array('userType'=>2,'catelog'=>2,'process'=>1,'id'=>2,'child'=>array(9,10,11,15,17,18,19,23,29)),
		array('userType'=>2,'catelog'=>2,'process'=>1,'id'=>44),
		array('userType'=>2,'catelog'=>2,'process'=>-1,'id'=>49),
		array('userType'=>2,'catelog'=>2,'process'=>-1,'id'=>7),
		array('userType'=>2,'catelog'=>2,'process'=>-1,'id'=>112),
		array('userType'=>2,'catelog'=>2,'process'=>1,'id'=>107,'child'=>array(108,109,110,111,119)),
		array('userType'=>3,'catelog'=>2,'process'=>1,'id'=>1),
		array('userType'=>3,'catelog'=>2,'process'=>1,'id'=>2,'child'=>array(10,11,14,17,18,19,23,29)),
		array('userType'=>3,'catelog'=>2,'process'=>1,'id'=>3,'child'=>array(30,31)),
	    array('userType'=>3,'catelog'=>2,'process'=>1,'id'=>6),
		array('userType'=>3,'catelog'=>2,'process'=>1,'id'=>8,'child'=>array(36,57,61,78,84)),
		array('userType'=>3,'catelog'=>2,'process'=>1,'id'=>58,'child'=>array(60,62,65,67)),
		array('userType'=>3,'catelog'=>2,'process'=>1,'id'=>73,'child'=>array(75,85)),
		array('userType'=>3,'catelog'=>2,'process'=>1,'id'=>94),
		array('userType'=>3,'catelog'=>2,'process'=>1,'id'=>95,'child'=>array(96,97,98,99,100,104)),
		);
		return $response;
	}
	public static function getGenderWiseTypes($options=false)
	{
		$response=0;
		$response=array(
		array('id'=>1,'name'=>'Male'),
		array('id'=>2,'name'=>'Female'),
		array('id'=>0,'name'=>'None'),
		);
		return $response;
	}
	public static function getAnswerTypes($options=false)
	{
		$response=0;
		$response=array(
		array('id'=>0,'name'=>'Options'),
		array('id'=>1,'name'=>'Input'),
		);
		return $response;
	}
	public static function getOptionSelectionTypes($options=false)
	{
		$response=0;
		$response=array(
		array('id'=>0,'name'=>'Single'),
		array('id'=>1,'name'=>'Multiple'),
		);
		return $response;
	}
	public static function getOptionTypes($options=false)
	{
		$response=0;
		$response=array(
		array('id'=>0,'name'=>'Simple'),
		array('id'=>1,'name'=>'With Input'),
		array('id'=>2,'name'=>'with Image'),
		);
		return $response;
	}
}