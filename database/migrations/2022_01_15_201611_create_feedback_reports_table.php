<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeedbackReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feedback_reports', function (Blueprint $table) {
            $table->id();

            $table->string('title');
            $table->text('content');
            $table->string('map');
            $table->string('type');
            $table->float('gameseconds');
            $table->string('bundleid');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('feedback_reports');
    }
}
