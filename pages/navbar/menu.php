<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Menu</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
        }
    </style>
</head>

<body class="bg-gray-50 text-gray-800">
    <div class="max-w-6xl mx-auto px-4 py-8 space-y-12">

        <section class="bg-white p-6 md:p-8 rounded-2xl shadow transition hover:shadow-lg">
            <h2 class="text-2xl font-bold text-orange-600 mb-2">Menu do Sistema</h2>
            <div class="h-1 w-16 bg-orange-400 mb-4 rounded"></div>
            <p class="text-gray-700 leading-relaxed text-base md:text-lg">
                O menu do Sistema EBD oferece acesso completo a todas as funcionalidades do aplicativo. Ele é exibido em um painel lateral ou flutuante, com ícones ilustrativos e texto descritivo. Cada opção leva o usuário a uma seção específica do sistema, facilitando a navegação mesmo para quem está utilizando o sistema pela primeira vez.
            </p>
        </section>

        <section class="bg-white p-6 md:p-8 rounded-2xl shadow transition hover:shadow-lg">
            <h2 class="text-xl font-bold text-orange-600 mb-4">Itens do Menu</h2>
            <div class="flex flex-col md:flex-row items-center md:items-start gap-6">
                <img src="/pages/assets/Menu.png" class="max-w-[260px] md:max-w-[300px] w-full rounded-xl shadow-md">
                <ul class="text-gray-700 text-base md:text-lg leading-relaxed list-disc pl-4">
                    <li><strong>Perfil:</strong></li>
                    <p>Visualiza dados da conta atual.</p>
                    <br>
                    <li><strong>Cadastros:</strong></li>
                    <p>Acesso a turmas, usuários, departamentos, setores e filiais.</p>
                    <br>
                    <li><strong>Relatório:</strong></li>
                    <p>Diversos tipos de relatórios e certificados.</p>
                    <br>
                    <li><strong>Financeiro:</strong></li>
                    <p>Entradas, saídas e saldos.</p>
                    <br>
                    <li><strong>Configurações:</strong></li>
                    <p>Dados da escola, pontuação, permissões.</p>
                    <br>
                    <li><strong>Material de apoio:</strong> </li>
                    <p>Artigos, subsídios e formações.</p>
                    <br>
                    <li><strong>Suporte:</strong></li>
                    <p>Canal direto de ajuda.</p>
                    <br>
                    <li><strong>Sair da conta:</strong></li>
                    <p>Encerramento da sessão.</p>
                </ul>
            </div>
        </section>

        <section class="bg-white p-6 md:p-8 rounded-2xl shadow transition hover:shadow-lg">
            <h2 class="text-xl font-bold text-orange-600 mb-4">Dicas de Navegação</h2>
            <p class="text-gray-700 leading-relaxed text-base md:text-lg">
                O menu se adapta ao tipo de conta do usuário (administração ou acesso comum), mostrando apenas o que for permitido. Use-o para navegar rapidamente entre os recursos do aplicativo, sem a necessidade de retornar à tela inicial.
            </p>
        </section>

    </div>
</body>

</html>