<?php



namespace app\tests\cases\models;

use \app\models\Foods;

class FoodTest extends \lithium\test\Unit {


	public function testModel() {
		$foods = new Foods();
		$result = get_class($foods);
		$expected = 'app\models\Foods';
		$this->assertEqual($expected, $result);
	}

	public function testCalculateKcal() {
		
		$test_data = array('protein'=>1,'carb'=>1,'fat'=>1);
		$result = Foods::calculateKcal($test_data);

		$expected = 17;

		$this->assertEqual($expected,$result);
	}
}





?> 