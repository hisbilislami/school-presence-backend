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
        Schema::create('m_school', static function (Blueprint $table): void {
            $table->id();
            $table->string('name', 50);
            $table->string('address')->nullable();
            $table->string('phone_number')->nullable();
            $table->boolean('active')->default(true);
            $table->softDeletes();
            $table->timestamps();
            $table->integer('created_by');
            $table->integer('updated_by')->nullable();

            $table->foreign('created_by')->references('id')->on('users');
            $table->foreign('updated_by')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('m_school');
    }
};
