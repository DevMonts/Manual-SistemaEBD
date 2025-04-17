<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Dados</title>
</head>

<body class="bg-gray-50 text-gray-800">
    <div class="max-w-6xl mx-auto px-4 py-8 space-y-10">
        <section class="bg-white p-6 md:p-8 rounded-2xl shadow">
            <h2 class="text-2xl font-bold text-orange-600 mb-2">Tela de Dados</h2>
            <div class="h-1 w-16 bg-orange-400 mb-6 rounded"></div>
            <p class="text-gray-700 text-base md:text-lg leading-relaxed text-justify">
                A tela de <strong>Dados da Escola</strong> oferece uma visão ampla e gráfica do desempenho da Escola Bíblica Dominical. Através de indicadores e gráficos, líderes podem acompanhar informações essenciais como frequência, visitas, ofertas e perfil dos alunos.
            </p>
        </section>
        <section class="bg-white p-6 md:p-8 rounded-2xl shadow">
            <h3 class="text-xl font-semibold text-orange-600 mb-4">Filtros por Trimestre</h3>
            <p class="text-gray-700 leading-relaxed">
                O topo da tela apresenta botões de filtro para visualizar os dados por trimestre ou referente à última aula registrada. Basta selecionar a aba desejada, como "1º trimestre", "2º trimestre", etc.
            </p>
        </section>
        <section class="bg-white p-6 md:p-8 rounded-2xl shadow">
            <h3 class="text-xl font-semibold text-orange-600 mb-4">Indicadores Visuais</h3>
            <ul class="list-disc ml-6 text-gray-700 space-y-2">
                <li><strong>Total de Presentes:</strong> quantidade total de presenças registradas no período</li>
                <li><strong>Matriculados:</strong> número atual de alunos cadastrados nas turmas</li>
                <li><strong>Visitantes:</strong> pessoas que participaram das aulas, mas não estão cadastradas</li>
                <li><strong>Alunos Presentes/Ausentes:</strong> comparação entre quem esteve presente ou faltou</li>
                <li><strong>Média de Presença:</strong> percentual médio de frequência por aula</li>
                <li><strong>Oferta:</strong> total arrecadado com as ofertas no período</li>
            </ul>
        </section>
        <section class="bg-white p-6 md:p-8 rounded-2xl shadow">
            <h3 class="text-xl font-semibold text-orange-600 mb-4">Gráficos e Distribuições</h3>
            <p class="text-gray-700 mb-2">Abaixo dos indicadores estão gráficos que auxiliam na análise de dados da escola:</p>
            <ul class="list-disc ml-6 text-gray-700 space-y-2">
                <li><strong>Gráfico de barras (Presença × Ausência × Visitantes):</strong> por turma</li>
                <li><strong>Gráfico de sexo:</strong> exibe a distribuição entre alunos do sexo masculino, feminino ou não informados</li>
                <li><strong>Gráfico de estado civil:</strong> solteiros, casados, viúvos, etc.</li>
                <li><strong>Gráfico de escolaridade:</strong> do não alfabetizado até o ensino superior</li>
            </ul>
        </section>
        <section class="bg-white p-6 md:p-8 rounded-2xl shadow">
            <h3 class="text-xl font-semibold text-orange-600 mb-4">Como usar essas informações</h3>
            <p class="text-gray-700 leading-relaxed">
                Esses dados ajudam líderes a identificar:
            </p>
            <ul class="list-disc ml-6 mt-2 text-gray-700 space-y-2">
                <li>Turmas com baixa frequência ou alto número de ausentes</li>
                <li>Períodos com baixa arrecadação de oferta</li>
                <li>Perfil demográfico da EBD (sexo, idade, escolaridade, estado civil)</li>
            </ul>
        </section>
        <section class="bg-white p-6 md:p-8 rounded-2xl shadow">
            <h3 class="text-xl font-semibold text-orange-600 mb-4">Exemplo da Tela no Aplicativo</h3>
            <div class="flex justify-center">
                <img src="/pages/assets/Dashboard.png" class="rounded-xl shadow-lg w-full">
            </div>
        </section>
    </div>
</body>

</html>