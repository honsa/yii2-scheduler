<?php
/**
 * @copyright Copyright(c) 2016 Webtools Ltd
 * @link https://github.com/thamtech/yii2-scheduler
 * @license https://opensource.org/licenses/MIT
**/

namespace thamtech\scheduler\tests\tasks;

class NumberTask extends \thamtech\scheduler\Task
{
    public $description = 'Prints the numbers from 0 to 100';
    public $schedule = '*/1 * * * *';

    public function run()
    {
        foreach (range(0, 100) as $number) {
            echo $number;
        }
    }
}
