<?php

header('Access-Control-Allow-Origin: *');

header('Content-Type: application/json');

header("Access-Control-Allow-Methods: GET");

const POSTS = [
    [
        'id'         => 1,
        'title'      => "His mother had always taught him",
        'content'    => "His mother had always taught him not to ever think of himself as better than others. He'd tried to live by this motto. He never looked down on those who were less fortunate or who had less money than him. But the stupidity of the group of people he was talking to made him change his mind.",
        'image'      => "/img/1.jpg",
        'category'   => "Animals",
        "author"     => "John Doe"
    ],
    [
        'id'         => 2,
        'title'      => "All he wanted was a candy bar.",
        'content'    => "All he wanted was a candy bar. It didn't seem like a difficult request to comprehend, but the clerk remained frozen and didn't seem to want to honor the request. It might have had something to do with the gun pointed at his face.",
        'image'      => "/img/2.jpg",
        'category'   => "Animals",
        "author"     => "John Doe"
    ],
    [
        'id'         => 3,
        'title'      => "Dave wasn't exactly sure how he had ended up",
        'content'    => "Dave wasn't exactly sure how he had ended up in this predicament. He ran through all the events that had lead to this current situation and it still didn't make sense. He wanted to spend some time to try and make sense of it all, but he had higher priorities at the moment. The first was how to get out of his current situation of being naked in a tree with snow falling all around and no way for him to get down.",
        'image'      => "/img/3.jpg",
        'category'   => "Others",
        "author"     => "Jane Doe"
    ],
];

if(count(POSTS) == 0){
    http_response_code(404);
    echo json_encode(['status' => 404, 'data' => []]);
    return ;
}else{
    http_response_code(200);
    echo json_encode(['status' => 200, 'data' => POSTS]);
    return ; 
}
