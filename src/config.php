<?php

return [

    /*
    |--------------------------------------------------------------------------
    | migrations
    |--------------------------------------------------------------------------
    |
    | Run the included migration. Disable if you use your own migrations
    |
    */

    'migrations' => true,

    /*
    |--------------------------------------------------------------------------
    | tags_table
    |--------------------------------------------------------------------------
    |
    | Table name for tags to use with the package migration
    |
    */

    'tags_table' => 'tags',

    /*
    |--------------------------------------------------------------------------
    | taggables_table
    |--------------------------------------------------------------------------
    |
    | Table name for taggables to use with the package migration
    |
    */

    'taggables_table' => 'taggables',

    /*
    |--------------------------------------------------------------------------
    | tag_model
    |--------------------------------------------------------------------------
    |
    | If you want to customize the Tag model then make a new model App\Order
    | class that extends \NickDeKruijk\Taggable\Tag and change the value
    | below to 'App\Tag',
    | The Taggable trait uses thid model to make eloquent relations
    |
    */

    'tag_model' => 'NickDeKruijk\Taggable\Tag',

    /*
    |--------------------------------------------------------------------------
    | sort_tags_by
    |--------------------------------------------------------------------------
    |
    | When returning tags with eloquent tags can be either sorted by title or 
    | sort value
    |
    */

    'sort_tags_by' => 'sort',

];
