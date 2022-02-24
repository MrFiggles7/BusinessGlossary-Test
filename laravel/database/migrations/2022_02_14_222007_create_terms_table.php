<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTermsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('terms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 100);
            $table->string('functional_definition', 500);
            $table->string('technical_definition', 500);
            $table->string('business_rules', 500);
            $table->timestamp('date_added');
            $table->timestamp('date_pending');
            $table->timestamp('date_approved');
            $table->timestamp('date_inactive');
            $table->boolean('is_active');

            $table->integer('source_id');
            $table->integer('status_id');
            $table->integer('privacy_id');
            $table->integer('added_by_id');
            $table->integer('moved_to_pending_id');
            $table->integer('approved_id');
            $table->integer('moved_to_inactive_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('terms');
    }
}
