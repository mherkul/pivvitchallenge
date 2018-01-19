<?php 
namespace App\Services;

use App\Contracts\OfferingsInterface;
use App\Offering;

class OfferingsService implements OfferingsInterface
{
	/**
	* Create a new instance of OfferingsService class
	*
	* @return void
	*/
	public function __construct()
	{
		$this->model = new Offering();
	}

	/**
	* Get all offerings.
	*
	* @return  collection
	*/
	public function getAll()
	{		
		return $this->model->get();
	}
}