<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Manual do Usuário - Sistema EBD</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body class="bg-gray-100 text-gray-900">
  <header class="bg-orange-500 py-4 px-4 flex justify-between items-center sticky top-0 z-50 shadow">
    <img src="https://sistemaebd.com.br/wp-content/uploads/2023/01/Sistema-EBD-BR-EXT.png" alt="SistemaEBD" class="h-8">
    <button id="toggleMenu" class="md:hidden text-white text-2xl">
      <i class="material-icons">menu</i>
    </button>
  </header>
  <div class="flex h-[calc(100vh-64px)] overflow-hidden">
    <aside id="sidebar"
      class="bg-white border-r shadow-lg w-64 p-4 space-y-2 text-sm font-semibold text-gray-700
             md:block hidden absolute md:relative z-50 md:z-auto top-16 md:top-0 left-0 h-full md:h-auto rounded-tr-xl md:rounded-none">
      <nav class="space-y-1">
        <a href="pages/intro.php" target="conteudo"
          class="flex items-center gap-2 px-3 py-2 rounded-md hover:bg-gray-100 hover:text-orange-500 transition-all">
          <i class="material-icons text-base">menu_book</i> Introdução
        </a>
        <a href="pages/intro.php" target="conteudo"
          class="flex items-center gap-2 px-3 py-2 rounded-md hover:bg-gray-100 hover:text-orange-500 transition-all">
          <i class="material-icons text-base">view_sidebar</i> Barra de Navegação
        </a>
        <a href="pages/intro.php" target="conteudo"
          class="flex items-center gap-2 px-3 py-2 rounded-md hover:bg-gray-100 hover:text-orange-500 transition-all">
          <i class="material-icons text-base">group</i> Cadastros
        </a>
        <a href="pages/intro.php" target="conteudo"
          class="flex items-center gap-2 px-3 py-2 rounded-md hover:bg-gray-100 hover:text-orange-500 transition-all">
          <i class="material-icons text-base">assessment</i> Relatórios
        </a>
        <a href="pages/intro.php" target="conteudo"
          class="flex items-center gap-2 px-3 py-2 rounded-md hover:bg-gray-100 hover:text-orange-500 transition-all">
          <i class="material-icons text-base">settings</i> Configurações
        </a>
      </nav>
    </aside>
    <section class="flex-1 overflow-hidden">
      <iframe name="conteudo" src="pages/index.php" class="w-full h-full min-h-full border-0"></iframe>
    </section>
  </div>
  <script>
    document.getElementById('toggleMenu').addEventListener('click', () => {
      const sidebar = document.getElementById('sidebar');
      sidebar.classList.toggle('hidden');
    });
  </script>
</body>

</html>