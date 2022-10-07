<?php

namespace App\Http\Controllers;

use App\DataTables\CampaignDataTable;
use App\Helpers\Traits\ImageProcess;
use App\Http\Requests\StoreCampaignRequest;
use App\Http\Requests\UpdateCampaignRequest;
use App\Repository\Interfaces\CampaignInterface;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Session;

class CampaignController extends Controller
{
    use ImageProcess;

    private CampaignInterface $campaign;

    public function __construct(CampaignInterface $campaign)
    {
        $this->campaign = $campaign;
    }

    public function index(CampaignDataTable $dataTable)
    {
        return $dataTable->render('campaigns.index');
    }

    public function create(): View
    {
        return view('campaigns.create');
    }

    public function store(StoreCampaignRequest $request): RedirectResponse
    {
        if ($this->campaign->createCampaign($request))
            return $this->baseRoute();
        return back()->with('error', 'Some Error Please Try Again');
    }

    public function edit($id)
    {
        $model = $this->campaign->getCampaignById($id);
        return view('campaigns.edit')->with([
            'model' => $model
        ]);
    }

    /**
     * @param UpdateCampaignRequest $request
     * @param $id
     * @return RedirectResponse
     */
    public function update(UpdateCampaignRequest $request, $id): RedirectResponse
    {
        if ($this->campaign->updateCampaign($id, $request))
            return $this->baseRoute();
        return back()->with('error', 'Some Error Please Try Again');

    }


    /**
     * @param $id
     * @return RedirectResponse
     */
    public function destroy($id): RedirectResponse
    {
        $this->campaign->deleteCampaign($id);
        return back()->with('success', 'Done :) deletes successful');
    }


    /**
     * @return RedirectResponse
     */
    private function baseRoute(): RedirectResponse
    {
        Session::flash('success', 'Done :) created successful');
        return redirect()->route('campaign.index');
    }

}
