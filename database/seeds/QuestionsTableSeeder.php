<?php

use App\Options;
use App\Question;
use Illuminate\Database\Seeder;

class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $question1 = new Question();
        $question1->topic_id = 1;
        $question1->question_text = '1917 m. rugsėjo mėn. buvo išrinkta Lietuvos Taryba, paskelbusi Lietuvos Nepriklausomybę, iš:';
        $question1->save();

        $q1answer1 = new Options();
        $q1answer1->question_id = 1;
        $q1answer1->option = '*20 narių';
        $q1answer1->correct = 1;
        $q1answer1->save();

        $q1answer2 = new Options();
        $q1answer2->question_id = 1;
        $q1answer2->option = '24 narių';
        $q1answer2->save();

        $q1answer3 = new Options();
        $q1answer3->question_id = 1;
        $q1answer3->option = '30 narių';
        $q1answer3->save();

        $question2 = new Question();
        $question2->topic_id = 1;
        $question2->question_text = '1918 m. vasario 16 d., skelbiant Lietuvos Nepriklausomybę, Lietuvos Tarybai vadovavo';
        $question2->save();

        $q2answer1 = new Options();
        $q2answer1->question_id = 2;
        $q2answer1->option = 'Antanas Smetona';
        $q2answer1->save();

        $q2answer2 = new Options();
        $q2answer2->question_id = 2;
        $q2answer2->option = '*Jonas Basanavičius';
        $q2answer2->correct = 1;
        $q2answer2->save();

        $q2answer3 = new Options();
        $q2answer3->question_id = 2;
        $q2answer3->option = 'Jonas Basanavičius';
        $q2answer3->save();

        $question3 = new Question();
        $question3->topic_id = 1;
        $question3->question_text = 'Pirmoji valstybė, 1918 m. pripažinusi Lietuvos Nepriklausomybę:';
        $question3->save();

        $q3answer1 = new Options();
        $q3answer1->question_id = 3;
        $q3answer1->option = '*Vokietija';
        $q3answer1->correct = 1;
        $q3answer1->save();

        $q3answer2 = new Options();
        $q3answer2->question_id = 3;
        $q3answer2->option = 'Rusija';
        $q3answer2->save();

        $q3answer3 = new Options();
        $q3answer3->question_id = 3;
        $q3answer3->option = 'Latvija';
        $q3answer3->save();
    }
}
