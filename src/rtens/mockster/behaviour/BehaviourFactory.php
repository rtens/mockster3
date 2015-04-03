<?php
namespace rtens\mockster\behaviour;

use rtens\mockster\Stub;

class BehaviourFactory {

    /** @var Stub */
    private $stub;

    function __construct(Stub $stub) {
        $this->stub = $stub;
    }

    /**
     * @param mixed $value
     * @return Behaviour
     */
    public function return_($value) {
        return $this->stub->will(new ReturnValueBehaviour($value));
    }
}