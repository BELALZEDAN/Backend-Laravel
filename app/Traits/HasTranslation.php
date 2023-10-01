<?php

namespace App\Traits;

use App\Http\Middleware\Language as LanguageMiddleware;
use App\Models\Language;
use App\Models\Translation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

trait HasTranslation
{
    public function translations()
    {
        return $this->morphMany(Translation::class, 'translation');
    }

    public function storeTranslations($translations, array $languages = null)
    {
        foreach($translations as $attribute => $values)

            foreach (($languages??LanguageMiddleware::$all_languages) as $lang)
                $this->translations()->create([
                    'language'         => $lang,
                    'attribute'        => $attribute,
                    'value'            => $values[$lang]??'',
                ]);
    }

    public function updateTranslations($translations, array $languages = null)
    {
        foreach($translations as $attribute => $values)
            foreach (($languages??LanguageMiddleware::$all_languages) as $lang)
                if($values && isset($values[$lang]))
                    $this->translations->where('attribute',$attribute)->where('language',$lang)->first()->update([
                        'value'        => $values[$lang],
                    ]);
    }

    public function loadTranslations(){
        $trans=$this->translations->where('language',LanguageMiddleware::$language);
        foreach($trans as $t)
        {
            $attr = $t->attribute;
            $this->$attr=$t->value;
        }

        $trans=$this->translations;

        foreach($trans as $t)
        {
            $attr = $t->attribute . '_array';
            if(!$this->$attr)
                $this->$attr=[];
            $a=$this->$attr;
            $a[$t->language]=$t->value;
            $this->$attr=$a;
        }
    }

    public static function withTranslations($language = null ,$id='id'){
        $class = __CLASS__;
        $instance = new $class;
        $table = $instance->getTable()??'';
        $translated_columns = $instance->translated_columns??[];

        $builder = static::query();
        foreach($translated_columns as $column)
        {
            $builder = DB::table('translations')->rightJoinSub($builder, $table, function ($join) use ($class, $table, $id, $column, $language) {
                $join->on('translations.translation_id', '=', $table.".".$id)
                     ->where('translations.translation_type', '=', $class)
                     ->where('translations.language', '=', $language??LanguageMiddleware::$language)
                     ->where('translations.attribute', '=', $column);
            })->select("$table.*", "translations.value AS $column");
        }
        return $builder;
    }

    public static function createWithTranslations($attributes = [], Model|null $parent = null, array $languages = null){
        $class = __CLASS__;
        $instance = new $class;

        $translated_columns = $instance->translated_columns??[];
        $translated_attributes = [];

        $fillable = $instance->fillable??[];
        $fillable_attributes = [];
        foreach($attributes as $key => $value)
        {
            if(in_array($key,$translated_columns))
                $translated_attributes[$key] = $value;
            if(in_array($key,$fillable))
                $fillable_attributes[$key] = $value;
        }
        $model = self::create($fillable_attributes, $parent);

        $model->storeTranslations($translated_attributes , $languages);
        $model->loadTranslations();
        $model->makeHidden(['translations']);
        return $model;
    }

    public function updateWithTranslations(array $attributes = [], array $options = [], array $languages = null){
        $translated_columns = $this->translated_columns??[];
        $translated_attributes = [];

        $fillable = $this->fillable??[];
        $fillable_attributes = [];

        foreach($attributes as $key => $value)
        {
            if(in_array($key,$translated_columns))
                $translated_attributes[$key] = $value;
            if(in_array($key,$fillable))
                $fillable_attributes[$key] = $value;
        }
        $this->attributes = $this->original;
        $res = $this->update($fillable_attributes, $options);
        $this->updateTranslations($translated_attributes, $languages);
        $this->loadTranslations();
        $this->makeHidden(['translations']);
        return $res;
    }

    public function deleteWithTranslations(){
        $this->translations()->delete();
        $this->delete();
    }

    public static function addTranslationsForNewLanguage($new_language_code, $rules=[]){
        $class = __CLASS__;
        $instance = new $class;

        $translated_columns = $instance->translated_columns??[];

        $query = $class::query();
        if($class == Language::class)
            $query = $query->where('code','!=',$new_language_code);
        foreach($rules as $key => $value)
            $query = $query->where($key,$value);
        $objects = $query->get();

        foreach($objects as $object)
        {
            foreach($translated_columns as $attribute)
                $object->translations()->create([
                    'language'         => $new_language_code,
                    'attribute'        => $attribute,
                    'value'            => $object->translations()->where('attribute',$attribute)->where('language',LanguageMiddleware::$language)->first()?->value??"",
                ]);
        }
    }
}
