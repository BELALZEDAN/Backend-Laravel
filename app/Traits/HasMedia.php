<?php

namespace App\Traits;

use App\Models\Media;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

trait HasMedia
{
    public function media()
    {
        return $this->morphMany(Media::class, 'element');
    }

    public function storeMedia($media)
    {
        foreach ($media as $key => $values) {
            $file = upload_file($values['file'], $this->id. '_' . $key, '');
            $this->media()->create([
                'type'          => $values['type'],
                'file'          => $file,
                'content_array' => $values['content_array'] ?? null,
                'content'       => $values['content']?? null,
            ]);
        }
    }

    public function updateMedia($media)
    {
        foreach ($media as $key => $values) {
            if($this->media->where('file', "/". $values['file']->getClientOriginalName())->first()){
            $this->media->where('file',"/". $values['file']->getClientOriginalName())->first()->update([
                'type'          => $values['type'],
                'content_array' => $values ['content_array'] ?? null,
                'content'       => $values ['content']?? null,
            ]);
        }else{
            $file = upload_file($values['file'],$this->id. '_' . $key, '');
            $this->media()->create([
                'type'          => $values['type'],
                'file'          => $file,
                'content_array' => $values ['content_array'] ?? null,
                'content'       => $values ['content']?? null,
            ]);
            }
        }
    }

    public static function createWithMedia($attributes = [], Model|null $parent = null, array $languages = null)
    {
        $class = __CLASS__;
        $instance = new $class;

        $media = $attributes['media'];

        $fillable = $instance->fillable ?? [];
        $fillable_attributes = [];
        foreach ($attributes as $key => $value) {
            if (in_array($key, $fillable))
                $fillable_attributes[$key] = $value;
        }

        $model = self::create($fillable_attributes, $parent);
        $model->storeMedia($media);
        return $model;
    }

    public function updateWithMedia(array $attributes = [], array $options = [], array $languages = null)
    {
        $fillable = $this->fillable ?? [];
        $fillable_attributes = [];
        $media = $attributes['media'];
        foreach ($attributes as $key => $value) {
            if (in_array($key, $fillable))
                $fillable_attributes[$key] = $value;
        }
        $this->attributes = $this->original;
        $res = $this->update($fillable_attributes, $options);
        $this->updateMedia($media);
        return $res;
    }

    public function deleteWithMedia()
    {
        foreach ($this->media as $key => $value) {
            delete_file_if_exist($value->file);
        }
        $this->media()->delete();
        $this->delete();
    }
    public function deleteMedia()
    {
        foreach ($this->media as $key => $value) {
            delete_file_if_exist($value->file);
        }
        $this->media()->delete();
    }
}
