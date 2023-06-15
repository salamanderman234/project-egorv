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
        Schema::create('submission_details', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("submission_id")->unsigned();
            $table->bigInteger("special_term_id")->unsigned();
            $table->string("content");

            $table->foreign("submission_id")->references("id")->on("submissions")->onDelete("cascade");
            $table->foreign("special_term_id")->references("id")->on("special_terms")->onDelete("cascade");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('submission_details');
    }
};
