<?php

namespace App\Helpers\Traits;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

trait ImageProcess
{

    /**
     * Upload File Section With Drop Zone Js
     * @param Request $request
     * @return JsonResponse
     */
    public function storeMedia(\Illuminate\Http\Request $request): JsonResponse
    {
        $path = storage_path('tmp/uploads');

        if (!file_exists($path)) {
            mkdir($path, 0777, true);
        }

        $file = $request->file('file');

        $name = uniqid() . '_' . trim($file->getClientOriginalName());

        $file->move($path, $name);

        return response()->json([
            'name' => $name,
            'original_name' => $file->getClientOriginalName(),
        ]);
    }

    /**
     * @param $model
     * @param $request
     * @return void
     */
    public function dealWithFiles($model, $request): void
    {
        $model_images = $this->modelMedia($model);
        if (count($model_images) > 0) {
            foreach ($model_images as $media) {
                if (!in_array($media->file_name, $request->input('document', []))) {
                    $media->delete();
                }
            }
        }

        $media = $model_images->pluck('file_name')->toArray();

        foreach ($request->input('document', []) as $file) {
            if (count($media) === 0 || !in_array($file, $media)) {
                $model->addMedia(storage_path('tmp/uploads/' . $file))->toMediaCollection('document');
            }
        }
    }


    /**
     * @param Model $model
     * @return void
     */
    public function removeImages(Model $model): void
    {

        $all_images = $this->modelMedia($model);
        if (count($all_images) > 0) {
            foreach ($all_images as $image) {
                $image->delete();
            }
        }
    }

    /**
     * Get Media For Campaign
     * @param $model
     * @return mixed
     */
    private function modelMedia($model){
       return  $model->getMedia(CAMPAIGN_COLLECTION);
    }

}
