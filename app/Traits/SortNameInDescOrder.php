<?php
/**
 * Created by PhpStorm.
 * User: Mehmet F. GCGN
 * Date: 6.05.2021
 * Time: 14:32
 */

namespace App\Traits;


trait SortNameInDescOrder
{
    public function scopeSortByNameDesc($query)
    {
        $query->orderBy("name", 'asc');
    }
}
