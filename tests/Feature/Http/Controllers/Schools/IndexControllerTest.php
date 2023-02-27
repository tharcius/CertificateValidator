<?php

it('should return status 200 in the index of schools', function () {
    $response = $this->head('/schools');

    $response->assertStatus(200);
});
