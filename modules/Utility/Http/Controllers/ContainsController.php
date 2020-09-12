<?php

namespace Modules\Utility\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Modules\Base\Http\Controllers\BaseController;

class ContainsController extends BaseController
{
    /**
     * Checks if it contains any records in the database.
     *
     * @param $table
     * @param $field
     * @param $value
     *
     * @return bool
     */
    public function contains($table, $field, $value)
    {
        return (DB::table($table)->where($field, $value)->count() > 0);
    }

}
