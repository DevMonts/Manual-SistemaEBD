<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Usuários</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50 text-gray-800">
    <main class="max-w-4xl mx-auto p-6">
        <div class="bg-white shadow-md rounded-2xl p-8">
            <h1 class="text-3xl font-bold text-orange-600 mb-4">Cadastro de Usuários</h1>
            <p class="mb-4">
                O cadastro de usuários permite controlar quem pode acessar o sistema e qual o nível de permissão de cada pessoa.
                Professores, secretários, coordenadores e outros responsáveis podem ter perfis personalizados conforme suas funções.
            </p>
            <p class="mb-6">
                A gestão correta dos usuários garante segurança, organização e facilita o controle de acessos por turma, setor ou congregação.
            </p>
            <hr class="my-6" />
            <h2 class="text-2xl font-semibold text-orange-500 mb-3">Funcionalidades disponíveis</h2>
            <ul class="list-disc list-inside space-y-2 mb-6">
                <li><strong>Adicionar novo usuário:</strong> nome completo, e-mail, telefone, cargo e permissão</li>
                <li><strong>Vincular a turmas:</strong> o usuário pode ser associado a uma ou mais turmas</li>
                <li><strong>Definir nível de acesso:</strong> permissões diferenciadas para cada perfil (professor sem ou com cadastro de aluno, secretário de turma, secretário geral, coordenador e administrador). <a href="pages/permissions.php" target="_blank" class="text-orange-600 hover:underline">
                        Clique aqui para mais detalhes sobre os níveis de permissão de usuário.
                    </a>
                </li>
            </ul>
            <hr class="my-6" />
            <h2 class="text-2xl font-semibold text-orange-500 mb-3">Exemplo visual</h2>
            <div class="text-center mb-6 ">
                <img src="/manual/pages/assets/Users.png" class="mx-auto max-w-xs rounded-lg shadow-md m-10" />
                <img src="/manual/pages/assets/User_Show.png" class="mx-auto max-w-xs rounded-lg shadow-md m-10" />
                <img src="/manual/pages/assets/User_Edit.png" class="mx-auto max-w-xs rounded-lg shadow-md m-10" />
                <p class="text-sm text-gray-600 mt-2">Exemplo da telas de lista, visualização e edição de usuários.</p>
            </div>
            <hr class="my-6" />
            <h2 class="text-2xl font-semibold text-orange-500 mb-3">Demonstração em vídeo</h2>
            <div class="aspect-video w-full rounded-xl overflow-hidden shadow-lg mb-6">
                <iframe class="w-full h-full" src="https://www.youtube.com/embed/D1sg-5a4jag"
                    title="Cadastro de Professores, Secretários e Líderes"
                    frameborder="0" allowfullscreen></iframe>
            </div>
            <p class="mb-2">Acesse também a playlist completa com todos os vídeos:</p>
            <a href="https://bit.ly/sistemaebd" target="_blank" class="text-orange-600 hover:underline">
                https://bit.ly/sistemaebd
            </a>
        </div>
    </main>
</body>

</html>