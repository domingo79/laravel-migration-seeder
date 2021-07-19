<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->string('name', 80);
            $table->string('city', 100);
            $table->string('address');
            $table->string('post_code', 5);
            $table->string('type', 50);
            $table->string('image_url');
            $table->text('description');
            $table->decimal('price', 8, 2);
            $table->string('treatment', 50);
            $table->string('duration', 10);
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
        Schema::dropIfExists('packages');
    }
}
