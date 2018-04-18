<?php

namespace App\GraphQL\Type;

use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Type as BaseType;
use GraphQL;

class ComidaType extends BaseType
{
    protected $attributes = [
        'name' => 'Comida',
        'description' => 'A type Comida'
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
                'description' => 'Nome da comida.'
            ],
            'created_at' => [
                'type' => Type::string(),
                'description' => 'Data de criação.'
            ],
            'updated_at' => [
                'type' => Type::string(),
                'description' => 'Data de atualização.'
            ],
            'regiao' => [
                'type' => GraphQL::type('Regiao'),
                'description' => 'Região dessa Comida.',
            ],
        ];
    }

    public function resolveRegiaoField($root, $args)
    {
        return $root->regiao;
    }
}
