<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('team_id')->constrained('teams')->cascadeOnDelete();
            $table->foreignId('account_id')->constrained('accounts')->restrictOnDelete();
            $table->foreignId('destination_account_id')->nullable()->constrained('accounts')->restrictOnDelete();
            $table->foreignId('category_id')->nullable()->constrained('categories')->restrictOnDelete();
            $table->foreignId('saving_goal_id')->nullable()->constrained('saving_goals')->nullOnDelete();
            $table->foreignId('user_id')->nullable()->constrained('users')->nullOnDelete();
            $table->foreignId('currency_id')->constrained('currencies')->restrictOnDelete();
            $table->enum('type', ['income', 'expense', 'transfer']);
            $table->decimal('amount', 18, 2);
            $table->decimal('exchange_rate', 18, 6)->nullable();
            $table->decimal('destination_amount', 18, 2)->nullable();
            $table->dateTime('transaction_date');
            $table->text('description')->nullable();
            $table->string('attachment')->nullable();
            $table->timestamps();

            $table->index(['team_id', 'transaction_date']);
            $table->index(['account_id', 'transaction_date']);
            $table->index(['category_id']);
            $table->index(['type']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};