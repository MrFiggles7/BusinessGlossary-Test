<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTermhistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('term_histories', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('term_id');
            $table->integer('status_id');
            $table->string('term', 100);
            $table->string('functional_definition', 500);
            $table->string('technical_definition', 500);
            $table->string('business_rules', 500);
            $table->timestamp('start_date');
            $table->timestamp('end_date');
            $table->boolean('is_active');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('term_histories');
    }
}
