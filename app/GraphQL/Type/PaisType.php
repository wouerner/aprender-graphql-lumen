<?php

namespace App\GraphQL\Type;

use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Type as BaseType;
use GraphQL;

class PaisType extends BaseType
{
    protected $attributes = [
        'name' => 'Pais',
        'description' => 'A type Pais'
    ];

    public function fields()
    {
        return [
            'id' => [
                'type' => Type::nonNull(Type::id()),
                'description' => 'Identificador.'
            ],
            'nome' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'Nome do Pais'
            ],
            'created_at' => [
                'type' => Type::string(),
                'description' => 'Data de criação.'
            ],
            'updated_at' => [
                'type' => Type::string(),
                'description' => 'Data de atualização.'
            ],
            'regioes' => [
                'args' => [
                    'id' => [
                        'type'        => Type::int(),
                        'description' => 'Identificador da regiao',
                    ],
                ],
                'type' => Type::listOf(GraphQL::type('Regiao')),
                'description' => 'Regiões do Pais',
            ],
        ];

    }

    public function resolveRegioesField($root, $args)
    {
        if (isset($args['id'])) {
            return  $root->regioes->where('id', $args['id']);
        }

        return $root->regioes;
    }
}
