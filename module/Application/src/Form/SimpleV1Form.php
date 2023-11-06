<?php

namespace Application\Form;

use Laminas\Form\Form;

class SimpleV1Form extends Form
{

    public function __construct()
    {
        parent::__construct();

        $this->add([
            "name" => "name",
            'options' => [
                'label' => 'Your name',
            ],
            'type'  => 'Text',
        ]);
        $this->add([
            'name' => 'send',
            'type'  => 'Submit',
            'attributes' => [
                'value' => 'Submit',
            ],
        ]);
    }
}