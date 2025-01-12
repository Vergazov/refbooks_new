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
        Schema::create('refbooks', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('oid');
            $table->string('version');
            $table->string('version_type')->default('Последняя');
            $table->boolean('is_loaded')->default(false);
            $table->boolean('is_update_need')->default(false);
            $table->text('comment')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('refbooks');
    }
};
