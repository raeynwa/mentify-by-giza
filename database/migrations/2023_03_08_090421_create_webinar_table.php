<?php

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
        Schema::create('webinar', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name', 255)->nullable(false);
            $table->uuid('id_tipe_webinar')->nullable(false);
            $table->string('level', 255)->nullable(false);
            $table->uuid('id_mentor')->nullable(false);
            $table->integer('quota')->nullable(false)->default(0);
            $table->integer('pendaftar')->nullable(false)->default(0);
            $table->date('tgl_akhir')->nullable(false);
            $table->integer('sts_aktif')->nullable(false)->default('1');
            $table->integer('sts_hapus')->nullable(false)->default('1');
            $table->string('created_by', 255)->nullable(false);
            $table->string('updated_by', 255)->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('webinar');
    }
};
