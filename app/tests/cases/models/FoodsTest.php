<?php
/**
 * Tests for Model Food
 * 
 * @category ModelTests
 * @package  KcalTests
 * @author   scx <mattpiskorz@gmail.com>
 * @license  none www.scx.grizon.pl
 * @link     www.scx.grizon.pl
 * 
 */


namespace app\tests\cases\models;

use \app\models\Foods;



/**
 * Mock Test Class for model Foods
 * 
 * @category ModelTests
 * @package  KcalTests
 * @author   scx <mattpiskorz@gmail.com>
 * @license  none www.scx.grizon.pl [description]
 * @link     www.scx.grizon.pl
 */
class MockFoods extends Foods
{
    protected $_meta = array('connection' => false);
}
/**
 * Test Class for model Foods
 * 
 * @category ModelTests
 * @package  KcalTests
 * @author   scx <mattpiskorz@gmail.com>
 * @license  http://opensource.org/licenses/bsd-license.php The BSD License
 * @link     www.scx.grizon.pl
 */
class FoodsTest extends \lithium\test\Unit
{

    /**
     * Test modelu 1
     * 
     * @return [type] [description]
     */
    public function testModel()
    {
        $foods = new Foods();
        $result = get_class($foods);
        $expected = 'app\models\Foods';
        $this->assertEqual($expected, $result);
    }

    /**
     * [testCalculateKcal description]
     * 
     * @return [type] [description]
     */
    public function testCalculateKcal()
    {
        
        $test_data = array('protein'=>1,'carb'=>1,'fat'=>1);
        $result = Foods::calculateKcal($test_data);

        $expected = 17;

        $this->assertEqual($expected, $result);
    }

    public function testFoodHaveNames() {
        $this->assertEqual('string', MockFoods::hasField('name')['type']);
    }

    public function testFoodHaveKcal() {
        $this->assertEqual('float', MockFoods::hasField('kcal')['type']);
    }    
}
