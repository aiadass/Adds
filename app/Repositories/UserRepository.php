<?php
/**
 * Created by PhpStorm.
 * User: Aidas
 */
declare(strict_types=1);

namespace App\Repositories;

use App\Models\User;

/**
 * Class UserRepository
 * @package App\Repositories\Exceptions
 */
class UserRepository extends Repository
{

    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return User::class;
    }
}