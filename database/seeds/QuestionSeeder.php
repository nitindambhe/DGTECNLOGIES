<?php

use Illuminate\Database\Seeder;
use App\Question;
class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$now = Carbon\Carbon::now()->format('Y-m-d H:i:s');
    	$questionArr=[
    		[ 
                "question" => "What does PHP stand for?"
                "answer" => 3
                "optionA" => "PHP: Hypertext Preprocessor"
                "optionB" => "Personal Hypertext Processor"
                "optionC" => "Private Home Page"
                "optionD" => "Public Home Page"
                "created_at" => $now
                "updated_at" => $now
        ],
    		[ 
                "question" => " PHP server scripts are surrounded by delimiters, which?"
                "answer" => 3
                "optionA" => "<&>...</&>"
                "optionB" => "<script>...</script>"
                "optionC" => "<?php...?>"
                "optionD" => "<?php>...</?>"
                "created_at" => $now
                "updated_at" => $now
        ],
    		[
                "question" => "How do you write "Hello World" in PHP"
                "answer" => 3
                "optionA" => "Document.Write("Hello World");"
                "optionB" => ""Hello World";"
                "optionC" => "echo "Hello World";"
                "optionD" => "alert("hello World");"
                "created_at" => $now
                "updated_at" => $now
        ],
    		[
                "question" => "All variables in PHP start with which symbol?"
                "answer" => 1
                "optionA" => "$"
                "optionB" => "!"
                "optionC" => "%"
                "optionD" => "#"
                "created_at" => $now
                "updated_at" => $now
        ],
    		[
                "question" => "What is the correct way to end a PHP statement?"
                "answer" => 2
                "optionA" => "?>"
                "optionB" => ";"
                "optionC" => "?"
                "optionD" => "."
                "created_at" => $now
                "updated_at" => $now
        ],
    		[
                "question" => "The PHP syntax is most similar to:"
                "answer" => 4
                "optionA" => "java"
                "optionB" => "c++ and dbms"
                "optionC" => "html"
                "optionD" => "c and perl"
                "created_at" => $now
                "updated_at" => $now
            ],
    		[
                "question" => "How do you get information from a form that is submitted using the "get" method?"
                "answer" => 1
                "optionA" => " $_GET[];"
                "optionB" => " $_REQUEST[];"
                "optionC" => " $_SERVERE[];"
                "optionD" => "$_POST[]"
                "created_at" => $now
                "updated_at" => $now
            ],
    		[ 
                "question" => "What is the correct way to include the file "time.inc" ?"
                "answer" => 2
                "optionA" => "<!-- include file="time.inc" -->"
                "optionB" => "<?php include "time.inc"; ?>"
                "optionC" => "<?php include:"time.inc"; ?>"
                "optionD" => "<?php include file="time.inc"; ?>"
                "created_at" => $now
                "updated_at" => $now
      ]
            ],
    		[
                "question" => "What is the correct way to create a function in PHP?"
                "answer" => 3
                "optionA" => "function myFunction->()"
                "optionB" => "function myFunction()"
                "optionC" => "create myFunction()"
                "optionD" => " new_function myFunction()"
                "created_at" => $now
                "updated_at" => $now
            ],
    		[
             
                "question" => "What is the correct way to open the file "'time.txt'" as readable?"
                "answer" => 2
                "optionA" => "fopen("time.txt","r");"
                "optionB" => "fopen("time.txt","r+");"
                "optionC" => "open("time.txt","read");"
                "optionD" => "open("time.txt");"
                "created_at" => $now
                "updated_at" => $now
      
        ],

    	];
    	Question::insert(questionArr);
    }
}
