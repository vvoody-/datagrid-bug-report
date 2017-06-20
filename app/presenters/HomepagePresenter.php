<?php

namespace App\Presenters;

use App\Components\TestDatagrid;
use Nette;


class HomepagePresenter extends Nette\Application\UI\Presenter
{

	public function createComponentGrid()
	{
		$grid = new TestDatagrid();
		return $grid;
	}

}
