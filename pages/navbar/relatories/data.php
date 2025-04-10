<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50 text-gray-800">
    <div class="max-w-6xl mx-auto px-4 py-8 space-y-12">
        <section class="bg-white p-6 md:p-8 rounded-2xl shadow">
            <h2 class="text-2xl font-bold text-orange-600 mb-2">Dados da Escola</h2>
            <div class="h-1 w-16 bg-orange-400 mb-6 rounded"></div>
            <p class="text-gray-700 text-justify text-base md:text-lg leading-relaxed">
                A tela de <strong>Dados da Escola</strong> oferece uma visão geral completa da situação atual da EBD. Através de dados quantitativos e gráficos, o líder pode acompanhar de forma rápida e visual o andamento da frequência, matrícula, visitantes e oferta. A interface permite filtrar os dados por trimestre ou ver os dados da última aula registrada.
            </p>
        </section>
        <section class="bg-white p-6 md:p-8 rounded-2xl shadow">
            <h3 class="text-xl font-semibold text-orange-600 mb-4">Indicadores Resumidos</h3>
            <ul class="list-disc ml-6 space-y-2 text-gray-700 leading-relaxed">
                <li><strong>Total de Presentes:</strong> quantidade de alunos presentes na data selecionada.</li>
                <li><strong>Matriculados:</strong> total atual de alunos registrados no sistema.</li>
                <li><strong>Presentes/Ausentes:</strong> indicador que mostra quantos alunos estavam ausentes.</li>
                <li><strong>Visitantes:</strong> total de visitantes registrados na aula.</li>
                <li><strong>Média de Presença:</strong> percentual de comparecimento médio.</li>
                <li><strong>Oferta:</strong> valor arrecadado durante a aula (se informado).</li>
            </ul>
        </section>
        <section class="bg-white p-6 md:p-8 rounded-2xl shadow space-y-6">
            <h3 class="text-xl font-semibold text-orange-600 mb-4">Gráficos de Distribuição</h3>
            <p class="text-gray-700">
                Os gráficos oferecem um panorama estatístico com base nos alunos cadastrados:
            </p>
            <ul class="list-disc ml-6 space-y-2 text-gray-700">
                <li><strong>Presença x Ausentes x Visitantes:</strong> por turma.</li>
                <li><strong>Distribuição por Sexo:</strong> masculino, feminino e não informado.</li>
                <li><strong>Estado Civil:</strong> solteiro(a), casado(a), divorciado(a), viúvo(a), união estável, não informado.</li>
                <li><strong>Escolaridade:</strong> Ensino Fundamental, Médio, Superior, Não Informado, etc.</li>
            </ul>
        </section>
        <section class="bg-white p-6 md:p-8 rounded-2xl shadow">
            <div class="flex justify-center">
                <img src="assets/Dashboard.png" alt="Dashboard" class="rounded-xl shadow-md border">
            </div>
        </section>
    </div>
</body>

</html>