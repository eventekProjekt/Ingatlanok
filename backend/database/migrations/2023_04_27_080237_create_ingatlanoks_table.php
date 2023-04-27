<?php

use App\Models\Ingatlanok;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('ingatlanoks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kategoria')->references('id')->on('kategoriaks');
            $table->string('leiras');
            $table->date('hirdetesDatuma');
            $table->boolean('tehermentes');
            $table->integer('ar');
            $table->string('kepUrl');
        });

        Ingatlanok::create(['kategoria' => 1, 'leiras' => 'Csodálatos lakás.','hirdetesDatuma' => "2023-04-27",'tehermentes' => 0, 'ar' => 10000000, 'kepUrl' => 'https://ingatlan-mentor.hu/images/properties/elado-budapest-ii-ingatlan--125913.jpg']);
        Ingatlanok::create(['kategoria' => 2, 'leiras' => 'Nagyon szépen van kialakítva.','hirdetesDatuma' => "2023-04-26",'tehermentes' => 1, 'ar' => 10000000, 'kepUrl' => 'https://th.bing.com/th/id/R.d4c56393c021ee3af9e5938fe843795b?rik=yi%2bC8E6O1GnRtQ&pid=ImgRaw&r=0']);
        Ingatlanok::create(['kategoria' => 3, 'leiras' => 'Jó állapotba lávő.','hirdetesDatuma' => "2023-04-25",'tehermentes' => 1, 'ar' => 10000000, 'kepUrl' => 'https://ot.ingatlancdn.com/d7/7c/31692071_201508802_l.jpg']);
        Ingatlanok::create(['kategoria' => 5, 'leiras' => 'Megéri ebbe befektetni.','hirdetesDatuma' => "2023-04-24",'tehermentes' => 0, 'ar' => 10000000, 'kepUrl' => 'https://th.bing.com/th/id/R.48d2949db44fb7b688266e70b8a7bef4?rik=h5OmN0A48u8D6w&pid=ImgRaw&r=0']);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ingatlanoks');
    }
};
