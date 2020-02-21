<?php

namespace NickDeKruijk\Taggable;

use Illuminate\Database\Eloquent\Relations\MorphToMany;

trait Taggable
{

    public static function bootTaggable()
    {
        //
    }

    public function tags(): MorphToMany
    {
        return $this->morphToMany(config('taggable.tag_model'), 'taggable')->orderBy('sort');
    }

    public function activeTags(): MorphToMany
    {
        return $this->morphToMany(config('taggable.tag_model'), 'taggable')->active();
    }
}
