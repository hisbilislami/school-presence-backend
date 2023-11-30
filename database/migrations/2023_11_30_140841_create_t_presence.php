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
        Schema::create('t_presence', static function (Blueprint $table): void {
            $table->id();
            $table->integer('student_id');
            $table->date('date');
            $table->string('status', 20)->default('presence')->comment('presence|absence|sick|leaves|others');
            $table->string('description')->nullable()->comment('only filled in when status = sick|leaves|others');
            $table->boolean('active')->default(true);
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('student_id')->references('id')->on('m_student');
            $table->foreign('created_by')->references('id')->on('users');
            $table->foreign('updated_by')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_presence');
    }
};
