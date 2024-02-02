<?php namespace App\Repositories;

use App\Models\Rentier;

class RentierRepository extends BaseRepository
{
    protected $model;

    public function __construct(Rentier $model)
    {
        parent::__construct($model);
    }
}
