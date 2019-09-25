@formField('input', [
    'translated' => true,
    'name' => 'battery',
    'label' => 'How much is the Battery?',
    'maxlength' => 50,  
])
@formField('select', [
    'name' => 'my_block_size',
    'label' => 'size',
    'unpack' => true,
    'options' => [
        [
            'value' => '4.0"',
            'label' => '4.0"'
        ],
        [
            'value' => '5.0"',
            'label' => '5.0"'
        ],
        [
            'value' => '5.5"',
            'label' => '5.5"'
        ],
        [
            'value' => '6.0"',
            'label' => '6.0"'
        ],
        [
            'value' => '6.3"',
            'label' => '6.3"'
        ],
        [
            'value' => '7"',
            'label' => '7"'
        ],
    ]
])