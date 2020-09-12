<?php

namespace Modules\Base\Scopes;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;

class OrderScope implements Scope
{
    /**
     * Apply the scope to a given Eloquent query builder.
     *
     * @param Builder $builder
     * @param Model $model
     * @return void
     */
    public function apply(Builder $builder, Model $model)
    {
        $sort = request()->get('sort', null);

        if (!$sort)
            return;

        $arrayData = explode(' ', $sort);
        $column = $arrayData[0];
        $direction = $arrayData[1];

        $builder->orderBy($column, $direction);
    }
}
