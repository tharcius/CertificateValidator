<?php

it('should return status 200 in the index of courses', function () {
    $response = $this->head('/courses');

    $response->assertStatus(200);
});
