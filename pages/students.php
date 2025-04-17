<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Alunos</title>
</head>

<body class="bg-gray-50 text-gray-800">
    <div class="max-w-6xl mx-auto px-4 py-8 space-y-10">
        <section class="bg-white p-6 md:p-8 rounded-2xl shadow">
            <h2 class="text-2xl font-bold text-orange-600 mb-2">Gestão de Alunos</h2>
            <div class="h-1 w-16 bg-orange-400 mb-6 rounded"></div>
            <p class="text-gray-700 text-base md:text-lg leading-relaxed text-justify">
                O módulo de <strong>alunos</strong> no Sistema EBD permite visualizar, acompanhar e interagir com as informações de todos os participantes matriculados nas turmas da Escola Bíblica Dominical. Ele oferece uma visão completa, incluindo filtros avançados, presença, pontuação, dados pessoais e relatórios individuais, tudo de forma organizada e prática para professores e líderes.
            </p>
        </section>
        <section class="bg-white p-6 md:p-8 rounded-2xl shadow space-y-4">
            <h3 class="text-xl font-semibold text-orange-600">Funcionalidades Disponíveis</h3>
            <ul class="list-disc ml-6 text-gray-700 space-y-2">
                <li><strong>Listagem por turma:</strong> permite acompanhar todos os alunos vinculados a cada grupo de estudo.</li>
                <li><strong>Filtros personalizados:</strong> filtrar alunos por status (ativos, inativos), aniversariantes, visitantes, entre outros.</li>
                <li><strong>Busca por nome:</strong> facilita encontrar alunos em turmas grandes.</li>
                <li><strong>Perfil completo do aluno:</strong> acesso a dados como nascimento, escolaridade, estado civil, e observações importantes.</li>
                <li><strong>Histórico individual:</strong> exibe o desempenho do aluno ao longo dos trimestres, incluindo presença, pontuação e visitas.</li>
            </ul>
        </section>
        <section class="bg-white p-6 md:p-8 rounded-2xl shadow space-y-4">
            <h3 class="text-xl font-semibold text-orange-600">Presença e Participação</h3>
            <p class="text-gray-700">
                A presença dos alunos é registrada semanalmente nas aulas, sendo possível marcar a frequência de forma rápida e intuitiva. Além disso, a plataforma permite lançar visitantes e aplicar pontuações conforme os critérios definidos pela escola, como:
            </p>
            <ul class="list-disc ml-6 text-gray-700 space-y-2">
                <li><strong>Presença</strong></li>
                <li><strong>Leitura da lição</strong></li>
                <li><strong>Participação com Bíblia</strong></li>
                <li><strong>Atividades realizadas</strong></li>
            </ul>
            <p class="text-gray-700">
                Esses dados são armazenados e podem ser acessados por trimestre ou aula específica.
            </p>
            <div class="bg-orange-50 border-l-4 border-orange-400 p-4 mt-4">
                <p class="text-sm text-gray-800">
                    🔶 <strong>Como acessar a chamada:</strong> para registrar a chamada dos alunos, é necessário entrar na lição correspondente à data desejada, escolher a turma e então a tela de chamada será exibida. Essa navegação permite um controle organizado e por turma.
                </p>
            </div>
        </section>
        <section class="bg-white p-6 md:p-8 rounded-2xl shadow">
            <h3 class="text-xl font-semibold text-orange-600 mb-4">Acesso à tela de chamada</h3>
            <p class="text-gray-700 leading-relaxed text-justify mb-6">
                Para acessar a chamada dos alunos, o usuário deve seguir os seguintes passos:
                <br />
                1. Entrar na aba "Início" e clicar na lição desejada (aula da semana);
                <br />
                2. Selecionar a turma que deseja fazer a chamada;
                <br />
                3. A tela de chamada da turma será exibida com os nomes dos alunos e os ícones de pontuação.
            </p>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="rounded overflow-hidden shadow-md">
                    <p class="text-sm text-gray-600 mt-2 text-center">1. Clique na lição para iniciar a chamada</p>
                    <img src="/pages/assets/Home.png" class="w-full h-auto">
                </div>
                <div class="rounded overflow-hidden shadow-md">
                    <p class="text-sm text-gray-600 mt-2 text-center">2. Selecione a turma desejada para abrir a chamada</p>
                    <img src="/pages/assets/Class_Relatories.png" class="w-full h-auto">
                </div>
            </div>
        </section>
        <section class="bg-white p-6 md:p-8 rounded-2xl shadow space-y-4">
            <h3 class="text-xl font-semibold text-orange-600">Registro de Chamada</h3>
            <p class="text-gray-700 leading-relaxed text-justify">
                A chamada de alunos é realizada diretamente na tela da aula, com interface otimizada para turmas grandes. Professores podem marcar presença, ausência e lançar visitantes com rapidez. A pontuação semanal de cada aluno também é registrada nesse momento, influenciando diretamente nos relatórios de desempenho.
            </p>
            <ul class="list-disc ml-6 text-gray-700 space-y-2">
                <li>Chamada feita por turma, com exibição de todos os nomes</li>
                <li>Opção para marcar todos como presentes ou editar individualmente</li>
                <li>Campo para observações específicas da aula</li>
                <li>Registro de visitantes sem a necessidade de cadastro</li>
                <li>Feedback visual da chamada concluída ou pendente</li>
            </ul>
            <p class="text-sm text-gray-500">⚠️ A chamada deve ser realizada semanalmente para manter a média de presença e os relatórios corretos.</p>
        </section>
        <section class="bg-white p-6 md:p-8 rounded-2xl shadow">
            <h3 class="text-xl font-semibold text-orange-600 mb-4">Gerenciamento Seguro</h3>
            <p class="text-gray-700 leading-relaxed">
                O sistema permite editar ou excluir registros de alunos sempre que necessário, mantendo o histórico de forma segura. Professores com permissões restritas só visualizam e alteram informações da própria turma, preservando a organização e segurança dos dados.
            </p>
        </section>
        <section class="bg-white p-6 md:p-8 rounded-2xl shadow">
            <h3 class="text-xl font-semibold text-orange-600 mb-4">Dicas e Boas Práticas</h3>
            <ul class="list-disc ml-6 text-gray-700 space-y-2">
                <li>Evite duplicidade de registros com nomes parecidos.</li>
                <li>Realize atualizações de dados regularmente.</li>
                <li>Utilize filtros de aniversariantes para preparar homenagens mensais.</li>
                <li>Consulte o histórico individual antes de elaborar relatórios ou relatórios de desempenho.</li>
            </ul>
        </section>
        <section class="bg-white p-6 md:p-8 rounded-2xl shadow">
            <h3 class="text-xl font-semibold text-orange-600 mb-4">Demonstração em Vídeo</h3>
            <div class="aspect-video w-full max-w-4xl mx-auto rounded-xl overflow-hidden shadow-lg">
                <iframe class="w-full h-full" src="https://www.youtube.com/embed/cARUGyFXdfA"
                    title="Sistema EBD | Aula 04 - Como Cadastrar Alunos" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
            <p class="text-gray-700 leading-relaxed text-justify mt-4">
                Este vídeo tutorial apresenta, de forma prática, como cadastrar, gerenciar e acompanhar os alunos no Sistema EBD. Ele também mostra como acessar o perfil individual, filtrar alunos e registrar sua presença nas aulas.
            </p>
        </section>
    </div>
</body>

</html>