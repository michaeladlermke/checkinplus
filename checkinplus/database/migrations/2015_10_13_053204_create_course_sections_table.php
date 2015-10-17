<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCourseSectionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('course_sections', function(Blueprint $table)
		{
			$table->integer('course_section_id', true);
			$table->string('course_section_name');
			$table->string('course_section_days', 10)->default('SMTWTFS');
			$table->time('course_section_start_time');
			$table->time('course_section_end_time');
			$table->timestamp('course_section_timestamp')->default(DB::raw('CURRENT_TIMESTAMP'));
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('course_sections');
	}

}
