<?php

namespace App\GraphQL\Query;

use Folklore\GraphQL\Support\Query;
use GraphQL\Type\Definition\ResolveInfo;
use GraphQL\Type\Definition\Type;
use GraphQL;
use App\Models\Pais;

class PaisQuery extends Query
{
    protected $attributes = [
        'name' => 'PaisQuery',
        'description' => 'A query Pais'
    ];

    public function type()
    {
        return GraphQL::type('Pais');
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
        $result = Pais::find($args['id']);
        return $result;
    }
}
