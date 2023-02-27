<?php

it('should return status 200 in the index of students', function () {
    $response = $this->head('/students');

    $response->assertStatus(200);
});
