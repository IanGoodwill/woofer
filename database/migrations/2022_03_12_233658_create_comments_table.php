<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create( 'comments', function (Blueprint $table ) {
            $table->id();
            $table->longText( 'content' );
            $table->unsignedBigInteger( 'profile_id' )->nullable();
            $table->unsignedBigInteger( 'post_id' )->nullable();
            $table->timestamps();

            $table->foreign( 'profile_id' )
                ->references( 'id' )
                ->on( 'profiles' )
                ->onDelete( 'cascade' );

            $table->foreign( 'post_id' )
                ->references( 'id' )
                ->on( 'posts' )
                ->onDelete( 'cascade' );
        });
    }
   
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists( 'comments' );
    }
}