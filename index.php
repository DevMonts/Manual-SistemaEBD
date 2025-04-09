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
    <div id="overlay" class="fixed inset-0 z-40 bg-black bg-opacity-50 hidden transition-opacity duration-300"></div>
    <aside id="sidebar"
      class="bg-white border-r shadow-lg w-64 p-4 space-y-2 text-sm font-semibold text-gray-700 md:block hidden absolute md:relative z-50 md:z-auto top-16 md:top-0 left-0 h-full md:h-auto overflow-y-auto rounded-tr-xl md:rounded-none">
      <nav class="space-y-1">
        <a href="pages/intro.php" target="content"
          class="flex items-center gap-2 px-3 py-2 rounded-md hover:bg-gray-100 hover:text-orange-500 transition-all">
          <i class="material-icons text-base">play_arrow</i>Introdução
        </a>
        <a href="pages/navbar.php" target="content"
          class="flex items-center gap-2 px-3 py-2 rounded-md hover:bg-gray-100 hover:text-orange-500 transition-all">
          <i class="material-icons text-base">view_sidebar</i>Barra de Navegação
        </a>
        <a href="pages/navbar/menu.php" target="content"
          class="flex items-center gap-2 px-6 py-2 rounded-md hover:bg-gray-100 hover:text-orange-500 transition-all">
          <i class="material-icons text-base">menu</i>Menu
        </a>
        <a href="pages/navbar/menu/profile.php" target="content"
          class="flex items-center gap-2 px-9 py-2 rounded-md hover:bg-gray-100 hover:text-orange-500 transition-all">
          <i class="material-icons text-base">person</i>Perfil
        </a>
        <a href="pages/registers.php" target="content"
          class="flex items-center gap-2 px-9 py-2 rounded-md hover:bg-gray-100 hover:text-orange-500 transition-all">
          <i class="material-icons text-base">groups</i>Cadastros
        </a>
        <a href="pages/navbar/menu/relatories.php" target="content"
          class="flex items-center gap-2 px-9 py-2 rounded-md hover:bg-gray-100 hover:text-orange-500 transition-all">
          <i class="material-icons text-base">article</i>Relatório
        </a>
        </a>
        <a href="pages/navbar/menu/relatories/birthday.php" target="content"
          class="flex items-center gap-2 px-12 py-2 rounded-md hover:bg-gray-100 hover:text-orange-500 transition-all">
          <i class="material-icons text-base">cake</i>Aniversariantes
        </a>
        <a href="pages/navbar/menu/relatories/lesson.php" target="content"
          class="flex items-center gap-2 px-12 py-2 rounded-md hover:bg-gray-100 hover:text-orange-500 transition-all">
          <i class="material-icons text-base">school</i>Aula
        </a>
        <a href="pages/navbar/menu/relatories/out.php" target="content"
          class="flex items-center gap-2 px-12 py-2 rounded-md hover:bg-gray-100 hover:text-orange-500 transition-all">
          <i class="material-icons text-base">directions_run</i>Ausentes
        </a>
        <a href="pages/navbar/menu/relatories/churches.php" target="content"
          class="flex items-center gap-2 px-12 py-2 rounded-md hover:bg-gray-100 hover:text-orange-500 transition-all">
          <i class="material-icons text-base">church</i>Igrejas
        </a>
        <a href="pages/navbar/menu/relatories/data.php" target="content"
          class="flex items-center gap-2 px-12 py-2 rounded-md hover:bg-gray-100 hover:text-orange-500 transition-all">
          <i class="material-icons text-base">casino</i>Dados
        </a>
        <a href="pages/navbar/menu/certificates.php" target="content"
          class="flex items-center gap-2 px-9 py-2 rounded-md hover:bg-gray-100 hover:text-orange-500 transition-all">
          <i class="material-icons text-base">workspace_premium</i>Certificado
        </a>
        <a href="pages/navbar/menu/finances.php" target="content"
          class="flex items-center gap-2 px-9 py-2 rounded-md hover:bg-gray-100 hover:text-orange-500 transition-all">
          <i class="material-icons text-base">attach_money</i>Financeiro
        </a>
        <a href="pages/navbar/menu/children.php" target="content"
          class="flex items-center gap-2 px-9 py-2 rounded-md hover:bg-gray-100 hover:text-orange-500 transition-all">
          <i class="material-icons text-base">polyline</i>Filiais
        </a>
        <a href="pages/navbar/menu/settings.php" target="content"
          class="flex items-center gap-2 px-9 py-2 rounded-md hover:bg-gray-100 hover:text-orange-500 transition-all">
          <i class="material-icons text-base">settings</i>Configurações
        </a>
        <a href="pages/navbar/menu/material.php" target="content"
          class="flex items-center gap-2 px-9 py-2 rounded-md hover:bg-gray-100 hover:text-orange-500 transition-all">
          <i class="material-icons text-base">collections_bookmark</i>Material de apoio
        </a>
        <a href="pages/navbar/menu/support.php" target="content"
          class="flex items-center gap-2 px-9 py-2 rounded-md hover:bg-gray-100 hover:text-orange-500 transition-all">
          <i class="material-icons text-base">handshake</i>Suporte
        </a>
        <a href="pages/navbar/start.php" target="content"
          class="flex items-center gap-2 px-6 py-2 rounded-md hover:bg-gray-100 hover:text-orange-500 transition-all">
          <i class="material-icons text-base">cottage</i>Início
        </a>
        <a href="pages/navbar/class.php" target="content"
          class="flex items-center gap-2 px-6 py-2 rounded-md hover:bg-gray-100 hover:text-orange-500 transition-all">
          <i class="material-icons text-base">school</i>Turmas
        </a>
        <a href="pages/registers.php" target="content"
          class="flex items-center gap-2 px-6 py-2 rounded-md hover:bg-gray-100 hover:text-orange-500 transition-all">
          <i class="material-icons text-base">group</i>Cadastros
        </a>
        <a href="pages/navbar/data.php" target="content"
          class="flex items-center gap-2 px-6 py-2 rounded-md hover:bg-gray-100 hover:text-orange-500 transition-all">
          <i class="material-icons text-base">assessment</i>Dados
        </a>
      </nav>
    </aside>
    <section class="flex-1 overflow-hidden">
      <iframe name="content" src="pages/intro.php" class="w-full h-full min-h-full border-0"></iframe>
    </section>
  </div>
  <script>
    document.addEventListener('DOMContentLoaded', () => {
      const toggleButton = document.getElementById('toggleMenu');
      const sidebar = document.getElementById('sidebar');
      const overlay = document.getElementById('overlay');

      function isMobile() {
        return window.innerWidth < 768;
      }
      toggleButton.addEventListener('click', (e) => {
        e.stopPropagation();
        const menuIsHidden = sidebar.classList.contains('hidden');
        if (menuIsHidden) {
          sidebar.classList.remove('hidden');
          if (isMobile()) overlay.classList.remove('hidden');
        } else {
          sidebar.classList.add('hidden');
          overlay.classList.add('hidden');
        }
      });
      overlay.addEventListener('click', () => {
        sidebar.classList.add('hidden');
        overlay.classList.add('hidden');
      });
      window.addEventListener('resize', () => {
        if (!isMobile()) {
          overlay.classList.add('hidden');
          sidebar.classList.remove('hidden');
        }
      });
    });
  </script>
</body>

</html>