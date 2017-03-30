<?php
/**
 * Created by PhpStorm.
 * User: Aidas
 */
declare(strict_types = 1);

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateAdvertisementRequest;
use App\Http\Requests\UpdateAdvertisementRequest;
use App\Repositories\AdvertisementsRepository;
use App\Repositories\UserRepository;
use App\Services\Sluggable;
use Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

/**
 * Class AdvertisementsController
 * @package App\Http\Controllers\Backend
 */
class AdvertisementsController extends Controller
{
    /**
     * @var AdvertisementsRepository
     */
    private $advertisementsRepository;
    /**
     * @var UserRepository
     */
    private $userRepository;

    /**
     * AdvertisementsController constructor.
     * @param AdvertisementsRepository $advertisementsRepository
     * @param UserRepository $userRepository
     */
    function __construct(AdvertisementsRepository $advertisementsRepository, UserRepository $userRepository)
    {
        $this->advertisementsRepository = $advertisementsRepository;
        $this->userRepository = $userRepository;
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $advertisements = $this->userRepository->findBy('id', Auth::user()->id)->advertisements;
        return view('backend-adds.index', compact('advertisements'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('backend-adds.create');
    }

    /**
     * @param CreateAdvertisementRequest $createAdvertisementRequest
     * @return RedirectResponse
     */
    public function store(CreateAdvertisementRequest $createAdvertisementRequest): RedirectResponse
    {
        $data = $createAdvertisementRequest->all();
        $dad = new Sluggable();

        $data['slug'] = $dad->create($data['title']);
        $data['user_id'] = Auth::user()->id;
        $this->advertisementsRepository->create($data);

        return redirect()->route('adds.index');
    }

    /**
     * @param int $id
     * @return View
     */
    public function edit(int $id): View
    {
        $advertisement = $this->advertisementsRepository->find($id);
        return view('backend-adds.edit', compact('advertisement'));
    }

    /**
     * @param int $id
     * @param UpdateAdvertisementRequest $updateAdvertisementRequest
     * @return RedirectResponse
     */
    public function update(int $id, UpdateAdvertisementRequest $updateAdvertisementRequest): RedirectResponse
    {
        $this->advertisementsRepository->update($updateAdvertisementRequest->except(['_method', '_token', 'submit']), $id);
        return redirect()->route('adds.index');
    }

}
