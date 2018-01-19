<?php 

namespace App\Contracts;

interface OfferingsInterface
{
	/**
	* Get all offerings.
	*
	* @return  collection
	*/
	public function getAll();
}