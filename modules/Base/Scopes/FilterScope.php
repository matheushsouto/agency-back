<?php

namespace Modules\Base\Scopes;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;

class FilterScope implements Scope
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
        $filters = request()->get('filters', []);

        foreach ($filters as $key => $filter) {
            $array = explode(' ', $filter);
            $value = substr($filter, (strlen($array[0]) + strlen($array[1]) + 2));
            $column = $array[0];
            $operator = $array[1];

            if ($operator == 'ILIKE') {
                $value = "%$value%";
            }

            $builder->where($column, $operator, $value);
        }
    }
}
