<?php

namespace App;

class Post {

    // Retrieve a list of posts
    public function getPosts($session)
    {
        if (!$session->has('posts')) {
            $this->createDummyData($session);
        }

        return $session->get('posts');
    }

    //retrieve a single post data
    public function getPost($session, $id)
    {
        if (!$session->has('posts')) {
            $this->createDummyData();
        }
        return $session->get('posts')[$id];
    }

    public function addPost($session, $title, $content)
    {
        if (!$session->has('posts')) {
            $this->createDummyData($session);
        }

        $posts = $session->get('posts');
        array_push($posts, ['title' => $title, 'content' => $content]);
        $session->put('posts',$posts);
    }

    public function editPost($session, $id, $title, $content) {
        $posts = $session->get('posts');
        $posts[$id] = [ 'title'     =>  $title,
                        'content'   =>  $content ];
        $session->put('posts', $posts);
    }

    //Session-type dummy data
    private function createDummyData($session) {
        $posts = [
            [
                //'id' => 0,
                'title' => null,
                'content' => null,
            ],
            [
                //'id' => 1,
                'title' => 'Welcome to LarS',
                'content' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.',
            ],
            [
                //'id' => 2,
                'title' => 'About the Author',
                'content' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta.',
            ],
            [
                //'id' => 3,
                'title' => 'The Basics of Web Design',
                'content' => 'Li Europan lingues es membres del sam familie. Lor separat existentie es un myth. Por scientie, musica, sport etc, litot Europa usa li sam vocabular.',
            ],
        ];

        $session->put('posts', $posts);
    }

}