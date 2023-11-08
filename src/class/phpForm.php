<?php
namespace class;

class PhpForm {
    private ?string $method;
    private ?string $action;
    private ?formInput|formButton|formSelect|formTextarea $formElement;

    const ALLOWED_METHODS = ["GET", "POST"];

    public function __construct() {
        $this->method = 'POST'; // Par défaut, utilise POST
        $this->action = $_SERVER['PHP_SELF']; // Par défaut, utilise PHP_SELF
    }

    /**
     * Get METHOD Form (GET or POST)
     *
     * @return string|null
     */
    public function getMethod(): ?string {
        return $this->method;
    }

    /**
     * Set METHOD Form (GET or POST)
     *
     * @param string $method
     * @return void
     */
    public function setMethod(string $method) {
        $method = strtoupper($method);
        if (in_array($method, self::ALLOWED_METHODS)) {
            $this->method = $method;
        } else {
            $this->method = 'POST';
        }
    }

    /**
     * Get ACTION Form
     *
     * @return string|null
     */
    public function getAction(): ?string {
        return $this->action;
    }

    /**
     * Set ACTION Form
     *
     * @param string $action
     * @return void
     */
    public function setAction(string $action) {
        // Vous pouvez ajouter des vérifications pour vous assurer que l'action est valide
        $this->action = $action;
    }
}
?>
