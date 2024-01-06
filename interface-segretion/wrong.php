<?php

/*
 * clint shouldn't be force to implement unused things
 * */
class capitan{
    /**
     * @param workers $worker
     * @return void
     */
    public function manage(workeableInterface $worker){
        $worker->work();
        $worker->sleep();
    }
}

interface workeableInterface{
    public function work();
    public function sleep();

}



class humanworker implements workeableInterface {
    public function work()
    {
        echo "can work". "<br/>";
    }

    public function sleep()
    {
        echo "can sleep". "<br/>";
    }


}

class RobotWorker implements workeableInterface {

    public function work()
    {
        echo "can work" . "<br/>";
    }

    public function sleep()
    {
        throw new Exception('Robobt worker can\'t sleep');
    }


}

$cap = new capitan();
$cap->hire(new humanworker());

$cap->hire(new RobotWorker());

