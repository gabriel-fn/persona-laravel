<?php

use Illuminate\Database\Seeder;
use App\Poder;

class PoderesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Poder::class)->create(['nome'=>'Absorção', 'efeito'=>'Característica/Defesa', 'acao'=>'Reação', 'alcance'=>'Pessoal', 'duracao'=>'Contínua', 'salvamento'=>'', 'custo_max'=>4, 'custo_min'=>4]);
        factory(Poder::class)->create(['nome'=>'Adaptação', 'efeito'=>'Alteração', 'acao'=>'Completa', 'alcance'=>'Pessoal', 'duracao'=>'Contínua', 'salvamento'=>'', 'custo_max'=>6, 'custo_min'=>6]);
        factory(Poder::class)->create(['nome'=>'Alongamento', 'efeito'=>'Alteração', 'acao'=>'Movimento', 'alcance'=>'Pessoal', 'duracao'=>'Sustentada', 'salvamento'=>'', 'custo_max'=>1, 'custo_min'=>1]);
        factory(Poder::class)->create(['nome'=>'Animar Objetos', 'efeito'=>'Geral', 'acao'=>'Padrão', 'alcance'=>'À Distância', 'duracao'=>'Sustentada', 'salvamento'=>'', 'custo_max'=>3, 'custo_min'=>3]);
        factory(Poder::class)->create(['nome'=>'Armadilha', 'efeito'=>'Ataque', 'acao'=>'Padrão', 'alcance'=>'À Distância', 'duracao'=>'Instantânea', 'salvamento'=>'Reflexo', 'custo_max'=>2, 'custo_min'=>2]);
        factory(Poder::class)->create(['nome'=>'Atordoar', 'efeito'=>'Ataque', 'acao'=>'Padrão', 'alcance'=>'Toque', 'duracao'=>'Instantânea (D)', 'salvamento'=>'Fortitude', 'custo_max'=>2, 'custo_min'=>2]);
        
        factory(Poder::class)->create(['nome'=>'Bolsão Dimensional', 'efeito'=>'Movimento', 'acao'=>'Movimento/Padrão', 'alcance'=>'Toque', 'duracao'=>'Instantânea (D)', 'salvamento'=>'Reflexo/Vontade', 'custo_max'=>2, 'custo_min'=>2]);
        
        factory(Poder::class)->create(['nome'=>'Campo de Força', 'efeito'=>'Defesa', 'acao'=>'Livre', 'alcance'=>'Pessoal', 'duracao'=>'Sustentada', 'salvamento'=>'', 'custo_max'=>1, 'custo_min'=>1]);
        factory(Poder::class)->create(['nome'=>'Camuflagem', 'efeito'=>'Sensorial', 'acao'=>'Livre', 'alcance'=>'Pessoal', 'duracao'=>'Sustentada', 'salvamento'=>'', 'custo_max'=>2, 'custo_min'=>2]);
        factory(Poder::class)->create(['nome'=>'Compreender', 'efeito'=>'Sensorial', 'acao'=>'Reação', 'alcance'=>'Pessoal', 'duracao'=>'Contínua', 'salvamento'=>'', 'custo_max'=>2, 'custo_min'=>2]);
        factory(Poder::class)->create(['nome'=>'Comunicação', 'efeito'=>'Sensorial', 'acao'=>'Livre', 'alcance'=>'Estendido', 'duracao'=>'Sustentada', 'salvamento'=>'', 'custo_max'=>1, 'custo_min'=>1]);
        factory(Poder::class)->create(['nome'=>'Confusão', 'efeito'=>'Mental', 'acao'=>'Padrão', 'alcance'=>'Percepção', 'duracao'=>'Instantânea (D)', 'salvamento'=>'Vontade', 'custo_max'=>2, 'custo_min'=>2]);
        factory(Poder::class)->create(['nome'=>'Controle Ambiental', 'efeito'=>'Geral', 'acao'=>'Padrão', 'alcance'=>'À Distância', 'duracao'=>'Sustentada', 'salvamento'=>'Variado', 'custo_max'=>2, 'custo_min'=>1]);
        factory(Poder::class)->create(['nome'=>'Controle Cinético', 'efeito'=>'Ataque', 'acao'=>'Padrão', 'alcance'=>'À Distância', 'duracao'=>'Instantânea', 'salvamento'=>'Resistência', 'custo_max'=>2, 'custo_min'=>2]);
        factory(Poder::class)->create(['nome'=>'Controle ClimÀtico', 'efeito'=>'Geral', 'acao'=>'Padrão', 'alcance'=>'À Distância', 'duracao'=>'Sustentada', 'salvamento'=>'Fortitude', 'custo_max'=>2, 'custo_min'=>2]);
        factory(Poder::class)->create(['nome'=>'Controle de (Elemento)', 'efeito'=>'Geral', 'acao'=>'Padrão', 'alcance'=>'Percepção', 'duracao'=>'Sustentada', 'salvamento'=>'', 'custo_max'=>2, 'custo_min'=>2]);
        factory(Poder::class)->create(['nome'=>'Controle de Animais', 'efeito'=>'Mental', 'acao'=>'Padrão', 'alcance'=>'Percepção', 'duracao'=>'Sustentada (D)', 'salvamento'=>'Vontade', 'custo_max'=>2, 'custo_min'=>2]);
        factory(Poder::class)->create(['nome'=>'Controle de Energia Cósmica', 'efeito'=>'Ataque', 'acao'=>'Padrão', 'alcance'=>'À Distância', 'duracao'=>'Instantânea', 'salvamento'=>'Resistência', 'custo_max'=>2, 'custo_min'=>2]);
        factory(Poder::class)->create(['nome'=>'Controle de Escuridão', 'efeito'=>'Sensorial', 'acao'=>'Padrão', 'alcance'=>'À Distância', 'duracao'=>'Sustentada', 'salvamento'=>'', 'custo_max'=>2, 'custo_min'=>2]);
        factory(Poder::class)->create(['nome'=>'Controle de Fogo Infernal', 'efeito'=>'Ataque', 'acao'=>'Padrão', 'alcance'=>'À Distância', 'duracao'=>'Instantânea', 'salvamento'=>'Resistência', 'custo_max'=>2, 'custo_min'=>2]);
        factory(Poder::class)->create(['nome'=>'Controle de Fricção', 'efeito'=>'Ataque', 'acao'=>'Padrão', 'alcance'=>'Percepção', 'duracao'=>'Instantânea', 'salvamento'=>'Reflexo', 'custo_max'=>3, 'custo_min'=>3]);
        factory(Poder::class)->create(['nome'=>'Controle de Frio', 'efeito'=>'Geral', 'acao'=>'Padrão', 'alcance'=>'À Distância', 'duracao'=>'Sustentada', 'salvamento'=>'Fortitude', 'custo_max'=>2, 'custo_min'=>2]);
        factory(Poder::class)->create(['nome'=>'Controle de Luz', 'efeito'=>'Geral', 'acao'=>'Padrão', 'alcance'=>'À Distância', 'duracao'=>'Sustentada', 'salvamento'=>'', 'custo_max'=>2, 'custo_min'=>2]);
        factory(Poder::class)->create(['nome'=>'Controle de Plantas', 'efeito'=>'Ataque', 'acao'=>'Padrão', 'alcance'=>'À Distância', 'duracao'=>'Instantânea', 'salvamento'=>'Reflexo', 'custo_max'=>2, 'custo_min'=>2]);
        factory(Poder::class)->create(['nome'=>'Controle de Plasma', 'efeito'=>'Ataque', 'acao'=>'Padrão', 'alcance'=>'À Distância', 'duracao'=>'Instantânea', 'salvamento'=>'Resistência', 'custo_max'=>2, 'custo_min'=>2]);
        factory(Poder::class)->create(['nome'=>'Controle de Poder', 'efeito'=>'Mental', 'acao'=>'Padrão', 'alcance'=>'Percepção', 'duracao'=>'Sustentada (D)', 'salvamento'=>'Vontade', 'custo_max'=>2, 'custo_min'=>2]);
        factory(Poder::class)->create(['nome'=>'Controle de Radiação', 'efeito'=>'Ataque', 'acao'=>'Padrão', 'alcance'=>'À Distância', 'duracao'=>'Instantânea', 'salvamento'=>'Resistência', 'custo_max'=>2, 'custo_min'=>2]);
        factory(Poder::class)->create(['nome'=>'Controle de Sorte', 'efeito'=>'Geral', 'acao'=>'Reação', 'alcance'=>'Percepção', 'duracao'=>'Instantânea', 'salvamento'=>'', 'custo_max'=>3, 'custo_min'=>3]);
        factory(Poder::class)->create(['nome'=>'Controle de Vibração', 'efeito'=>'Ataque', 'acao'=>'Padrão', 'alcance'=>'À Distância', 'duracao'=>'Instantânea', 'salvamento'=>'Resistência', 'custo_max'=>2, 'custo_min'=>2]);
        factory(Poder::class)->create(['nome'=>'Controle Elétrico', 'efeito'=>'Ataque', 'acao'=>'Padrão', 'alcance'=>'À Distância', 'duracao'=>'Instantânea', 'salvamento'=>'', 'custo_max'=>2, 'custo_min'=>2]);
        factory(Poder::class)->create(['nome'=>'Controle Emocional', 'efeito'=>'Mental', 'acao'=>'Padrão', 'alcance'=>'Percepção', 'duracao'=>'Sustentada (D)', 'salvamento'=>'Vontade', 'custo_max'=>2, 'custo_min'=>2]);
        factory(Poder::class)->create(['nome'=>'Controle Espacial', 'efeito'=>'Movimento', 'acao'=>'Movimento', 'alcance'=>'Pessoal', 'duracao'=>'Instantânea', 'salvamento'=>'', 'custo_max'=>2, 'custo_min'=>2]);
        factory(Poder::class)->create(['nome'=>'Controle Gravitacional', 'efeito'=>'Geral', 'acao'=>'Padrão', 'alcance'=>'À Distância', 'duracao'=>'Sustentada', 'salvamento'=>'', 'custo_max'=>2, 'custo_min'=>2]);
        factory(Poder::class)->create(['nome'=>'Controle Magnético', 'efeito'=>'Geral', 'acao'=>'Padrão', 'alcance'=>'Percepção', 'duracao'=>'Sustentada', 'salvamento'=>'', 'custo_max'=>2, 'custo_min'=>2]);
        factory(Poder::class)->create(['nome'=>'Controle Mental', 'efeito'=>'Mental', 'acao'=>'Padrão', 'alcance'=>'Percepção', 'duracao'=>'Concentração (D)', 'salvamento'=>'Vontade', 'custo_max'=>2, 'custo_min'=>2]);
        factory(Poder::class)->create(['nome'=>'Controle Sônico', 'efeito'=>'Ataque', 'acao'=>'Padrão', 'alcance'=>'À Distância', 'duracao'=>'Instantânea', 'salvamento'=>'Reflexo', 'custo_max'=>2, 'custo_min'=>2]);
        factory(Poder::class)->create(['nome'=>'Controle Temporal', 'efeito'=>'Movimento', 'acao'=>'Movimento', 'alcance'=>'À Distância', 'duracao'=>'Sustentada', 'salvamento'=>'', 'custo_max'=>7, 'custo_min'=>7]);
        factory(Poder::class)->create(['nome'=>'Controle Vital', 'efeito'=>'Geral', 'acao'=>'Padrão', 'alcance'=>'Percepção', 'duracao'=>'Instantânea (D)', 'salvamento'=>'Fortitude', 'custo_max'=>4, 'custo_min'=>4]);
        factory(Poder::class)->create(['nome'=>'Corrosão', 'efeito'=>'Ataque', 'acao'=>'Padrão', 'alcance'=>'Toque', 'duracao'=>'Instantânea', 'salvamento'=>'Fortitude/Resistência', 'custo_max'=>2, 'custo_min'=>2]);
        factory(Poder::class)->create(['nome'=>'Crescimento', 'efeito'=>'Alteração', 'acao'=>'Livre', 'alcance'=>'Pessoal', 'duracao'=>'Sustentada', 'salvamento'=>'', 'custo_max'=>3, 'custo_min'=>3]);
        factory(Poder::class)->create(['nome'=>'Criar Objeto', 'efeito'=>'Geral', 'acao'=>'Padrão', 'alcance'=>'À Distância', 'duracao'=>'Sustentada', 'salvamento'=>'Reflexo', 'custo_max'=>2, 'custo_min'=>2]);
        factory(Poder::class)->create(['nome'=>'Cura', 'efeito'=>'Alteração', 'acao'=>'Completa', 'alcance'=>'Toque', 'duracao'=>'Instantânea', 'salvamento'=>'', 'custo_max'=>2, 'custo_min'=>2]);
        
        factory(Poder::class)->create(['nome'=>'Deflexão', 'efeito'=>'Defesa', 'acao'=>'Padrão', 'alcance'=>'Toque', 'duracao'=>'Instantânea', 'salvamento'=>'', 'custo_max'=>3, 'custo_min'=>1]);
        factory(Poder::class)->create(['nome'=>'Densidade', 'efeito'=>'Alteração', 'acao'=>'Livre', 'alcance'=>'Pessoal', 'duracao'=>'Sustentada', 'salvamento'=>'', 'custo_max'=>3, 'custo_min'=>3]);
        factory(Poder::class)->create(['nome'=>'Derrubar', 'efeito'=>'Ataque', 'acao'=>'Padrão', 'alcance'=>'À Distância', 'duracao'=>'Instantânea', 'salvamento'=>'', 'custo_max'=>1, 'custo_min'=>1]);
        factory(Poder::class)->create(['nome'=>'Desintegração', 'efeito'=>'Ataque', 'acao'=>'Padrão', 'alcance'=>'À Distância', 'duracao'=>'Instantânea', 'salvamento'=>'Fortitude/Resistência', 'custo_max'=>4, 'custo_min'=>4]);
        factory(Poder::class)->create(['nome'=>'Dispositivo', 'efeito'=>'Geral', 'acao'=>'Reação', 'alcance'=>'Pessoal', 'duracao'=>'Inata', 'salvamento'=>'', 'custo_max'=>4, 'custo_min'=>3]);
        factory(Poder::class)->create(['nome'=>'Drenar (Característica)', 'efeito'=>'Característica', 'acao'=>'Padrão', 'alcance'=>'Toque', 'duracao'=>'Instantânea', 'salvamento'=>'Fortitude', 'custo_max'=>5, 'custo_min'=>1]);
        factory(Poder::class)->create(['nome'=>'Duplicação', 'efeito'=>'Alteração', 'acao'=>'Padrão', 'alcance'=>'Pessoal', 'duracao'=>'Sustentada', 'salvamento'=>'', 'custo_max'=>2, 'custo_min'=>2]);
        
        factory(Poder::class)->create(['nome'=>'Elo Eletrônico', 'efeito'=>'Sensorial', 'acao'=>'Livre', 'alcance'=>'Estendido', 'duracao'=>'Sustentada', 'salvamento'=>'', 'custo_max'=>1, 'custo_min'=>1]);
        factory(Poder::class)->create(['nome'=>'Encolhimento', 'efeito'=>'Alteração', 'acao'=>'Livre', 'alcance'=>'Pessoal', 'duracao'=>'Sustentada', 'salvamento'=>'', 'custo_max'=>1, 'custo_min'=>1]);
        factory(Poder::class)->create(['nome'=>'Escavação', 'efeito'=>'Movimento', 'acao'=>'Movimento', 'alcance'=>'Pessoal', 'duracao'=>'Sustentada', 'salvamento'=>'', 'custo_max'=>1, 'custo_min'=>1]);
        factory(Poder::class)->create(['nome'=>'Escudo', 'efeito'=>'Defesa', 'acao'=>'Livre', 'alcance'=>'Pessoal', 'duracao'=>'Sustentada', 'salvamento'=>'', 'custo_max'=>1, 'custo_min'=>1]);
        factory(Poder::class)->create(['nome'=>'Escudo Mental', 'efeito'=>'Defesa/Mental', 'acao'=>'Livre', 'alcance'=>'Pessoal', 'duracao'=>'Sustentada', 'salvamento'=>'', 'custo_max'=>1, 'custo_min'=>1]);
        factory(Poder::class)->create(['nome'=>'Escudo Sensorial', 'efeito'=>'Defesa', 'acao'=>'Reação', 'alcance'=>'Pessoal', 'duracao'=>'Permanente', 'salvamento'=>'', 'custo_max'=>2, 'custo_min'=>1]);
        
        factory(Poder::class)->create(['nome'=>'Fadiga', 'efeito'=>'Ataque', 'acao'=>'Padrão', 'alcance'=>'Toque', 'duracao'=>'Instantânea', 'salvamento'=>'Fortitude', 'custo_max'=>2, 'custo_min'=>2]);
        factory(Poder::class)->create(['nome'=>'Forma (Alternativa)', 'efeito'=>'Alteração', 'acao'=>'Livre', 'alcance'=>'Pessoal', 'duracao'=>'Variada', 'salvamento'=>'', 'custo_max'=>5, 'custo_min'=>5]);
        factory(Poder::class)->create(['nome'=>'Forma Astral', 'efeito'=>'Sensorial', 'acao'=>'Padrão', 'alcance'=>'Estendido', 'duracao'=>'Sustentada', 'salvamento'=>'', 'custo_max'=>5, 'custo_min'=>5]);
        factory(Poder::class)->create(['nome'=>'Fortalecer (Característica)', 'efeito'=>'Característica', 'acao'=>'Padrão', 'alcance'=>'Toque', 'duracao'=>'Instantânea', 'salvamento'=>'', 'custo_max'=>5, 'custo_min'=>1]);
        factory(Poder::class)->create(['nome'=>'Fusão', 'efeito'=>'Alteração', 'acao'=>'Completa', 'alcance'=>'Pessoal', 'duracao'=>'Contínua', 'salvamento'=>'', 'custo_max'=>1, 'custo_min'=>1]);
        
        factory(Poder::class)->create(['nome'=>'Giro', 'efeito'=>'Defesa', 'acao'=>'Livre', 'alcance'=>'Pessoal', 'duracao'=>'Sustentada', 'salvamento'=>'', 'custo_max'=>2, 'custo_min'=>2]);
        factory(Poder::class)->create(['nome'=>'Golpe', 'efeito'=>'Ataque', 'acao'=>'Padrão', 'alcance'=>'Toque', 'duracao'=>'Instantânea', 'salvamento'=>'Resistência', 'custo_max'=>1, 'custo_min'=>1]);
        
        factory(Poder::class)->create(['nome'=>'Habilidade Aumentada', 'efeito'=>'Característica', 'acao'=>'Reação', 'alcance'=>'Pessoal', 'duracao'=>'Contínua', 'salvamento'=>'', 'custo_max'=>1, 'custo_min'=>1]);
        
        factory(Poder::class)->create(['nome'=>'Ilusão', 'efeito'=>'Sensorial', 'acao'=>'Padrão', 'alcance'=>'Percepção', 'duracao'=>'Concentração', 'salvamento'=>'Vontade', 'custo_max'=>4, 'custo_min'=>1]);
        factory(Poder::class)->create(['nome'=>'Imitação de (Característica)', 'efeito'=>'Alteração', 'acao'=>'Padrão', 'alcance'=>'Toque', 'duracao'=>'Sustentada', 'salvamento'=>'', 'custo_max'=>5, 'custo_min'=>1]);
        factory(Poder::class)->create(['nome'=>'Imitação de Animais', 'efeito'=>'Característica', 'acao'=>'Livre', 'alcance'=>'Pessoal', 'duracao'=>'Contínua', 'salvamento'=>'', 'custo_max'=>9, 'custo_min'=>9]);
        factory(Poder::class)->create(['nome'=>'Imitação de Objetos', 'efeito'=>'Característica', 'acao'=>'Movimento', 'alcance'=>'Toque', 'duracao'=>'Sustentada', 'salvamento'=>'', 'custo_max'=>6, 'custo_min'=>6]);
        factory(Poder::class)->create(['nome'=>'Imóvel', 'efeito'=>'Defesa', 'acao'=>'Reação', 'alcance'=>'Pessoal', 'duracao'=>'Permanente', 'salvamento'=>'', 'custo_max'=>1, 'custo_min'=>1]);
        factory(Poder::class)->create(['nome'=>'Imunidade', 'efeito'=>'Defesa', 'acao'=>'Reação', 'alcance'=>'Pessoal', 'duracao'=>'Permanente', 'salvamento'=>'', 'custo_max'=>1, 'custo_min'=>1]);
        factory(Poder::class)->create(['nome'=>'Intangibilidade', 'efeito'=>'Alteração', 'acao'=>'Livre', 'alcance'=>'Pessoal', 'duracao'=>'Sustentada', 'salvamento'=>'', 'custo_max'=>5, 'custo_min'=>5]);
        factory(Poder::class)->create(['nome'=>'Invisibilidade', 'efeito'=>'Sensorial', 'acao'=>'Livre', 'alcance'=>'Pessoal', 'duracao'=>'Sustentada', 'salvamento'=>'', 'custo_max'=>8, 'custo_min'=>4]);
        factory(Poder::class)->create(['nome'=>'Invocar (Capanga)', 'efeito'=>'Geral', 'acao'=>'Padrão', 'alcance'=>'Toque', 'duracao'=>'Sustentada', 'salvamento'=>'', 'custo_max'=>2, 'custo_min'=>2]);
        
        factory(Poder::class)->create(['nome'=>'Leitura Mental', 'efeito'=>'Mental', 'acao'=>'Padrão/Completa', 'alcance'=>'Percepção', 'duracao'=>'Concentração (D)', 'salvamento'=>'Vontade', 'custo_max'=>1, 'custo_min'=>1]);
        
        factory(Poder::class)->create(['nome'=>'Magia', 'efeito'=>'Geral', 'acao'=>'Padrão', 'alcance'=>'À Distância', 'duracao'=>'Instantânea', 'salvamento'=>'Variado', 'custo_max'=>2, 'custo_min'=>2]);
        factory(Poder::class)->create(['nome'=>'Membros Adicionais', 'efeito'=>'Alteração', 'acao'=>'Reação', 'alcance'=>'Pessoal', 'duracao'=>'Permanente', 'salvamento'=>'', 'custo_max'=>1, 'custo_min'=>1]);
        factory(Poder::class)->create(['nome'=>'Metamorfose', 'efeito'=>'Alteração', 'acao'=>'Movimento', 'alcance'=>'Pessoal', 'duracao'=>'Sustentada', 'salvamento'=>'', 'custo_max'=>8, 'custo_min'=>8]);
        factory(Poder::class)->create(['nome'=>'Morfar', 'efeito'=>'Alteração', 'acao'=>'Livre', 'alcance'=>'Pessoal', 'duracao'=>'Sustentada', 'salvamento'=>'', 'custo_max'=>3, 'custo_min'=>1]);
        
        factory(Poder::class)->create(['nome'=>'Natação', 'efeito'=>'Movimento', 'acao'=>'Movimento', 'alcance'=>'Pessoal', 'duracao'=>'Sustentada', 'salvamento'=>'', 'custo_max'=>1, 'custo_min'=>1]);
        factory(Poder::class)->create(['nome'=>'Nausear', 'efeito'=>'Ataque', 'acao'=>'Padrão', 'alcance'=>'Toque', 'duracao'=>'Instantânea (D)', 'salvamento'=>'Fortitude', 'custo_max'=>2, 'custo_min'=>2]);
        factory(Poder::class)->create(['nome'=>'Nêmesis', 'efeito'=>'Característica', 'acao'=>'Livre', 'alcance'=>'Percepção', 'duracao'=>'Contínua', 'salvamento'=>'', 'custo_max'=>8, 'custo_min'=>8]);
        factory(Poder::class)->create(['nome'=>'Nulificar (Poder)', 'efeito'=>'Característica', 'acao'=>'Padrão', 'alcance'=>'À Distância', 'duracao'=>'Instantânea', 'salvamento'=>'Vontade', 'custo_max'=>3, 'custo_min'=>1]);
        
        factory(Poder::class)->create(['nome'=>'Obscurecer', 'efeito'=>'Sensorial', 'acao'=>'Padrão', 'alcance'=>'À Distância', 'duracao'=>'Sustentada', 'salvamento'=>'', 'custo_max'=>4, 'custo_min'=>1]);
        
        factory(Poder::class)->create(['nome'=>'Paralisia', 'efeito'=>'Ataque', 'acao'=>'Padrão', 'alcance'=>'Toque', 'duracao'=>'Instantânea (D)', 'salvamento'=>'Vontade', 'custo_max'=>2, 'custo_min'=>2]);
        factory(Poder::class)->create(['nome'=>'Pasmar', 'efeito'=>'Sensorial', 'acao'=>'Padrão', 'alcance'=>'À Distância', 'duracao'=>'Instantânea', 'salvamento'=>'Reflexo/Fortitude', 'custo_max'=>4, 'custo_min'=>1]);
        factory(Poder::class)->create(['nome'=>'PES', 'efeito'=>'Sensorial', 'acao'=>'Movimento', 'alcance'=>'Estendido', 'duracao'=>'Concentração', 'salvamento'=>'', 'custo_max'=>4, 'custo_min'=>1]);
        factory(Poder::class)->create(['nome'=>'Possessão', 'efeito'=>'Mental', 'acao'=>'Padrão', 'alcance'=>'Percepção', 'duracao'=>'Sustentada (D)', 'salvamento'=>'Vontade', 'custo_max'=>4, 'custo_min'=>4]);
        factory(Poder::class)->create(['nome'=>'Proteção', 'efeito'=>'Defesa', 'acao'=>'Reação', 'alcance'=>'Pessoal', 'duracao'=>'Permanente', 'salvamento'=>'', 'custo_max'=>1, 'custo_min'=>1]);
        
        factory(Poder::class)->create(['nome'=>'Raio', 'efeito'=>'Ataque', 'acao'=>'Padrão', 'alcance'=>'À Distância', 'duracao'=>'Instantânea', 'salvamento'=>'Resistência', 'custo_max'=>2, 'custo_min'=>2]);
        factory(Poder::class)->create(['nome'=>'Rajada Mental', 'efeito'=>'Ataque/Mental', 'acao'=>'Padrão', 'alcance'=>'Percepção', 'duracao'=>'Instantânea', 'salvamento'=>'Vontade', 'custo_max'=>4, 'custo_min'=>4]);
        factory(Poder::class)->create(['nome'=>'Rapidez', 'efeito'=>'Geral', 'acao'=>'Livre', 'alcance'=>'Pessoal', 'duracao'=>'Contínua', 'salvamento'=>'', 'custo_max'=>1, 'custo_min'=>1]);
        factory(Poder::class)->create(['nome'=>'Regeneração', 'efeito'=>'Alteração', 'acao'=>'Reação', 'alcance'=>'Pessoal', 'duracao'=>'Permanente', 'salvamento'=>'', 'custo_max'=>1, 'custo_min'=>1]);
        
        factory(Poder::class)->create(['nome'=>'Salto', 'efeito'=>'Movimento', 'acao'=>'Movimento', 'alcance'=>'Pessoal', 'duracao'=>'Instantânea', 'salvamento'=>'', 'custo_max'=>1, 'custo_min'=>1]);
        factory(Poder::class)->create(['nome'=>'Separação Anatômica', 'efeito'=>'Alteração', 'acao'=>'Movimento', 'alcance'=>'Pessoal', 'duracao'=>'Contínua', 'salvamento'=>'', 'custo_max'=>2, 'custo_min'=>2]);
        factory(Poder::class)->create(['nome'=>'Sufocar', 'efeito'=>'Ataque', 'acao'=>'Padrão', 'alcance'=>'Toque', 'duracao'=>'Concentração', 'salvamento'=>'Fortitude', 'custo_max'=>2, 'custo_min'=>2]);
        factory(Poder::class)->create(['nome'=>'Superforça', 'efeito'=>'Geral', 'acao'=>'Reação', 'alcance'=>'Pessoal', 'duracao'=>'Contínua', 'salvamento'=>'', 'custo_max'=>2, 'custo_min'=>2]);
        factory(Poder::class)->create(['nome'=>'Supermovimento', 'efeito'=>'Movimento', 'acao'=>'Movimento', 'alcance'=>'Pessoal', 'duracao'=>'Sustentada', 'salvamento'=>'', 'custo_max'=>2, 'custo_min'=>2]);
        factory(Poder::class)->create(['nome'=>'Supersentidos', 'efeito'=>'Sensorial', 'acao'=>'Livre', 'alcance'=>'Pessoal', 'duracao'=>'Permanente', 'salvamento'=>'', 'custo_max'=>1, 'custo_min'=>1]);
        factory(Poder::class)->create(['nome'=>'Supervelocidade', 'efeito'=>'Movimento', 'acao'=>'Movimento', 'alcance'=>'Pessoal', 'duracao'=>'Sustentada', 'salvamento'=>'', 'custo_max'=>5, 'custo_min'=>5]);
        
        factory(Poder::class)->create(['nome'=>'Telecinesia', 'efeito'=>'Geral', 'acao'=>'Padrão', 'alcance'=>'À Distância', 'duracao'=>'Sustentada', 'salvamento'=>'', 'custo_max'=>2, 'custo_min'=>2]);
        factory(Poder::class)->create(['nome'=>'Telepatia', 'efeito'=>' Mental/Sensorial', 'acao'=>'Padrão', 'alcance'=>'Percepção/Estendido', 'duracao'=>'Concentração (D)', 'salvamento'=>'', 'custo_max'=>2, 'custo_min'=>2]);
        factory(Poder::class)->create(['nome'=>'Teleporte', 'efeito'=>'Movimento', 'acao'=>'Movimento', 'alcance'=>'Pessoal', 'duracao'=>'Instantânea', 'salvamento'=>'', 'custo_max'=>2, 'custo_min'=>2]);
        factory(Poder::class)->create(['nome'=>'Transferência', 'efeito'=>'Característica', 'acao'=>'Padrão', 'alcance'=>'Toque', 'duracao'=>'Instantânea', 'salvamento'=>'fortitude', 'custo_max'=>10, 'custo_min'=>2]);
        factory(Poder::class)->create(['nome'=>'Transformação', 'efeito'=>'Alteração', 'acao'=>'Padrão', 'alcance'=>'À Distância', 'duracao'=>'Sustentada (D)', 'salvamento'=>'Fortitude', 'custo_max'=>6, 'custo_min'=>3]);
        factory(Poder::class)->create(['nome'=>'Troca Mental', 'efeito'=>'Mental', 'acao'=>'Padrão', 'alcance'=>'Percepção', 'duracao'=>'Sustentada (D)', 'salvamento'=>'Vontade', 'custo_max'=>2, 'custo_min'=>2]);
        
        factory(Poder::class)->create(['nome'=>'Velocidade', 'efeito'=>'Movimento', 'acao'=>'Movimento', 'alcance'=>'Pessoal', 'duracao'=>'Sustentada', 'salvamento'=>'', 'custo_max'=>1, 'custo_min'=>1]);
        factory(Poder::class)->create(['nome'=>'Viagem Espacial', 'efeito'=>'Movimento', 'acao'=>'Movimento', 'alcance'=>'Pessoal', 'duracao'=>'Sustentada', 'salvamento'=>'', 'custo_max'=>1, 'custo_min'=>1]);
        factory(Poder::class)->create(['nome'=>'Voo', 'efeito'=>'Movimento', 'acao'=>'Movimento', 'alcance'=>'Pessoal', 'duracao'=>'Sustentada', 'salvamento'=>'', 'custo_max'=>2, 'custo_min'=>2]);

        //factory(Poder::class)->create(['nome'=>'', 'efeito'=>'', 'acao'=>'', 'alcance'=>'', 'duracao'=>'', 'salvamento'=>'', 'custo_max'=>, 'custo_min'=>]);


    }
}
