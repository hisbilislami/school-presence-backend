<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class() extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('t_presence_detail', function (Blueprint $table): void {
            $table->id();
            $table->integer('presence_id');
            $table->time('clock_in', 6)->nullable();
            $table->time('clock_out', 6)->nullable();
            $table->integer('created_by');
            $table->integer('updated_by')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('presence_id')->references('id')->on('t_presence');
            $table->foreign('created_by')->references('id')->on('users');
            $table->foreign('updated_by')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_presence_detail');
    }
};
