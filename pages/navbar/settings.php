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
            <h2 class="text-2xl font-bold text-orange-600 mb-2">Configurações da Escola</h2>
            <div class="h-1 w-16 bg-orange-400 mb-6 rounded"></div>
            <p class="text-gray-700 text-base md:text-lg leading-relaxed text-justify mb-4">
                Nesta seção o administrador pode editar as principais informações da escola cadastrada, garantindo que os dados estejam sempre atualizados.
            </p>
            <div class="grid md:grid-cols-2 gap-6">
                <div class="space-y-4">
                    <div>
                        <label class="text-sm font-semibold text-gray-700">Nome da escola:</label>
                        <div class="text-gray-900">Nome da Igreja</div>
                    </div>
                    <div>
                        <label class="text-sm font-semibold text-gray-700">CNPJ:</label>
                        <div class="text-gray-900">00.000.000/0000-00</div>
                    </div>
                    <div>
                        <label class="text-sm font-semibold text-gray-700">WhatsApp:</label>
                        <div class="text-gray-900">+55 (00) 00000-0000</div>
                    </div>
                    <div>
                        <label class="text-sm font-semibold text-gray-700">Cidade:</label>
                        <div class="text-gray-900">Cidade Exemplo</div>
                    </div>
                    <div>
                        <label class="text-sm font-semibold text-gray-700">Estado (UF):</label>
                        <div class="text-gray-900">UF</div>
                    </div>
                </div>
                <div class="space-y-4">
                    <div>
                        <label class="text-sm font-semibold text-gray-700">E-mail do administrador:</label>
                        <div class="text-gray-900">email@exemplo.com</div>
                    </div>
                    <div>
                        <label class="text-sm font-semibold text-gray-700">Nome do administrador:</label>
                        <div class="text-gray-900">Administrador Responsável</div>
                    </div>
                    <div class="text-sm text-gray-600">
                        Também é possível alterar o logotipo da escola clicando sobre o ícone da imagem exibido na parte superior da tela.
                    </div>
                    <div class="text-sm text-red-500 font-semibold">
                        ⚠️ Atenção: a opção "Excluir Igreja" remove permanentemente os dados da escola.
                    </div>
                </div>
            </div>
        </section>
        <section class="bg-white p-6 md:p-8 rounded-2xl shadow">
            <h3 class="text-xl font-semibold text-orange-600 mb-4">Pontuação das Aulas</h3>
            <p class="text-gray-700 leading-relaxed">
                Os pontos podem ser distribuídos entre os seguintes critérios:
            </p>
            <ul class="list-disc ml-6 mt-3 text-gray-700 space-y-2">
                <li>Presença</li>
                <li>Revista</li>
                <li>Bíblia</li>
                <li>Visitantes</li>
                <li>Atividades</li>
            </ul>
            <p class="text-sm text-gray-500 mt-2">⚠️ A pontuação é editável</p>
        </section>
    </div>
</body>

</html>