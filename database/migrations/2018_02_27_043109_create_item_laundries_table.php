<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemLaundriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_laundries', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('client_id')->index();
            $table->foreign('client_id')->references('id')->on('clients');

            $table->unsignedInteger('status_id')->index();
            $table->foreign('status_id')->references('id')->on('item_statuses');

            $table->unsignedInteger('weight')->default(0);
            $table->unsignedBigInteger('cost')->default(0);

            $table->date('pickup_date');
            $table->date('finish_date');

            $table->string('description');

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
        Schema::dropIfExists('item_laundries');
    }
}
