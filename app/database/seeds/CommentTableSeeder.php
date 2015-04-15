<?php

class CommentTableSeeder extends Seeder {

	public function run()
	{
		DB::table('comments')->delete();

		Comment::create(array(
			'author' => 'Ivan Medina',
			'text' => 'Test comment.'
		));

		Comment::create(array(
			'author' => 'Annie Azaña',
			'text' => 'I am the best! ;)'
		));		

		Comment::create(array(
			'author' => 'Anonymous',
			'text' => 'Just be happy! :)'
		));
	}

}