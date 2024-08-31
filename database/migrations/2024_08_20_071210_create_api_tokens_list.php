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
        Schema::create('api_tokens_list', function (Blueprint $table) {
            $table->id('api_token_id'); // Primary Key

            $table->string('api_token', 64)->unique(); // API Token
            $table->foreign('api_token')->references('api_token')->on('user_account')->onDelete('cascade');
            $table->integer('number_of_uses')->default(0); // Number of Uses

            $table->timestamp('created_at')->useCurrent()->nullable();
            $table->timestamp('modified_at')->useCurrent()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('api_tokens_list');
    }
};
