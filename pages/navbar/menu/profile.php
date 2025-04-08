<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
        }
    </style>
</head>

<body class="bg-gray-50 text-gray-800">
    <div class="max-w-6xl mx-auto px-4 py-8 space-y-12">
        <section class="bg-white p-6 md:p-8 rounded-2xl shadow transition hover:shadow-lg">
            <h2 class="text-2xl font-bold text-orange-600 mb-2">Editar Usuário</h2>
            <div class="h-1 w-16 bg-orange-400 mb-4 rounded"></div>
            <p class="text-gray-700 leading-relaxed text-base md:text-lg">
                A tela de edição de usuário permite que administradores e gestores atualizem as informações de cadastro de um membro da igreja. É uma interface essencial para manter os dados atualizados e adequados ao funcionamento do sistema.
            </p>
        </section>
        <section class="bg-white p-6 md:p-8 rounded-2xl shadow transition hover:shadow-lg">
            <h2 class="text-xl font-bold text-orange-600 mb-4">Campos disponíveis</h2>
            <ul class="text-gray-700 text-base md:text-lg leading-relaxed list-disc pl-5">
                <li><strong>Tipo de usuário:</strong> define o perfil de permissão do usuário (ex: Administrador, Professor, etc.)</li>
                <li><strong>Nome completo:</strong> nome da pessoa vinculada ao perfil</li>
                <li><strong>Função na igreja:</strong> cargo ou responsabilidade na EBD</li>
                <li><strong>E-mail:</strong> campo para contato e login no sistema</li>
                <li><strong>Participar da chamada de colaboradores:</strong> se marcado, inclui o usuário no controle de presença dos colaboradores</li>
            </ul>
        </section>
        <section class="bg-white p-6 md:p-8 rounded-2xl shadow transition hover:shadow-lg">
            <h2 class="text-xl font-bold text-orange-600 mb-4">Ações disponíveis</h2>
            <ul class="text-gray-700 text-base md:text-lg leading-relaxed list-disc pl-5">
                <li><strong>Alterar senha:</strong> permite redefinir a senha do usuário</li>
                <li><strong>Salvar:</strong> grava as alterações feitas no cadastro</li>
                <li><strong>Excluir:</strong> remove o usuário do sistema de forma permanente</li>
                <li><strong>Formulário completo:</strong> abre o cadastro completo do usuário com opções avançadas</li>
            </ul>
        </section>
    </div>
</body>

</html>