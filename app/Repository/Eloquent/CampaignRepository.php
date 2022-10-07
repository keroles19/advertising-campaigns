<?php

namespace App\Repository\Eloquent;


use App\Helpers\Traits\ImageProcess;
use App\Models\Campaign;
use App\Repository\Interfaces\CampaignInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Mail;

class CampaignRepository extends MainRepository implements CampaignInterface
{
    use ImageProcess;

    public function __construct(Campaign $model)
    {
        parent::__construct($model);
    }

    /**
     * @return Collection
     */
    public function getAllCampaign(): Collection
    {
        return $this->get();
    }


    public function createCampaign(FormRequest $request): bool
    {
        $campaign = $this->create($request->validated());

        foreach ($request->input('document', []) as $file) {
            $campaign->addMedia(storage_path('tmp/uploads/' . $file))->toMediaCollection(CAMPAIGN_COLLECTION);
        }

        return true;
    }

    public function updateCampaign($id, FormRequest $request): bool
    {

        $campaign = $this->getCampaignById($id);
        $campaign->update($request->validated());
        $this->dealWithFiles($campaign, $request);

        return true;
    }


    public function deleteCampaign($id): bool
    {
        $model = $this->getCampaignById($id);
        $this->removeImages($model);
        return $this->delete($id);
    }


    public function getCampaignById($id)
    {
        return $this->findOrFail($id);
    }


}
