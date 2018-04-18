<?php

namespace App\GraphQL\Mutation;

use Folklore\GraphQL\Support\Mutation;
use GraphQL\Type\Definition\ResolveInfo;
use GraphQL\Type\Definition\Type;
use GraphQL;

use App\Models\Pais;

class PaisMutation extends Mutation
{
    protected $attributes = [
        'name' => 'CarroMutation',
        'description' => 'A mutation'
    ];

    public function type()
    {
        return GraphQL::type('Pais');
    }

    public function args()
    {
        return [
            'id' => [
                'type' => Type::int()
            ],
            'nome' => [
                'type' => Type::string()
            ],
        ];
    }

    public function resolve($root, $args, $context, ResolveInfo $info)
    {
        $pais = new Pais();

        $pais->nome = $args['nome'];
        $pais->save();

        return $pais;
    }
}
