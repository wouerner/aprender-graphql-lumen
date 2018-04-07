<?php

namespace App\GraphQL\Type;

use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Type as BaseType;
use GraphQL;

class CarroType extends BaseType
{
    protected $attributes = [
        'name' => 'Carro',
        'description' => 'A type'
    ];

    public function fields()
    {
        return [
            'id' => [
                'type' => Type::nonNull(Type::int())
            ],
            'nome' => [
                'type' => Type::string()
            ],
            'modelo' => [
                'type' => Type::string()
            ]
        ];
    }
}
