<?php

namespace App\GraphQL\Mutation;

use Folklore\GraphQL\Support\Mutation;
use GraphQL\Type\Definition\ResolveInfo;
use GraphQL\Type\Definition\Type;
use GraphQL;

class CarroMutation extends Mutation
{
    protected $attributes = [
        'name' => 'CarroMutation',
        'description' => 'A mutation'
    ];

    public function type()
    {
        return GraphQL::type('Carro');
    }

    public function args()
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

    public function resolve($root, $args, $context, ResolveInfo $info)
    {
        return ['id' => '1', 'nome' => 'Corsa', 'modelo' => 'vhc-e'];
    }
}
