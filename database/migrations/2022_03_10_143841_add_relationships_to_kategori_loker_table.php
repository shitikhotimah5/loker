<?php

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
        Schema::table('kategori_loker', function (Blueprint $table) {
            $table->foreign("kategori_id")->references("id")->on("kategori")->onUpdate("cascade")->onDelete("cascade");
            $table->foreign("loker_id")->references("id")->on("loker")->onUpdate("cascade")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('kategori_loker', function (Blueprint $table) {
            $table->dropForeign("kategori_loker_kategori_id_foreign");
            $table->dropForeign("kategori_loker_loker_id_foreign");
        });
    }
};
