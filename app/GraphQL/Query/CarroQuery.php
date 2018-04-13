<?php

namespace App\GraphQL\Query;

use Folklore\GraphQL\Support\Query;
use GraphQL\Type\Definition\ResolveInfo;
use GraphQL\Type\Definition\Type;
use GraphQL;

class CarroQuery extends Query
{
    protected $attributes = [
        'name' => 'CarroQuery',
        'description' => 'A query for carro'
    ];

    public function type()
    {
        return GraphQL::type('Carro');
    }

    public function args()
    {
        return [
            'id'  =>[
                'type' => Type::nonNull(Type::string())
            ]
        ];
    }

    public function resolve($root, $args, $context, ResolveInfo $info)
    {
        return ['id' => '1', 'nome' => 'Corsa', 'modelo' => 'vhc-e'];
    }
}
