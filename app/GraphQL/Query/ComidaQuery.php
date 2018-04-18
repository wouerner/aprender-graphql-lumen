<?php

namespace App\GraphQL\Query;

use Folklore\GraphQL\Support\Query;
use GraphQL\Type\Definition\ResolveInfo;
use GraphQL\Type\Definition\Type;
use GraphQL;

use App\Models\Comida;

class ComidaQuery extends Query
{
    protected $attributes = [
        'name' => 'ComidaQuery',
        'description' => 'A query Comida'
    ];

    public function type()
    {
        return GraphQL::type('Comida');
    }

    public function args()
    {
        return [
            'id' => [
                'type' => Type::nonNull(Type::id())
            ]
        ];
    }

    public function resolve($root, $args, $context, ResolveInfo $info)
    {
        $result = Comida::find($args['id']);
        return $result;
    }
}
