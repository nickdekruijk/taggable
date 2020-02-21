<?php

namespace NickDeKruijk\Taggable;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $casts = [
        'active' => 'boolean',
    ];

    private $tree;

    public function getTree()
    {
        if (!$this->tree) {
            foreach (self::orderBy(config('taggable.sort_tags_by'))->get() as $tag) {
                $this->tree[$tag->parent ?: 0][$tag->id] = $tag;
                $this->tree['parents'][$tag->id] = (int) $tag->parent ?: 0;
            }
        }
        return $this->tree;
    }

    public function scopeActive($query)
    {
        $query->where('active', 1)->orderBy(config('taggable.sort_tags_by'));
    }
}
