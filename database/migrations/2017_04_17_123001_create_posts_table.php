<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('slug')->unique();
            $table->string('title');
            $table->text('content');
            
            $table->boolean('active')->default(0);
            $table->string('image')->nullable();
            $table->integer('category_id')->nullable();

            $table->timestamp('published_at')->index();
            $table->timestamps();




/*            
*            $table->integer('author_id');
*            $table->string('seo_title')->nullable();
*            $table->text('excerpt');
*            $table->text('meta_description');
*            $table->text('meta_keywords');
*            $table->enum('status', ['PUBLISHED', 'DRAFT', 'PENDING'])->default('DRAFT');
*            $table->boolean('featured')->default(0);
*            $table->timestamps();
*/


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
