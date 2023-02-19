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
            $table -> foreignId('genre_id') ->constrained();
        });
        Schema::table('actor_movie', function (Blueprint $table) {
            $table -> foreignId('actor_id') ->constrained();
            $table -> foreignId('movie_id') ->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('movies', function (Blueprint $table) {
            // fix drop fk and column
            $table -> dropForeign('movies_genre_id_foreign');
            $table->dropColumn('genre_id');
        });
        Schema::table('actor_movie', function (Blueprint $table) {
            $table -> dropForeign('actor_movie_actor_id_foreign');
            $table->dropColumn('actor_id');
            $table -> dropForeign('actor_movie_movie_id_foreign');
            $table->dropColumn('movie_id');
        });
    }
};
