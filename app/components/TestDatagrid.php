<?php

namespace App\Components;

use Nette\Application\UI\Component;
use Ublaboo\DataGrid\DataGrid;

class TestDatagrid extends Component
{

	public function createComponentGrid()
	{
		DataGrid::$icon_prefix = 'glyphicon glyphicon-';
		$grid = new DataGrid();

		$grid->setPrimaryKey(0);
		$grid->setRememberState();
		$grid->setDataSource([
			[321, 54968, 2135, 516],
			[154, 53874, 215, 484],
			[1654, 546, 564, 8748],
			[1651, 56416, 15651, 5651],
			[321, 315365, 3513, 6511],
			[13561, 31658, 1351, 3515],
		]);

		$grid->addColumnText(0, 0)
			->setSortable()
			->setFilterText();
		$grid->addColumnText(1, 1)
			->setSortable()
			->setFilterText();
		$grid->addColumnText(2, 2)
			->setSortable()
			->setFilterText();
		$grid->addColumnText(3, 3)
			->setSortable()
			->setFilterText();

		return $grid;
	}

	public function render()
	{
		$this['grid']->render();
	}

}
