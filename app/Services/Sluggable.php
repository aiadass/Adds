<?php
/**
 * Created by PhpStorm.
 * User: Aidas
 */
declare(strict_types = 1);

namespace App\Services;
use App\Models\Advertisement;
use Illuminate\Database\Eloquent\Collection;

/**
 * Class Slugable
 * @package App\Services
 */
class Sluggable
{
    /**
     * @param string $title
     * @param int $id
     * @return string
     * @throws \Exception
     */
    public function create(string $title, $id = 0): string
    {
        $slug = str_slug($title);

        $currentSlugs = $this->getCurrentSlugs($slug, $id);

        var_dump($currentSlugs);
        if (!$currentSlugs->contains('slug', $slug)) {
            return $slug;
        }

        for ($i = 1; $i <= 1000; $i++) {
            $newSlug = $slug . '-' . $i;
            if (!$currentSlugs->contains('slug', $newSlug)) {
                return $newSlug;
            }
        }

        throw new \Exception('Slug not created');
    }

    /**
     * @param $slug
     * @param int $id
     * @return Collection
     */
    protected function getCurrentSlugs($slug, $id = 0): Collection
    {
        return Advertisement::select('slug')->where('slug', 'like', $slug . '%')
            ->where('id', '<>', $id)
            ->get();
    }
}