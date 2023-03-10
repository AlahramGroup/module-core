<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFiltersRecurringTable extends Migration {

	public function up()
	{
		Schema::create('filters_recurring', function(Blueprint $table) {
			$table->id();
			$table->longText('name');
			$table->bigInteger('filter_type_id')->unsigned();
            $table->unsignedBigInteger('position')->nullable();

			$table->timestamps();
			$table->softDeletes();
			$table->string('image')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('filters_recurring');
	}
}



