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
    <img src="https://sistemaebd.com.br/wp-content/uploads/2023/01/Sistema-EBD-BR-EXT.png" class="h-8 hidden md:block">
    <form method="GET" action="search.php" class="flex flex-1 max-w-full mx-2 md:mx-auto md:max-w-2xl">
      <input type="text" name="q" placeholder="Sistema EBD" class="w-full px-5 py-3 rounded-l-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-orange-400" value="<?php echo isset($_GET['q']) ? htmlspecialchars($_GET['q']) : ''; ?>" />
      <button type="submit" class="bg-white hover:bg-gray-200 px-4 py-3 rounded-r-lg border border-l-0 border-gray-300"><i class="material-icons text-base">search</i>
      </button>
    </form>
    <button id="toggleMenu" class="md:hidden text-white text-2xl">
      <i class="material-icons">menu</i>
    </button>
  </header>
  <div class="flex h-[calc(100vh-64px)] overflow-hidden">
    <div id="overlay" class="fixed inset-0 z-40 bg-black bg-opacity-50 hidden transition-opacity duration-300"></div>
    <aside id="sidebar"
      class="bg-white border-r shadow-lg w-64 p-4 space-y-2 text-sm font-semibold text-gray-700 
             md:block hidden absolute md:relative z-50 md:z-auto top-16 md:top-0 left-0 
             h-full overflow-y-auto rounded-tr-xl md:rounded-none transition-all duration-300 ease-in-out">
      <nav class="space-y-1">
        </a>
        <a href="pages/intro.php" target="content"
          class="flex items-center gap-2 py-2 rounded-md hover:bg-gray-100 hover:text-orange-500 transition-all">
          <i class="material-icons text-base">play_arrow</i>
          <span>Introdução</span>
        </a>
        <div>
          <div>
            <div class="flex items-center justify-between py-2 hover:bg-gray-100 rounded-md transition-all group">
              <a href="pages/navbar.php" target="content"
                class="flex items-center gap-2 text-sm font-semibold text-gray-700 group-hover:text-orange-500 w-full pr-2">
                <i class="material-icons text-base">list</i>
                <span>Barra de Navegação</span>
              </a>
              <button onclick="toggleSubmenu('navbar_subpages')" class="text-gray-500 hover:text-orange-500 p-1">
                <i class="material-icons text-sm">expand_more</i>
              </button>
            </div>
            <div id="navbar_subpages" class="pl-6 space-y-1 hidden">
              <a href="pages/navbar/menu.php" target="content"
                class="flex items-center gap-2 py-2 hover:text-orange-500 transition">
                <i class="material-icons text-base">menu</i>Menu
              </a>
              <div>
                <div class="flex items-center justify-between py-2 hover:bg-gray-100 rounded-md transition-all group">
                  <a href="pages/navbar/start.php" target="content"
                    class="flex items-center gap-2 text-sm font-semibold text-gray-700 group-hover:text-orange-500 w-full pr-2">
                    <i class="material-icons text-base">cottage</i>
                    <span>Início</span>
                  </a>
                  <button onclick="toggleSubmenu('start_subpages')" class="text-gray-500 hover:text-orange-500 p-1">
                    <i class="material-icons text-sm">expand_more</i>
                  </button>
                </div>
                <div id="start_subpages" class="pl-6 space-y-1 hidden">
                  <div>
                    <div class="flex items-center justify-between py-2 hover:bg-gray-100 rounded-md transition-all group">
                      <a href="pages/navbar/start/call.php" target="content"
                        class="flex items-center gap-2 text-sm font-semibold text-gray-700 group-hover:text-orange-500 w-full pr-2">
                        <i class="material-icons text-base">rule</i>
                        <span>Chamadas</span>
                      </a>
                      <button onclick="toggleSubmenu('call_subpages')" class="text-gray-500 hover:text-orange-500 p-1">
                        <i class="material-icons text-sm">expand_more</i>
                      </button>
                    </div>
                    <div id="call_subpages" class="pl-6 space-y-1 hidden">
                      <a href="pages/students.php" target="content"
                        class="flex items-center gap-2 py-2 hover:text-orange-500 transition">
                        <i class="material-icons text-base">check</i>Alunos
                      </a>
                      <a href="pages/navbar/start/call/collaborators.php" target="content"
                        class="flex items-center gap-2 py-2 hover:text-orange-500 transition">
                        <i class="material-icons text-base">done_outline</i>Colaboradores
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <a href="pages/classes.php" target="content"
                class="flex items-center gap-2 py-2 hover:text-orange-500 transition">
                <i class="material-icons text-base">tv</i>Turmas
              </a>
              <a href="pages/registers.php" target="content"
                class="flex items-center gap-2 py-2 hover:text-orange-500 transition">
                <i class="material-icons text-base">groups</i>Cadastros
              </a>
              <a href="pages/data.php" target="content"
                class="flex items-center gap-2 py-2 hover:text-orange-500 transition">
                <i class="material-icons text-base">casino</i>Dados
              </a>
            </div>
          </div>
          <a href="pages/profile.php" target="content"
            class="flex items-center gap-2 py-2 hover:text-orange-500 transition">
            <i class="material-icons text-base">person</i>Perfil
          </a>
          <div>
            <div>
              <div class="flex items-center justify-between py-2 hover:bg-gray-100 rounded-md transition-all group">
                <a href="pages/registers.php" target="content"
                  class="flex items-center gap-2 text-sm font-semibold text-gray-700 group-hover:text-orange-500 w-full pr-2">
                  <i class="material-icons text-base">groups</i>
                  <span>Cadastros</span>
                </a>
                <button onclick="toggleSubmenu('register_subpages')" class="text-gray-500 hover:text-orange-500 p-1">
                  <i class="material-icons text-sm">expand_more</i>
                </button>
              </div>
              <div id="register_subpages" class="pl-6 space-y-1 hidden">
                <a href="pages/students.php" target="content"
                  class="flex items-center gap-2 py-2 hover:text-orange-500 transition">
                  <i class="material-icons text-base">add_reaction</i>Alunos
                </a>
                <a href="pages/teachers.php" target="content"
                  class="flex items-center gap-2 py-2 hover:text-orange-500 transition">
                  <i class="material-icons text-base">person_add</i>Professores
                </a>
                <a href="pages/registers/departments.php" target="content"
                  class="flex items-center gap-2 py-2 hover:text-orange-500 transition">
                  <i class="material-icons text-base">library_add</i>Departamentos
                </a>
                <a href="pages/registers/sectors.php" target="content"
                  class="flex items-center gap-2 py-2 hover:text-orange-500 transition">
                  <i class="material-icons text-base">add_location</i>Setores
                </a>
                <a href="pages/classes.php" target="content"
                  class="flex items-center gap-2 py-2 hover:text-orange-500 transition">
                  <i class="material-icons text-base">add_to_queue</i>Turmas
                </a>
                <a href="pages/registers/users.php" target="content"
                  class="flex items-center gap-2 py-2 hover:text-orange-500 transition">
                  <i class="material-icons text-base">add</i>Usuários
                </a>
              </div>
            </div>
          </div>
          <div>
            <div class="flex items-center justify-between py-2 hover:bg-gray-100 rounded-md transition-all group">
              <a href="pages/relatories.php" target="content"
                class="flex items-center gap-2 text-sm font-semibold text-gray-700 group-hover:text-orange-500 w-full pr-2">
                <i class="material-icons text-base">article</i>
                <span>Relatórios</span>
              </a>
              <button onclick="toggleSubmenu('relatories_subpages')" class="text-gray-500 hover:text-orange-500 p-1">
                <i class="material-icons text-sm">expand_more</i>
              </button>
            </div>
            <div id="relatories_subpages" class="pl-6 space-y-1 hidden">
              <a href="pages/relatories/birthday.php" target="content"
                class="flex items-center gap-2 py-2 hover:text-orange-500 transition">
                <i class="material-icons text-base">cake</i>Aniversariantes
              </a>
              <a href="pages/relatories/lesson.php" target="content"
                class="flex items-center gap-2 py-2 hover:text-orange-500 transition">
                <i class="material-icons text-base">school</i>Aula
              </a>
              <a href="pages/relatories/out.php" target="content"
                class="flex items-center gap-2 py-2 hover:text-orange-500 transition">
                <i class="material-icons text-base">directions_run</i>Ausentes
              </a>
              <a href="pages/relatories/churches.php" target="content"
                class="flex items-center gap-2 py-2 hover:text-orange-500 transition">
                <i class="material-icons text-base">church</i>Igrejas
              </a>
              <a href="pages/data.php" target="content"
                class="flex items-center gap-2 py-2 hover:text-orange-500 transition">
                <i class="material-icons text-base">casino</i>Dados
              </a>
            </div>
          </div>
          <a href="pages/certificates.php" target="content"
            class="flex items-center gap-2 py-2 rounded-md hover:bg-gray-100 hover:text-orange-500 transition-all">
            <i class="material-icons text-base">workspace_premium</i>Certificado
          </a>
          <a href="pages/finances.php" target="content"
            class="flex items-center gap-2 py-2 rounded-md hover:bg-gray-100 hover:text-orange-500 transition-all">
            <i class="material-icons text-base">attach_money</i>Financeiro
          </a>
          <a href="pages/children.php" target="content"
            class="flex items-center gap-2 py-2 rounded-md hover:bg-gray-100 hover:text-orange-500 transition-all">
            <i class="material-icons text-base">polyline</i>Filiais
          </a>
          <a href="pages/settings.php" target="content"
            class="flex items-center gap-2 py-2 rounded-md hover:bg-gray-100 hover:text-orange-500 transition-all">
            <i class="material-icons text-base">settings</i>Configurações
          </a>
          <a href="pages/material.php" target="content"
            class="flex items-center gap-2 py-2 rounded-md hover:bg-gray-100 hover:text-orange-500 transition-all">
            <i class="material-icons text-base">collections_bookmark</i>Material de apoio
          </a>
          <a href="pages/support.php" target="content"
            class="flex items-center gap-2 py-2 rounded-md hover:bg-gray-100 hover:text-orange-500 transition-all">
            <i class="material-icons text-base">handshake</i>Suporte
          </a>
        </div>
      </nav>
    </aside>
    <section class="flex-1 h-full">
      <iframe name="content" src="pages/intro.php" class="w-full h-full border-0"></iframe>
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

      function openSidebar() {
        sidebar.classList.remove('hidden');
        sidebar.classList.add('translate-x-0');
        if (isMobile()) overlay.classList.remove('hidden');
      }

      function closeSidebar() {
        sidebar.classList.add('hidden');
        overlay.classList.add('hidden');
      }
      toggleButton.addEventListener('click', (e) => {
        e.stopPropagation();
        const menuIsHidden = sidebar.classList.contains('hidden');
        if (menuIsHidden) {
          openSidebar();
        } else {
          closeSidebar();
        }
      });
      overlay.addEventListener('click', () => {
        closeSidebar();
      });
      window.addEventListener('resize', () => {
        if (!isMobile()) {
          overlay.classList.add('hidden');
          sidebar.classList.remove('hidden');
        } else {
          sidebar.classList.add('hidden');
        }
      });
    });

    function toggleSubmenu(id) {
      const submenu = document.getElementById(id);
      submenu.classList.toggle('hidden');
    }
  </script>
</body>

</html>