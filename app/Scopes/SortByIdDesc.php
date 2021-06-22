<?php
/**
 * Created by PhpStorm.
 * User: Mehmet F. GCGN
 * Date: 1.05.2021
 * Time: 16:08
 */

namespace App\Scopes;


use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;

class SortByIdDesc implements \Illuminate\Database\Eloquent\Scope
{
    /**
     * @var Scope
     */
    private $scope;

    /**
     * @inheritDoc
     */
    public function __construct(Scope $scope)
    {
        $this->scope = $scope;
    }

    public function apply(Builder $builder, Model $model)
    {
             $builder->orderBy('id', 'desc');
             $this->scope->apply($builder, $model);
    }
}
