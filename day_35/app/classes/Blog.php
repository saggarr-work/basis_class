<?php
    namespace App\classes;

    class Blog{
        public $blogs;

        function __construct()
        {
            $this->blogs = [
                0 => [
                    "title" => "This is the title of our First Blog",
                    "sd"    => "This is the short description of First Blog",
                    "ld"    => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Est saepe animi consequatur placeat ut deserunt, qui ratione ipsum sint, sit obcaecati. Quasi est illo sed cum repellendus vero in quaerat.",
                    "img"   => "assets/images/01.jpg"
                ],
                1 => [
                    "title" => "This is the title of our Second Blog",
                    "sd"    => "This is the short description of Second Blog",
                    "ld"    => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Est saepe animi consequatur placeat ut deserunt, qui ratione ipsum sint, sit obcaecati. Quasi est illo sed cum repellendus vero in quaerat.",
                    "img"   => "assets/images/02.jpg"
                ],
                2 => [
                    "title" => "This is the title of our Third Blog",
                    "sd"    => "This is the short description of Third Blog",
                    "ld"    => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Est saepe animi consequatur placeat ut deserunt, qui ratione ipsum sint, sit obcaecati. Quasi est illo sed cum repellendus vero in quaerat.",
                    "img"   => "assets/images/03.jpg"
                ],
                3 => [
                    "title" => "This is the title of our Fourth Blog",
                    "sd"    => "This is the short description of Fourth Blog",
                    "ld"    => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Est saepe animi consequatur placeat ut deserunt, qui ratione ipsum sint, sit obcaecati. Quasi est illo sed cum repellendus vero in quaerat.",
                    "img"   => "assets/images/04.jpg"
                ],
            ];
        }
    }
?>