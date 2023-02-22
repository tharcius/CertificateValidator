<?php

it('should return status 200 in the index of courses', function () {
    $response = $this->head('/courses');

    $response->assertStatus(200);
});

it('should return status 201 on creation of this registers', function (array $dataset) {
    $response = $this->post('/courses', $dataset);
    $response->assertStatus(201);
})->with([
    'test #01' =>
        [
            [
                "name" => "Defesa Contra as Artes das Trevas",
                "duration" => "150",
                "description" => "Uma das matérias mais importantes que um bruxo aprende em Hogwarts, a Defesa Contra as Artes das Trevas (DCAT, para facilitar) estuda os seres, magias e técnicas das Trevas, e as formas de se defender dela. Todos os bruxos que desejam ser Aurores costumam dedicar-se de forma muito intensa a essa matéria. Em Hogwarts, corre o boato que essa matéria está amaldiçoada, pois os últimos quatro professores não duraram mais que um ano ocupando a cadeira: Umbrigde acabou sendo encontrada na Floresta Proibida, enlouquecida; Moody era um espião de Você-Sabe- Quem; Remo Lupin (um dos preferidos de todos, menos de Sonserina) era um Lobisomem (ou seja, o próprio professor de DCAT era um Ser das Trevas); Gilderoy Lockhart era uma farsa (ele apenas contava as histórias de bruxos que haviam sido bem sucedidos contra seres das trevas, apagando-lhes as memórias mais tarde); e Quirrel era um bruxo “possuído” por Voldemort (os dois coexistiam no mesmo corpo). Não se sabe quem será o próximo professor de DCAT, mas muitos acreditam que será Remo Lupin ou possivelmente Alastor Moody (o verdadeiro). ",
            ]
        ],
    'test #02' =>
        [
            [
                "name" => "Herbologia",
                "duration" => "100",
            ]
        ],
    'test #03' =>
        [
            [
                "name" => "Aritimancia",
                "duration" => "120",
            ]
        ],
]);
