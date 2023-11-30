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
        Schema::create('m_person', static function (Blueprint $table): void {
            $table->id();
            $table->string('first_name', 20);
            $table->string('last_name', 20)->nullable();
            $table->string('address')->nullable();
            $table->string('gender', 1)->comment('M for male, F for female');
            $table->boolean('active')->default(true);
            $table->integer('created_by');
            $table->integer('updated_by')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('created_by')->references('id')->on('users');
            $table->foreign('updated_by')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('m_person');
    }
};
