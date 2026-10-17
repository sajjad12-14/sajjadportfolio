<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();

            $table->string('title');

            $table->string('category')->nullable();

            $table->text('description')->nullable();

            $table->string('image')->nullable();

            $table->string('video')->nullable();

            $table->text('technologies')->nullable();

            $table->text('features')->nullable();

            $table->string('github_url')->nullable();

            $table->string('demo_url')->nullable();

            $table->boolean('status')->default(1);

            $table->boolean('show_on_home')->default(0);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
