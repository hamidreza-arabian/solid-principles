    <?php

/*
 * clint shouldn't be force to implement unused things
 * */
class capitan{
    /**
     * @param workers $worker
     * @return void
     */
    public function hire(manageable $worker){
        $worker->manage();
    }
}

interface workeableInterface{
    public function work();
}

interface sleepableInterface{
    public function sleep();
}

interface manageable{
    public function manage();
}


class humanworker implements workeableInterface , sleepableInterface , manageable {
    public function work()
    {
        echo "can work". "<br/>";
    }

    public function sleep()
    {
        echo "can sleep". "<br/>";
    }

    public function manage()
    {
        $this->work();
        $this->sleep();
    }
}

class RobotWorker implements workeableInterface , manageable {

    public function work()
    {
        echo "can work" . "<br/>";
    }
    public function manage()
    {
        $this->work();
    }



}

$cap = new capitan();
$cap->hire(new humanworker());

$cap->hire(new RobotWorker());

