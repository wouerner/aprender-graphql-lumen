<?php

namespace App\GraphQL\Query;

use Folklore\GraphQL\Support\Query;
use GraphQL\Type\Definition\ResolveInfo;
use GraphQL\Type\Definition\Type;
use GraphQL;

use App\Models\Regiao;

class RegiaoQuery extends Query
{
    protected $attributes = [
        'name' => 'RegiaoQuery',
        'description' => 'A query Região'
    ];

    public function type()
    {
        return GraphQL::type('Regiao');
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
        $result = Regiao::find($args['id']);
        return $result;
    }
}
