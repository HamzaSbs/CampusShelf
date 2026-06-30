<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('rentals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->foreignId('book_id')->constrained()->cascadeOnDelete();
            $table->date('borrow_date');
            $table->unsignedTinyInteger('duration_weeks');
            $table->date('return_date')->nullable();
            $table->unsignedInteger('total_cost');
            $table->enum('status', ['pending_pickup', 'borrowed', 'returned', 'overdue'])
                  ->default('pending_pickup');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('rentals');
    }
};