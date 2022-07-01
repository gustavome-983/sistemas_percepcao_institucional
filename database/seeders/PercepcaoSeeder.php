<?php

namespace Database\Seeders;

use App\Models\Grupo;
use App\Models\Percepcao;
use Illuminate\Database\Seeder;

class PercepcaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Modelo EEL
        $textoApresentacao = 'O presente questionário será utilizado na EEL-USP para melhoria da qualidade de ensino. As identidades serão preservadas com total sigilo.';
        $textoFormularioAvaliacao = 'Responda com responsabilidade !';
        $questaoSettings = '{"grupos":{"1":{"id":1,"ordem":1,"texto":"Percep\u00e7\u00e3o em cada disciplinas","repeticao":1,"modelo_repeticao":"disciplinas","grupos":{"2":{"id":2,"ordem":0,"texto":"Auto avalia\u00e7\u00e3o","repeticao":0,"modelo_repeticao":null,"questoes":{"10":{"id":10,"campo":{"type":"radio","text":"Relacionamento com os alunos","options":[{"key":"1","value":"Muito ruim"},{"key":"2","value":"Ruim"},{"key":"3","value":"Regular"},{"key":"4","value":"Bom"},{"key":"5","value":"Muito bom"}]}},"22":{"id":22,"campo":{"type":"textarea","text":"Coment\u00e1rios e sugest\u00f5es","maxlength":500,"rows":3,"options":""}}}}},"questoes":{"1":{"id":1,"campo":{"options":[{"key":"1","value":"Muito ruim"},{"key":"2","value":"Ruim"},{"key":"3","value":"Regular"},{"key":"4","value":"Bom"},{"key":"5","value":"Muito bom"}],"type":"radio","text":"Assiduidade\/Pontualidade","rules":"required|integer|min:1|max:5"}},"2":{"id":2,"campo":{"type":"radio","text":"Apresenta\u00e7\u00e3o\/Cumprimento do plano de ensino","options":[{"key":"1","value":"Muito ruim"},{"key":"2","value":"Ruim"},{"key":"3","value":"Regular"},{"key":"4","value":"Bom"},{"key":"5","value":"Muito bom"}]}},"3":{"id":3,"campo":{"type":"radio","text":"Conhecimento\/Atualiza\u00e7\u00e3o da mat\u00e9ria","options":[{"key":"1","value":"Muito ruim"},{"key":"2","value":"Ruim"},{"key":"3","value":"Regular"},{"key":"4","value":"Bom"},{"key":"5","value":"Muito bom"}]}}}}}}';
        $p = Percepcao::create([
            'dataDeAbertura' => now()->addDays(1)->format('d/m/Y H:i:s'),
            'dataDeFechamento' => now()->addDays(mt_rand(2, 10))->format('d/m/Y H:i:s'),
            'ano' => date('Y'),
            'semestre' => 1,
            'questao_settings' => $questaoSettings,
            'settings' => [
                'textoFormularioAvaliacao' => $textoFormularioAvaliacao,
                'textoApresentacao' => $textoApresentacao,
                'comentario' => 'Modelo de percepção da EEL',
                'totalDeAlunosMatriculados' => mt_rand(100, 1000),
            ]
        ]);

        // Modelo EESC
        $textoApresentacao = 'O presente questionário será utilizado na EESC-USP para melhoria da qualidade de ensino. As identidades serão preservadas com total sigilo.';
        $textoFormularioAvaliacao = 'Responda com responsabilidade !';
        $questaoSettings = '{"grupos":{"7":{"id":7,"ordem":1,"texto":"DISCIPLINA","repeticao":1,"modelo_repeticao":"disciplinas","grupos":{"8":{"id":8,"ordem":0,"texto":"Avalia\u00e7\u00e3o do professor","repeticao":1,"modelo_repeticao":"disciplinas","questoes":{"26":{"id":26,"campo":{"type":"radio","text":"Como voc\u00ea avalia a pontualidade e assiduidade do professor?","options":[{"key":"1","value":"Muito ruim"},{"key":"2","value":"Ruim"},{"key":"3","value":"Regular"},{"key":"4","value":"Bom"},{"key":"5","value":"Muito bom"}],"rules":"required|integer|min:1|max:5"}},"27":{"id":27,"campo":{"type":"radio","text":"O professor apresentou um plano de ensino?","options":[{"key":"1","value":"Sim"},{"key":"2","value":"N\u00e3o"}],"rules":"required|integer|min:1|max:2"}},"28":{"id":28,"campo":{"type":"radio","text":"O plano de ensino foi cumprido?","options":[{"key":"1","value":"Sim"},{"key":"2","value":"N\u00e3o"}],"rules":"required|integer|min:1|max:2"}},"29":{"id":29,"campo":{"type":"radio","text":"Como avalia o dom\u00ednio do professor na disciplina?","options":[{"key":"1","value":"Muito ruim"},{"key":"2","value":"Ruim"},{"key":"3","value":"Regular"},{"key":"4","value":"Bom"},{"key":"5","value":"Muito bom"}],"rules":"required|integer|min:1|max:5"}},"30":{"id":30,"campo":{"type":"radio","text":"Os recursos disponibilizados (PDF\'s, v\u00eddeo aulas, listas de exerc\u00edcios, exemplos em aula, v\u00eddeos, imagens, \u00e1udios, softwares, etc) s\u00e3o suficientes e adequados para o aprendizado e a realiza\u00e7\u00e3o das avalia\u00e7\u00f5es?","options":[{"key":"1","value":"Muito ruim"},{"key":"2","value":"Ruim"},{"key":"3","value":"Regular"},{"key":"4","value":"Bom"},{"key":"5","value":"Muito bom"}],"rules":"required|integer|min:1|max:5"}},"31":{"id":31,"campo":{"type":"radio","text":"Como avalia a did\u00e1tica (dinamismo, clareza e organiza\u00e7\u00e3o na exposi\u00e7\u00e3o de temas) nas aulas ministradas?","options":[{"key":"1","value":"Muito ruim"},{"key":"2","value":"Ruim"},{"key":"3","value":"Regular"},{"key":"4","value":"Bom"},{"key":"5","value":"Muito bom"}],"rules":"required|integer|min:1|max:5"}},"32":{"id":32,"campo":{"type":"radio","text":"Como voc\u00ea avalia a coer\u00eancia entre conte\u00fado ministrado e avalia\u00e7\u00f5es aplicadas?","options":[{"key":"1","value":"Muito ruim"},{"key":"2","value":"Ruim"},{"key":"3","value":"Regular"},{"key":"4","value":"Bom"},{"key":"5","value":"Muito bom"}],"rules":"required|integer|min:1|max:5"}},"33":{"id":33,"campo":{"type":"radio","text":"Como avalia a abertura e disponibilidade do(a) docente a respeito de d\u00favidas de conte\u00fado e da programa\u00e7\u00e3o da disciplina?","options":[{"key":"1","value":"Muito ruim"},{"key":"2","value":"Ruim"},{"key":"3","value":"Regular"},{"key":"4","value":"Bom"},{"key":"5","value":"Muito bom"}],"rules":"required|integer|min:1|max:5"}},"34":{"id":34,"campo":{"type":"radio","text":"Como avalia a preocupa\u00e7\u00e3o do(a) docente com o processo de aprendizado do conte\u00fado?","options":[{"key":"1","value":"Muito ruim"},{"key":"2","value":"Ruim"},{"key":"3","value":"Regular"},{"key":"4","value":"Bom"},{"key":"5","value":"Muito bom"}],"rules":"required|integer|min:1|max:5"}}}},"9":{"id":9,"ordem":1,"texto":"Avalia\u00e7\u00e3o da disciplina","repeticao":1,"modelo_repeticao":"disciplinas","questoes":{"35":{"id":35,"campo":{"type":"radio","text":"Qu\u00e3o atualizada \u00e9 o conte\u00fado da  disciplina?","options":[{"key":"1","value":"Muito ruim"},{"key":"2","value":"Ruim"},{"key":"3","value":"Regular"},{"key":"4","value":"Bom"},{"key":"5","value":"Muito bom"}],"rules":"required|integer|min:1|max:5"}},"36":{"id":36,"campo":{"type":"radio","text":"A bibliografia b\u00e1sica contempla o conte\u00fado principal abordado na disciplina?","options":[{"key":"1","value":"Muito ruim"},{"key":"2","value":"Ruim"},{"key":"3","value":"Regular"},{"key":"4","value":"Bom"},{"key":"5","value":"Muito bom"}],"rules":"required|integer|min:1|max:5"}},"37":{"id":37,"campo":{"type":"radio","text":"Como voc\u00ea avalia a conex\u00e3o entre aspectos te\u00f3ricos e pr\u00e1ticos da disciplina?","options":[{"key":"1","value":"Muito ruim"},{"key":"2","value":"Ruim"},{"key":"3","value":"Regular"},{"key":"4","value":"Bom"},{"key":"5","value":"Muito bom"}],"rules":"required|integer|min:1|max:5"}},"38":{"id":38,"campo":{"type":"radio","text":"Voc\u00ea  tem entendimento do papel formativo da disciplina na estrutura do seu curso?","options":[{"key":"1","value":"Pouco"},{"key":"2","value":"Parcial"},{"key":"3","value":"Muito"}],"rules":"required|integer|min:1|max:5"}}}},"10":{"id":10,"ordem":2,"texto":"Auto avalia\u00e7\u00e3o","repeticao":1,"modelo_repeticao":"disciplinas","questoes":{"39":{"id":39,"campo":{"type":"radio","text":"Como voc\u00ea avalia a sua pontualidade e assiduidade? ","options":[{"key":"1","value":"Muito ruim"},{"key":"2","value":"Ruim"},{"key":"3","value":"Regular"},{"key":"4","value":"Bom"},{"key":"5","value":"Muito bom"}],"rules":"required|integer|min:1|max:5"}},"40":{"id":40,"campo":{"type":"radio","text":"Como avalia a sua participa\u00e7\u00e3o nas aulas (perguntar, realizar as atividades propostas durante a aula)?","options":[{"key":"1","value":"Muito ruim"},{"key":"2","value":"Ruim"},{"key":"3","value":"Regular"},{"key":"4","value":"Bom"},{"key":"5","value":"Muito bom"}],"rules":"required|integer|min:1|max:5"}},"41":{"id":41,"campo":{"type":"radio","text":"Qu\u00e3o bem voc\u00ea cumpriu as atividades recomendadas?","options":[{"key":"1","value":"Muito ruim"},{"key":"2","value":"Ruim"},{"key":"3","value":"Regular"},{"key":"4","value":"Bom"},{"key":"5","value":"Muito bom"}],"rules":"required|integer|min:1|max:5"}},"42":{"id":42,"campo":{"type":"radio","text":"Como avalia a sua colabora\u00e7\u00e3o com colegas no desenvolvimento de atividades propostas durante as aulas (empatia com os colegas)?","options":[{"key":"1","value":"Muito ruim"},{"key":"2","value":"Ruim"},{"key":"3","value":"Regular"},{"key":"4","value":"Bom"},{"key":"5","value":"Muito bom"}],"rules":"required|integer|min:1|max:5"}}}}}}}}';
        $p = Percepcao::create([
            'dataDeAbertura' => now()->addDays(1)->format('d/m/Y H:i:s'),
            'dataDeFechamento' => now()->addDays(mt_rand(2, 10))->format('d/m/Y H:i:s'),
            'ano' => 2022,
            'semestre' => 1,
            'questao_settings' => $questaoSettings,
            'settings' => [
                'textoFormularioAvaliacao' => $textoFormularioAvaliacao,
                'textoApresentacao' => $textoApresentacao,
                'comentario' => 'Modelo de percepção da EESC',
                'totalDeAlunosMatriculados' => mt_rand(100, 1000),
            ]
        ]);
    }
}
