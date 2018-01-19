<?php 

namespace App\Contracts;

interface PurchasesInterface
{
	/**
	* Get all purchases.
	*
	* @return  collection
	*/
	public function getAll();

		/**
	* Store purchase in DB.
	*
	* @return  object
	*/
	public function storeOne($data);
}