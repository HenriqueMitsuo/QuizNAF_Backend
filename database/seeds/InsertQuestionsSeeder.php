<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InsertQuestionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //! GERAL
        DB::insert(
            "INSERT INTO questions(title, trueAlternative, falseAlternative1, falseAlternative2, quiz_id)
            VALUES
            ('O que é CPF e qual sua importância?', 'Cadastro  de pessoas físicas, registro que armazena informações cadastrais de todos os cidadãos inscritos e é gerenciado pela receita federal.', 'Cadastro de pessoas nacionais, armazena informações apenas de brasileiros', 'Documento de Identidade, que garante os direitos ao cidadão.', 1),
            ('Qual a importancia do CNPJ para o consumidor?', 'Adquirir produtos e serviços de empresas devidamente formalizadas ajuda a garantir seus direitos de consumidor.', 'Identificar a veracidade do seu negócio.', '', 1),
            ('O que é CNPJ e qual a sua importancia?', 'Cadastro nacional de pessoa jurídica, obrigatório para o exercício das atividades da empresa.', 'Cadastro nacional de pessoas jovens, obrigatório para toda pessoa maior de 18 anos', '', 1),
            ('Como e feita a divisão administrativa da Receita Federal?', 'Em dez regiões fiscais, exemplo: O estado de São Paulo corresponde à 8ª região fiscal. Algumas regiões são compostas por mais de um estado.', 'Em Vinte e uma regiões fiscais, exemplo: O estado de São Paulo corresponde à 8ª região fiscal. Uma para cada estado.', '', 1),
            ('Crianças podem ter CPF?', 'Sim. De qualquer idade, inclusive recem-nascidos.', 'Não. Apenas maiores de 18 anos.', 'Sim, desde que já tenha documento de indentidade.', 1),
            ('Quais as principais funções da Receita Federal do Brasil?', 'A administração dos tributos federais, inclusive os previdenciarios e os incidentes sobre o comércio exterior.', 'A administração de impostos e onde investir tal arrecadação.', '', 1),
            ('A qual órgão a receita federal é subordinada?', 'Ministério da Economia.', 'Ministério da Educação.', 'Ministério da Agricultura.', 1),
            ('O que é CND?', 'Certidão Negativa de Débitos, documento que certifica não constarem pendências (por isso o termo negativa) em nome da pessoa física ou jurídica.', 'Cadastro Nacional de Deficientes, documento que garante a qualquer portador de deficiencia física seus direitos.', '', 1),
            ('O que é MEI?', 'Microempreendedor individual, um pequeno empresário que se formaliza, tendo um CNPJ.', 'Micro Empresa Independente, uma empresa de pequeno porte.', '', 1),
            ('A refeita federal é um órgão do poder legislativo, executivo ou judiciario?', 'Poder executivo.', 'Poder legislativo.', 'Poder judiciario.', 1)"
        );

        //! ADUANA
        DB::insert(
            "INSERT INTO questions(title, trueAlternative, falseAlternative1, falseAlternative2, quiz_id)
            VALUES
            ('O que é contrabando?', 'Importar ou exportar mercadorias proíbidas no País.', 'Vender mercadorias proíbidas.', '', 2),
            ('O que é descaminho?', 'Importar, exportar ou consumir mercadorias permitidas no País, mas sem o pagamento dos impostos.', 'Entregar mercadorias em endereço errado.', '', 2),
            ('O que é contrafação?', 'Qualquer reprodução ou uso não autorizado de marcas registradas, conhecido como pirataria.', 'Venda ilegal de produtos', '', 2),
            ('Onde se dá a principal atuação da Aduana?', 'Sua principal atuação é nas fronteiras do país, sendo elas terrestres, aéreas ou portuárias, chamadas de zonas primárias.', 'Sua principal atuação é nas fronteiras estaduais do país, sendo elas terrestres, aéreas ou portuárias, chamadas de zonas primárias.', '', 2),
            ('O que faz a Aduana?', 'Controla e fiscaliza o fluxo internacional de bens, mercadorias e veículos. No Brasil, é a Receita feretal que excerce a Administração Aduaneira.', 'Controla e fiscaliza o fluxo de mercadorias importadas no país.', '', 2),
            ('Quais são as principais consequências da pirataria?', 'Pode causar danos à saúdem prejudicar o mercado de trabalho formal e interferir no crescimento e na valorização do produto original.', 'Prejudicar empresas que fazem os produtos originais, apenas.', '', 2),
            ('Pirataria é crime?', 'Sim, podendo estar relacionada a outros crimes como sonegação de impostos, lavagem de dinheiro, corrupção, dentre outros.', 'Não, pois o produto ainda será o mesmo, apenas com algumas mudanças.', '', 2),
            ('Qual o destino das mercadorias apreendidas?', 'Podem ter quatro destinos, sendo: leilão, doação, incorporação e, no caso das mercadorias impróprias, destruição.', 'São destruidas.', '', 2),
            ('Qual é a cota de isenção de impostos na bagagem em viagens terrestres?', 'US$300, caso os itens estejam dentro do conceito de bagagem.', 'US$500, caso os itens estejam dentro do conceito de bagagem.', '', 2),
            ('Qual é a cota de isenção de impostos na bagagem em viagens aéreas?', 'US$500, caso os itens estejam dentro do conceito de bagagem.', 'US$300, caso os itens estejam dentro do conceito de bagagem.', '', 2)"
        );

        //! TRIBUTOS
        DB::insert(
            "INSERT INTO questions(title, trueAlternative, falseAlternative1, falseAlternative2, quiz_id)
            VALUES
            ('Qual a diferença entre tributo e imposto?', 'Tributo é gênero, imposto é espécie, ou seja, imposto é um tipo de tributo. Outros exemplos de tributo são: taxas e contruições.', 'Tributo é uma doação, imposto é obrigatório pagar.', '', 3),
            ('O que é sonegação?', 'Omitir ou fazer declaração incorreta com intenção de deixar de pagar os tribudos devidos, sendo essa conduta um crime.', 'Deixar de pagar impostos.', '', 3),
            ('Qual é a função da nota fiscal?', 'Garantir que a venda do produto será declarada, evitando a sonegação, além de garantir os direitos do consumidor.', 'Comprovar que o consumidor comprou o produto, apenas.', '', 3),
            ('Quem pode destinar parte de seu imposto para os fundos do Direito da Cirança e do Adolescente?', 'Cidadãos e empresas. Por exemplo, cada pessoa pode doar até 6% do seu imposto de Renda devido no ano.', 'Governo. Com a arrecadação do imposto, parte do dinheiro é investido.', '', 3),
            ('O que é a malha fiscal?', 'É quando uma declaração apresenta pendências, por informações incorretas, omissão de dados ou necessidade de apresentação de documentos.', 'Quando tudo está correto em uma declaração.', '', 3),
            ('O que é orçamento público?', 'É um compromisso, por meio de lei, entre governo e sociedade, com a previsão de receitas e despesas públicas.', 'Todo o dinheiro arrecadado por meio de impostos na sociedade.', '', 3),
            ('O que é restituição?', 'É o valor que o contribuinte recebe quando, na entrega da declaração, é constatado que pagou mais do que deveria no período declarado.', 'Multa que o contribuinte recebe quando erra em sua declaração.', '', 3),
            ('O que é renuncia fiscal?', 'Quando o poder público deixa de arrecadar tributos através de isenções de diminuição de alíquotas (percentual), dentre outros.', 'Quando o poder público começa a arrecadar tributos através de isenções de diminuição de alíquotas (percentual), dentre outros.', '', 3),
            ('O que é carga tributária?', 'É a relação entre a soma da arrecadação total e o Produto Interno Bruto, e visa analisar o fluxo de recursos financeiros da sociedade para o Estado.', 'Relação entre o PIB e a população, visando analisar as emergências a serem investidas.', '', 3),
            ('Qual é a função dos tributos?', 'Realização de políticas sociais de saúde, educação, segurança, seguridade social e investimentos em infraestrutura.', 'Realizar a quitação de dividas do governo, diminuindo a inflação.', '', 3)"
        );
    }
}
