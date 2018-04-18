<?php

namespace App\GraphQL\Type;

use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Type as BaseType;
use GraphQL;

class RegiaoType extends BaseType
{
    protected $attributes = [
        'name' => 'Regiao',
        'description' => 'A type Regiao'
    ];

    public function fields()
    {
        return [
            'id' => [
                'type' => Type::nonNull(Type::id())
            ],
            'pais_id' => [
                'type' => Type::nonNull(Type::int()),
                'description' => 'Pais Identificador',
            ],
            'pais' => [
                'type' => GraphQL::type('Pais'),
                'description' => 'Objeto Pais',
            ],
            'comidas' => [
                'type' => Type::listOf(GraphQL::type('Comida')),
                'description' => 'Comidas da Região',
                'args' => [
                    'id' => [
                        'type' => Type::int(),
                        'description' => 'Identificador da Comida',
                    ],
                ],
            ],
            'nome' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'Nome da Região',
            ],
            'created_at' => [
                'type' => Type::string(),
                'description' => 'Data de criação.'
            ],
            'updated_at' => [
                'type' => Type::string(),
                'description' => 'Data de atualização.'
            ]
        ];
    }

    public function resolvePaisField($root, $args)
    {
        return $root->pais;
    }

    public function resolveComidasField($root, $args)
    {
        return $root->comidas;
    }
}
