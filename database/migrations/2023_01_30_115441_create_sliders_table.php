<?php

use App\Models\Slider;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sliders', function (Blueprint $table) {
            $table->id();

            $table->string('image_web');
            $table->string('image_app');
            $table->text('heading')->nullable();
            $table->string('url')->nullable();
            $table->enum('status', [Slider::BORRADOR, Slider::PUBLICADO])->default(Slider::BORRADOR);

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
        Schema::dropIfExists('sliders');
    }
};
