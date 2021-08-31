<?php

use App\Task;
use Illuminate\Database\Seeder;

class TaskSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tasks = $this->getTasks();
        foreach($tasks as $taskValue)
        {
            $task = new Task();
            $task->title = $taskValue['title'];
            $task->content = $taskValue['content'];
            $task->article_title = $taskValue['article_title'];
            $task->article_content = $taskValue['article_content'];
            $task->file =$taskValue['file'];
            $task->link = $taskValue['link'];
            $task->status = $taskValue['status'];
            $task->save();
        }
    }

    private function getTasks()
    {
        return [
            [
                'title' => 'Getting equipment and a little present',
                'content' => "How to get and set up your laptop? Here is the guide: \nSend the following information to lavrenyuk@macpaw.com :\nyour full name \nyour address \nyour phone number \nReceive your laptop. \nFollow the instructions that will be shared with you once you get your MacBook.",
                'article_title' => '',
                'article_content' => '',
                'file' => '',
                'link' => '',
                'status' => true
            ],
            [
                'title' => 'Your first work day',
                'content' => "It’s time to start your onboarding process. \nHoover promises, it’ll be as great as a whole bowl of warm milk! \nQuick look into the future. \nOnboarding is ahead of you! Here you will find out who you have to work with and how to make your \nwork more efficient. Here you will hear the story of MacPaw and its projects, you will be able \nto ask CEO questions - and he will even answer! You will be told about cybersecurity, \ncharitable projects, and internal working tools. Onboarding is the time filled with useful and \ninteresting information. This is the time when MacPaw cares that your work at the company will be an enjoyable experience.\nInvitations to all the meetings and events will be sent on your email. Don’t forget to check it from time to time. \nAnd I guess that\'s your first day with MacPaw slack. To be in touch from everywhere, at any time you want \nto, and as easy as you always wanted, take a look at Google Calendar and Zoom apps. \nAnd you definitely will need Fix Bot to make great use of your fixes!",
                'article_title' => '',
                'article_content' => '',
                'file' => '',
                'link' => '',
                'status' => true
            ],
            [
                'title' => 'Meeting with the team & your buddy',
                'content' => 'Here you’ll get to know other Macpawians and your buddy.',
                'article_title' => '',
                'article_content' => '',
                'file' => '',
                'link' => '',
                'status' => true
            ],
            [
                'title' => 'Here we’ll be all the info from the Security Team that newcomers need to know/go through.',
                'content' => "Hello 🖖 \nYou have been signed up for a security awareness training - Mandatory. Security Awareness Fundamentals Trainings. \nPlease complete your training by 03/09/2021 23:59. \nAll the training sessions are in the Knowbe4, the link you’ll find down below. You can also login to the training portal via Knowbe4 app in your Okta account. \nClick the Start button on your training page to begin your training. \nNOTE: To make sure that your progress is recorded, please close the window when you are done with your training. When you are ready to continue, you will be able to start your training from where you left off. \nHave fun and stay secure ❤ \nMacPaw Security Team",
                'article_title' => '',
                'article_content' => '',
                'file' => '',
                'link' => 'All your training sessions in KnowBe4',
                'status' => true
            ],
            [
                'title' => 'Feedback workshop',
                'content' => 'Here we’ll put a link to a Zoom meeting, notes from the lecture and a presentation. It’d help to keep all the information at hand.',
                'article_content' => "Here I collected tips from our workshop 😊 \nFeedback is a gift. It can be \npositive; \nconstructive - what to improve; \nuneffective. \nSigns of  bad feedback: \nWhen you give it in a group of other people. \nOr give it emotionally. \nWhen it’s unexpected. \nOr given at a bad time. \nWhen it feels like an attack 🦁 \nOr the feedback that you decided to keep to yourself and never voice out. ",
                'article_title' => '',
                'article_content' => '',
                'file' => '',
                'link' => 'Article on Confluence about the Feedback',
                'status' => true
            ],
            [
                'title' => 'Meeting with legal & financial departments',
                'content' => '',
                'article_title' => '',
                'article_content' => '',
                'file' => '',
                'link' => '',
                'status' => false
            ],
            [
                'title' => 'Internal tools intro',
                'content' => '',
                'article_title' => '',
                'article_content' => '',
                'file' => '',
                'link' => '',
                'status' => false
            ],
            [
                'title' => 'Acquaintance with MacPaw history, mission, vision, and values',
                'content' => '',
                'article_title' => '',
                'article_content' => '',
                'file' => '',
                'link' => '',
                'status' => false
            ],
            [
                'title' => 'AMA meeting with CEO',
                'content' => '',
                'article_title' => '',
                'article_content' => '',
                'file' => '',
                'link' => '',
                'status' => false
            ],
            [
                'title' => 'Acquaintance with Human Dimension Service',
                'content' => '',
                'article_title' => '',
                'article_content' => '',
                'file' => '',
                'link' => '',
                'status' => false
            ],
            [
                'title' => 'Acquaintance with MacPawCares Projects',
                'content' => '',
                'article_title' => '',
                'article_content' => '',
                'file' => '',
                'link' => '',
                'status' => false
            ],
            [
                'title' => 'Time for security courses',
                'content' => '',
                'article_title' => '',
                'article_content' => '',
                'file' => '',
                'link' => '',
                'status' => false
            ],
            [
                'title' => 'Acquaintance with MacPaw Products',
                'content' => '',
                'article_title' => '',
                'article_content' => '',
                'file' => '',
                'link' => '',
                'status' => false
            ],
            [
                'title' => 'Effective communication workshop',
                'content' => '',
                'article_title' => '',
                'article_content' => '',
                'file' => '',
                'link' => '',
                'status' => false
            ],
            [
                'title' => 'The end of onboarding',
                'content' => '',
                'article_title' => '',
                'article_content' => '',
                'file' => '',
                'link' => '',
                'status' => false
            ],
            [
                'title' => 'The end of probation (and second gift)',
                'content' => '',
                'article_title' => '',
                'article_content' => '',
                'file' => '',
                'link' => '',
                'status' => false
            ],
        ];
    }
}
