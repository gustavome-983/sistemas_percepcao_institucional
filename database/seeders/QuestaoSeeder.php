<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class QuestaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $options = [
            ["key" => "1", "value" => "Muito ruim"],
            ["key" => "2", "value" => "Ruim"],
            ["key" => "3", "value" => "Regular"],
            ["key" => "4", "value" => "Bom"],
            ["key" => "5", "value" => "Muito bom"],
        ];

        $textos = [
            'Assiduidade/Pontualidade',
            'Apresentação/Cumprimento do plano de ensino',
            'Conhecimento/Atualização da matéria',
            'Utilizacao da bibliografia básica na disciplina',
            'Clareza na exposição dos conteúdos',
            'Relacionamento entre aspectos teóricos e práticos da disciplina',
            'Didática (dinamismo, clareza e organização na exposição de temas) nas aulas ministradas',
            'Coerência entre conteúdo ministrado e avaliações aplicadas',
            'Interesse em esclarecer as dúvidas dos alunos',
            'Relacionamento com os alunos',
        ];

        foreach ($textos as $texto) {
            \App\Models\Questao::create([
                'campo' => [
                    'type' => 'radio',
                    'text' => $texto,
                    'options' => $options,
                ],
                'ativo' => 1,
            ]);
        }
    }
}