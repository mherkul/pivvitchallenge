<?php 
namespace App\Services;

use App\Contracts\PurchasesInterface;
use App\Purchase;

class PurchasesService implements PurchasesInterface
{
	/**
	* Create a new instance of PurchaseService class
	*
	* @return void
	*/
	public function __construct()
	{
		$this->model = new Purchase();
	}

	/**
	* Store purchase in DB.
	*
	* @return  object
	*/
	public function storeOne($data)
	{		
		return $this->model->create($data);
	}


	/**
	* Get all purchases.
	*
	* @return  collection
	*/
	public function getAll()
	{		
		return $this->model->with('offering')->get();
	}
}