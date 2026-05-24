<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class UpdatePostsAutoIncrement extends Migration
{
    public function up()
    {
        DB::statement("CREATE SEQUENCE post_id_seq START 100000;");
        DB::statement("ALTER TABLE posts ALTER COLUMN post_id SET DEFAULT nextval('post_id_seq');");
        DB::statement("ALTER SEQUENCE post_id_seq OWNED BY posts.post_id;");
    }

    public function down()
    {
        DB::statement("ALTER TABLE posts ALTER COLUMN post_id DROP DEFAULT;");
        DB::statement("DROP SEQUENCE post_id_seq;");
    }
}
