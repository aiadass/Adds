<?php
/**
 * Created by PhpStorm.
 * User: Aidas
 */
declare(strict_types = 1);

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Repositories\AdvertisementsRepository;
use App\Services\Sluggable;
use Illuminate\View\View;

/**
 * Class FrontendController
 * @package App\Http\Controllers\Frontend
 */
class FrontendController extends Controller
{
    /**
     * @var Sluggable
     */
    private $sluggable;
    /**
     * @var AdvertisementsRepository
     */
    private $advertisementsRepository;

    /**
     * FrontendController constructor.
     * @param AdvertisementsRepository $advertisementsRepository
     * @param Sluggable $sluggable
     */
    function __construct(AdvertisementsRepository $advertisementsRepository, Sluggable $sluggable)
    {
        $this->sluggable = $sluggable;
        $this->advertisementsRepository = $advertisementsRepository;
    }

    /**
     * @return View
     */
    public function index(): View
    {
        $advertisements = $this->advertisementsRepository->with('users')->paginate(9);
        return view('index', compact('advertisements'));
    }

    /**
     * @param string $slug
     * @return View
     */
    public function show(string $slug): View
    {
        $advertisement = $this->advertisementsRepository->findBy('slug', $slug);
        return view('adds.show', compact('advertisement'));
    }
}