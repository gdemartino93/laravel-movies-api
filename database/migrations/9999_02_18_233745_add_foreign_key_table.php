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
        Schema::table('movies', function (Blueprint $table) {
            $table -> foreignId('genres_id') ->constrained();
        });
        Schema::table('actor_movie', function (Blueprint $table) {
            $table -> foreignId('actors_id') ->constrained();
            $table -> foreignId('movies_id') ->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('movies', function (Blueprint $table) {
            $table -> dropForeign('movies_genres_id_foreign');
            $table->dropColumn('genres_id');
        });
        Schema::table('actor_movie', function (Blueprint $table) {
            $table -> dropForeign('actor_movie_actors_id_foreign');
            $table->dropColumn('actors_id');
            $table -> dropForeign('actor_movie_movies_id_foreign');
            $table->dropColumn('movies_id');
        });
    }
};
