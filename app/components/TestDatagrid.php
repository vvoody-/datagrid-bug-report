<?php

namespace App\Components;

use Nette\Application\UI\Component;
use Ublaboo\DataGrid\DataGrid;

class TestDatagrid extends Component
{

	public function createComponentGrid()
	{
		$grid = new DataGrid();

		$grid->setPrimaryKey(0);
		$grid->setDataSource([
			[321, 54968, 2135, 516],
			[154, 53874, 215, 484],
			[1654, 546, 564, 8748],
			[1651, 56416, 15651, 5651],
		]);

		$grid->addColumnText(0, 0);
		$grid->addColumnText(1, 1);
		$grid->addColumnText(2, 2);
		$grid->addColumnText(3, 3);

		return $grid;
	}

	public function render()
	{
		$this['grid']->render();
	}

}
