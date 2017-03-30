<?php
/**
 * Created by PhpStorm.
 * User: Aidas
 */
declare(strict_types=1);

namespace App\Repositories;

use App\Models\Advertisement;

/**
 * Class AdvertisementsRepository
 * @package App\Repositories
 */
class AdvertisementsRepository extends Repository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Advertisement::class;
    }
}