<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTweetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tweets', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('tweet_id')->nullable();
            $table->string('twitter_account_id'); //fetcher id
            $table->text('tweet_text')->nullable(); //including urls
            $table->text('tweet_media')->nullable(); //json of medias
            $table->text('tweet_quoted_tweet')->nullable(); // json of quoted
            $table->text('tweet_user')->nullable(); //json including id, user_name, screen_name, verified
            $table->string('tweet_retweet_count')->nullable();
            $table->string('tweet_favorite_count')->nullable();
            $table->string('tweet_is_favorited')->nullable();
            $table->string('tweet_is_retweeted')->nullable();
            $table->dateTime('tweet_created_at')->nullable();
            $table->integer('point')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tweets');
    }
}
