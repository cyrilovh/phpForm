<?php
    namespace class;

    class phpForm{
        private ?methodForm $method; // get or post
        private ?string $action;

        public function __construct($method = methodForm::GET, $action = $_SERVER['PHP_SELF']){
            $this->method = $method;
            $this->action = $action;
        }

    }
?>