<?php

class BBFDTypedText extends FLBuilderModule {

    /**
     * Constructor function for the module. You must pass the
     * name, description, dir and url in an array to the parent class.
     *
     * @method __construct
     */
    public function __construct()
    {
        parent::__construct(array(
            'name'          => __('Typed Text', 'bbfd'),
            'description'   => __('A basic typed text.', 'bbfd'),
            'category'		=> __('BBFD Modules', 'bbfd'),
            'dir'           => BBFD_MODULES_DIR . 'bbfd-typed-text/',
            'url'           => BBFD_MODULES_URL . 'bbfd-typed-text/'
        ));

        $this->add_js('jquery-typeit', 'https://cdn.jsdelivr.net/jquery.typeit/4.4.0/typeit.min.js', [ 'jquery' ], null, false);
    }
}

FLBuilder::register_module('BBFDTypedText', array(
    'general'       => array(
        'title'         => __('General', 'bbfd'),
        'sections'      => array(
            'general'       => array(
                'title'         => __('Section Title', 'bbfd'),
                'fields'        => array(
                    'text'     => array(
                        'type'          => 'text',
                        'label'         => __('Text', 'bbfd'),
                        'multiple'      => true
                    ),
                )
            )
        )
    )
));