<?php

namespace Modules\Utility\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Modules\Base\Http\Controllers\BaseController;
use Modules\Base\Scopes\FilterScope;

class CountController extends BaseController
{
    /**
     * Checks if it contains any records in the database.
     *
     * @param $table
     *
     * @return bool
     */
    public function count($table)
    {
        $model = DB::table($table);
        $filters = request()->get('filters', []);

        FilterScope::addFilters($filters, $model);
        return $model->count();
    }
}
