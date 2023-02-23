<?php

it('should return status 201 on creation of this schools', function (array $dataset) {
    $response = $this->post('/schools', $dataset);
    $response->assertStatus(201);
})->with([
    'test #01' =>
        [
            [
                "name" => "Hogwarts School of Witchcraft and Wizardry",
                "logo" => "hogwarts-logo.png",
                "certificate" => "hogwarts.png",
            ]
        ],
    'test #02' =>
        [
            [
                "name" => "Beauxbatons Academy of Magic",
                "logo" => "beauxbatons-logo.png",
                "certificate" => "beauxbatons.png",
            ]
        ],
    'test #03' =>
        [
            [
                "name" => "Durmstrang Institute",
                "logo" => "durmstrang-logo.png",
                "certificate" => "durmstrang.png",
            ]
        ],
]);
