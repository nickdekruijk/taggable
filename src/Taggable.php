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
        return $this->morphToMany(config('taggable.tag_model'), 'taggable', config('taggable.taggables_table'))->orderBy(config('taggable.sort_tags_by'));
    }

    public function activeTags(): MorphToMany
    {
        return $this->morphToMany(config('taggable.tag_model'), 'taggable', config('taggable.taggables_table'))->active();
    }

    public function scopeWithTags($query, $tags)
    {
        if ($tags && $tags->count()) {
            if (!is_array($tags)) {
                $tags = $tags->pluck('id')->toArray();
            }
            return $query->whereHas('tags', function ($q) use ($tags) {
                return $q->whereIn('taggables.tag_id', $tags);
            });
        }
    }
}
