<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('event_start_date')->nullable();
            $table->string('event_end_date')->nullable();
            $table->longText('description');
            $table->string('address')->nullable();
            $table->string('deadline')->nullable();
            $table->string('url')->nullable();
            $table->integer('hours')->nullable();
            $table->integer('num_volunteers')->nullable();
            $table->string('recurring_status')->nullable();
            $table->string('gender_specific')->nullable();
            $table->boolean('members_only')->nullable();
            $table->string('org_name')->nullable();
            $table->string('affiliated_orgs')->nullable();
            $table->string('spoc')->nullable();
            $table->string('spoc_phone')->nullable();
            $table->string('spoc_email')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
