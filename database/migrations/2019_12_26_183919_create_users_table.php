<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateUsersTable.
 */
class CreateUsersTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table) {
			$table->increments('id');

			// dados pessoais
			$table->string('cpf', 11)->unique()->nullable();
			$table->string('name', 50);
			$table->char('phone', 11);
			$table->date('birth')->nullable();
			$table->char('gender', 1)->nullable();
			$table->text('notes')->ullable();

			// dados de autenticação
			$table->string('email', 80)->unique();
			$table->string('password', 254)->nullable();

			// permissões
			$table->string('status')->default('active');
			$table->string('permission')->default('app.user');

			$table->rememberToken();

			$table->timestamps(); // created_at, updated_at, deleted_at
			$table->softDeletes();  // cria um sistema de exclusão falso
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}
}
