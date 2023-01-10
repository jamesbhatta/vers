<?php

namespace App\Queries;

use App\Filters\ProjectSearch;
use Spatie\QueryBuilder\QueryBuilder;
use Spatie\QueryBuilder\AllowedFilter;

class ProjectsQuery extends QueryBuilder
{
    public function __construct()
    {
    }
}
