<?php

namespace App\Filters;

use Illuminate\Database\Eloquent\Builder;
use Spatie\QueryBuilder\Filters\Filter;

class ProjectSearch implements Filter
{
    public function __invoke(Builder $query, $value, string $property)
    {
        $query->where('title', 'like', $value . '%');
    }
}
