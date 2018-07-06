<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDocumentosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documentos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('autor');
            $table->string('tags');
            $table->string('type_document');
            $table->string('document_body');
            $table->integer('idpersonas')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('idpersonas')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('documentos');
    }
}
