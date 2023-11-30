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
        Schema::create('m_homeroom_teacher', static function (Blueprint $table): void {
            $table->id();
            $table->string('email', 50);
            $table->integer('class_id');
            $table->integer('person_id');
            $table->string('mobile_phone_number')->nullable();
            $table->boolean('active')->default(true);
            $table->integer('created_by');
            $table->integer('updated_by')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('class_id')->references('id')->on('m_class');
            $table->foreign('person_id')->references('id')->on('m_person');
            $table->foreign('created_by')->references('id')->on('users');
            $table->foreign('updated_by')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('m_homeroom_teacher');
    }
};
