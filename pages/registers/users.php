<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Usuários</title>
</head>

<body class="bg-gray-50 text-gray-800">
    <div class="max-w-6xl mx-auto px-4 py-8 space-y-10">
        <section class="bg-white p-6 md:p-8 rounded-2xl shadow">
            <h2 class="text-2xl font-bold text-orange-600 mb-2">Cadastro de Usuários</h2>
            <div class="h-1 w-16 bg-orange-400 mb-6 rounded"></div>
            <p class="text-gray-700 text-base md:text-lg leading-relaxed text-justify">
                O <strong>Cadastro de Usuários</strong> é o recurso utilizado para controlar quem tem acesso ao sistema e qual tipo de permissão cada pessoa possui. O administrador pode criar, editar ou desativar perfis de professores, alunos, secretários e outros responsáveis.
            </p>
        </section>
        <section class="bg-white p-6 md:p-8 rounded-2xl shadow space-y-4">
            <h3 class="text-xl font-semibold text-orange-600">Informações cadastradas</h3>
            <ul class="list-disc ml-6 text-gray-700 space-y-2">
                <li><strong>Nome completo</strong></li>
                <li><strong>Tipo de usuário:</strong> define os acessos (Aluno, Professor, Coordenador, Administrador etc.)</li>
            </ul>
        </section>
        <section class="bg-white p-6 md:p-8 rounded-2xl shadow">
            <h3 class="text-xl font-semibold text-orange-600 mb-4">Tipos de Usuário Disponíveis</h3>
            <ul class="list-disc ml-6 text-gray-700 space-y-2">
                <li><strong>Aluno(a):</strong> visualiza somente seus dados</li>
                <li><strong>Professor com cadastro de aluno:</strong> participa da aula e é avaliado</li>
                <li><strong>Professor sem cadastro de aluno:</strong> apenas ministra aulas</li>
                <li><strong>Secretário(a) de turma:</strong> lança dados da própria turma</li>
                <li><strong>Secretário(a):</strong> pode lançar em todas as turmas</li>
                <li><strong>Coordenador(a):</strong> visualiza todos os dados, sem editar configurações</li>
                <li><strong>Administrador(a):</strong> acesso total ao sistema</li>
            </ul>
        </section>
        <section class="bg-white p-6 md:p-8 rounded-2xl shadow">
            <h3 class="text-xl font-semibold text-orange-600 mb-4">Boas práticas</h3>
            <ul class="list-disc ml-6 text-gray-700 space-y-2">
                <li>Atualize o tipo de usuário conforme a função da pessoa na EBD</li>
                <li>Desative perfis antigos para manter o sistema limpo e seguro</li>
            </ul>
        </section>
        <section class="bg-white p-6 md:p-8 rounded-2xl shadow">
            <div class="aspect-video w-full max-w-4xl mx-auto rounded-xl overflow-hidden shadow-lg">
                <iframe class="w-full h-full" src="https://youtu.be/D1sg-5a4jag"
                    title="Sistema EBD | Aula 06 - Cadastro de Usuários (Superintendente, Coordenador, Secretários da EBD)" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen>
                </iframe>
            </div>
        </section>
    </div>
</body>

</html>