<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Barra de Navegação</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
        }
    </style>
</head>

<body class="bg-gray-50 text-gray-800">
    <div class="max-w-6xl mx-auto px-4 py-8 space-y-12">

        <section class="bg-white p-6 md:p-8 rounded-2xl shadow transition hover:shadow-lg">
            <h2 class="text-2xl font-bold text-orange-600 mb-2">Barra de Navegação</h2>
            <div class="h-1 w-16 bg-orange-400 mb-4 rounded"></div>
            <p class="text-gray-700 leading-relaxed text-base md:text-lg">
                A barra de navegação é o principal meio de acesso rápido às funcionalidades do aplicativo Sistema EBD. Localizada na parte inferior da tela em dispositivos móveis, ela é composta por ícones intuitivos que facilitam o uso do sistema no dia a dia.
            </p>
        </section>
        <section class="bg-white p-6 md:p-8 rounded-2xl shadow transition hover:shadow-lg">
            <h2 class="text-xl font-bold text-orange-600 mb-4">Composição da Barra</h2>
            <div class="flex flex-col md:flex-row items-center md:items-start gap-6">
                <img src="/pages/assets/Navbar.png" class="max-w-[240px] md:max-w-[280px] w-full rounded-xl shadow-md">
                <ul class="text-gray-700 text-base md:text-lg leading-relaxed list-disc pl-4">
                    <li><a href="navbar/menu.php" class="hover:text-orange-500 transition"><strong>Menu:</strong> acessa o menu lateral do sistema (em alguns dispositivos)</a></li>
                    <li><a href="navbar/start.php" class="hover:text-orange-500 transition"><strong>Início:</strong> exibe o painel inicial com os recursos principais</a></li>
                    <li><a href="navbar/classes.php" class="hover:text-orange-500 transition"><strong>Turmas:</strong> acessa a listagem de turmas cadastradas</a></li>
                    <li><a href="registers.php" class="hover:text-orange-500 transition"><strong>Cadastros:</strong> acessa o gerenciamento de usuários, departamentos, etc.</a></li>
                    <li><a href="navbar/data.php" class="hover:text-orange-500 transition"><strong>Dados:</strong> exibe indicadores, médias, relatórios e dados estatísticos</a></li>
                </ul>
            </div>
        </section>
        <section class="bg-white p-6 md:p-8 rounded-2xl shadow transition hover:shadow-lg">
            <h2 class="text-xl font-bold text-orange-600 mb-4">Dica de Uso</h2>
            <p class="text-gray-700 leading-relaxed text-base md:text-lg">
                Todas as opções da barra de navegação estão sempre acessíveis durante o uso do sistema. Em caso de atualizações ou mudanças no layout, o comportamento dos botões permanece semelhante para manter a experiência consistente.
            </p>
        </section>
    </div>
</body>

</html>