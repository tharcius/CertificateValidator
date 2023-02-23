<?php

it('should return status 201 on creation of this students', function (array $dataset) {
    $response = $this->post('/students', $dataset);
    $response->assertStatus(201);
})->with([
    'test #01' =>
        [
            [
                "name" => "Sirius Black III",
                "email" => "black.sirius@hogwarts.wiz",
            ]
        ],
    'test #02' =>
        [
            [
                "name" => "Ginevra Molly Weasley",
                "email" => "weasley.ginevra@hogwarts.wiz",
            ]
        ],
    'test #03' =>
        [
            [
                "name" => "Remus John Lupin",
                "email" => "lupin.remus@hogwarts.wiz",
            ]
        ],
]);
