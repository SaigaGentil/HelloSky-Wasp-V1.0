<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatesHostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hosts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('check_name');
            $table->string('address');
            $table->string('port');
            $table->mediumInteger('check_status')->nullable();;
            $table->integer('total_failed_checks')->nullable();;
            $table->bigInteger('total_checks')->nullable();;
            $table->bigInteger('total_downtime')->nullable();;
            $table->dateTime('last_downtime')->nullable();;
            $table->timestamps();

            $table->index('user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hosts');
    }
}
