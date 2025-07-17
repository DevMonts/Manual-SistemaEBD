<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Permissões</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50 text-gray-800">
    <main class="max-w-4xl mx-auto p-6">
        <div class="bg-white shadow-md rounded-2xl p-8">
            <h1 class="text-3xl font-bold text-orange-600 mb-4">Tipos de Usuários e Permissões no Sistema EBD</h1>
            <p class="mb-4">
                O Sistema EBD permite diferentes níveis de acesso conforme o papel de cada pessoa na Escola Bíblica Dominical. Isso garante organização, segurança e facilidade no uso do sistema.
            </p>
            <hr class="my-6" />
            <h2 class="text-2xl font-semibold text-orange-500 mb-3">Perfis e Permissões</h2>
            <ul class="space-y-6 mb-6">
                <li>
                    <strong>Administrador (Superintendente)</strong>
                    <ul class="list-disc list-inside ml-4 mt-2">
                        <li>Acesso total ao sistema</li>
                        <li>Permissões exclusivas:
                            <ul class="list-disc list-inside ml-4">
                                <li>Cadastro de Setores/Departamentos</li>
                                <li>Cadastro e acesso às Filiais</li>
                                <li>Cadastro de novos administradores e coordenadores</li>
                                <li>Desbloqueio e exclusão de aulas</li>
                            </ul>
                        </li>
                        <li><strong>Função:</strong> Coordena toda a escola, com controle completo sobre todas as funcionalidades.</li>
                    </ul>
                </li>
                <li>
                    <strong>Coordenador</strong>
                    <ul class="list-disc list-inside ml-4 mt-2">
                        <li>Permissões amplas, exceto:
                            <ul class="list-disc list-inside ml-4">
                                <li>Não pode cadastrar ou acessar filiais</li>
                                <li>Não pode desbloquear ou excluir aulas</li>
                            </ul>
                        </li>
                        <li><strong>Função:</strong> Atua no gerenciamento da escola, apoio ao superintendente, com acesso à maioria dos recursos.</li>
                    </ul>
                </li>
                <li>
                    <strong>Secretário Geral</strong>
                    <ul class="list-disc list-inside ml-4 mt-2">
                        <li>Acesso a quase todas as funções do sistema, exceto:
                            <ul class="list-disc list-inside ml-4">
                                <li>Cadastro de usuários com nível superior (como coordenadores ou administradores)</li>
                                <li>Cadastro de setores e filiais</li>
                                <li>Edição ou exclusão de aulas</li>
                                <li>Acesso ao módulo financeiro</li>
                            </ul>
                        </li>
                        <li><strong>Função:</strong> Auxilia na administração da escola, mantendo os dados atualizados.</li>
                    </ul>
                </li>
                <li>
                    <strong>Professor(a) com Cadastro</strong>
                    <ul class="list-disc list-inside ml-4 mt-2">
                        <li>Acesso somente à sua turma</li>
                        <li>Pode:
                            <ul class="list-disc list-inside ml-4">
                                <li>Visualizar e editar dados dos alunos da turma</li>
                                <li>Visualizar relatórios da turma</li>
                                <li>Cadastrar novos alunos</li>
                            </ul>
                        </li>
                        <li><strong>Função:</strong> Ensino e acompanhamento dos alunos da sua própria turma.</li>
                    </ul>
                </li>
                <li>
                    <strong>Professor(a) sem Cadastro como Aluno</strong>
                    <ul class="list-disc list-inside ml-4 mt-2">
                        <li>Acesso somente à sua turma</li>
                        <li>Pode:
                            <ul class="list-disc list-inside ml-4">
                                <li>Visualizar os alunos e os relatórios da turma</li>
                            </ul>
                        </li>
                        <li>Não pode cadastrar ou editar alunos</li>
                        <li><strong>Função:</strong> Leciona e acompanha os dados da turma, com acesso limitado.</li>
                    </ul>
                </li>
                <li>
                    <strong>Secretário de Turma com Cadastro</strong>
                    <ul class="list-disc list-inside ml-4 mt-2">
                        <li>É um aluno da turma que recebe permissão de secretário</li>
                        <li>Pode:
                            <ul class="list-disc list-inside ml-4">
                                <li>Visualizar e editar os dados da turma</li>
                                <li>Cadastrar novos alunos</li>
                                <li>Acessar relatórios</li>
                            </ul>
                        </li>
                        <li><strong>Função:</strong> Auxilia na organização e atualização das informações da própria turma.</li>
                        <li class="text-red-600"><strong>Importante:</strong> O secretário de turma deve sempre ser associado ao aluno e nunca a outras funções.</li>
                    </ul>
                </li>
                <li>
                    <strong>Secretário de Turma sem Cadastro</strong>
                    <ul class="list-disc list-inside ml-4 mt-2">
                        <li>Também é um aluno da turma com acesso limitado</li>
                        <li>Pode:
                            <ul class="list-disc list-inside ml-4">
                                <li>Apenas visualizar os dados e relatórios da sua turma</li>
                            </ul>
                        </li>
                        <li>Não pode cadastrar ou editar alunos</li>
                        <li><strong>Função:</strong> Apoio básico na gestão da turma.</li>
                    </ul>
                </li>
            </ul>
            <hr class="my-6" />
            <h2 class="text-2xl font-semibold text-orange-500 mb-3">Importante</h2>
            <p class="mb-4">
                <strong>Múltiplas Permissões:</strong> Um mesmo usuário pode ter múltiplas permissões, conforme sua função. <br />
                <strong>Exemplo:</strong> um professor também pode ser secretário geral. <br />
                <strong>Atenção:</strong> a permissão de maior nível sempre prevalecerá sobre as demais.
            </p>
            <hr class="my-6" />
            <p class="mb-4">
                Este documento visa garantir que todos os envolvidos na gestão da Escola Bíblica Dominical compreendam claramente os acessos e responsabilidades dentro do Sistema EBD, promovendo um ambiente mais seguro, organizado e eficiente.
            </p>
        </div>
    </main>
</body>

</html>