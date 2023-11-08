<?php
    namespace class;

    /**
     * Abstract class common to all elements of a form. This class must be instantiated using an extended class.
     */
    abstract class formElement{
        protected string $name; // attr "name"
        protected ?string $id; // attr "id"

        protected bool $required; // attr "required"
        protected bool $disabled; // attr "disabled"

        protected ?string $textBefore; // Text before the element
        protected ?string $textAfter; // Text after the element

        protected function __construct(string $name, bool $required = false, bool $disabled = false){
            $this->name = $name;
            $this->id = null;
            $this->required = $required;
            $this->disabled = $disabled;
            $this->textBefore = null;
            $this->textAfter = null;
        }

        /* SETTERS */

        public function setName(string $name){
            $this->name = $name;
        }

        public function setId(string $id){
            $this->id = $id;
        }

        public function setRequired(bool $required){
            $this->required = $required;
        }

        public function setDisabled(bool $disabled){
            $this->disabled = $disabled;
        }

        /**
         * Set text or HTML before the element
         *
         * @param string $textBefore
         * @return void
         */
        public function setTextBefore(string $textBefore){
            $this->textBefore = $textBefore;
        }

        /**
         * Set text or HTML after the element
         *
         * @param string $textAfter
         * @return void
         */
        public function setTextAfter(string $textAfter){
            $this->textAfter = $textAfter;
        }

        /* GETTERS */
        public function getName(): string{
            return $this->name;
        }

        public function getId(): ?string{
            return $this->id;
        }

        public function getRequired(): bool{
            return $this->required;
        }

        public function getDisabled(): bool{
            return $this->disabled;
        }

        public function getTextBefore(): ?string{
            return $this->textBefore;
        }

        public function getTextAfter(): ?string{
            return $this->textAfter;
        }
        
    }