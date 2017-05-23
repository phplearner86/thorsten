<?php  

namespace App\Observers;

use App\Car;

class CarObserver
{
	public function creating(Car $car)
	{
		$car->name = date("d-m-Y"). '-' . $car->model;
		$car->slug = str_slug($car->name);

	}
}