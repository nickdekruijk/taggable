<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(config('taggable.tags_table'), function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('parent')->nullable();
            $table->boolean('active')->default(1);
            $table->string('title');
            $table->integer('sort')->default(0)->unsigned();
            $table->timestamps();

            $table->index(['active', 'parent', 'title', 'sort']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists(config('taggable.tags_table'));
    }
}
