<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Manual do Usuário - Sistema EBD</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 text-gray-900">
  <header class="bg-orange-500 py-4 px-10 flex justify-between items-center shadow-md">
    <h1 class="text-3xl font-bold text-white flex items-center">
      <img src="https://sistemaebd.com.br/wp-content/uploads/2023/01/Sistema-EBD-BR-EXT.png" alt="Logo" class="h-8 mr-2" />
    </h1>
  </header>
  <div class="flex h-screen">
    <aside class="w-64 bg-white p-5 shadow-md">
      <nav>
        <ul>
          <li class="py-2 text-gray-600 hover:text-blue-500"><a href="?page=page1">Página 1</a></li>
          <li class="py-2 text-gray-600 hover:text-blue-500"><a href="?page=page2">Página 2</a></li>
          <li class="py-2 text-gray-600 hover:text-blue-500"><a href="?page=page3">Página 3</a></li>
          <li class="py-2 text-gray-600 hover:text-blue-500"><a href="?page=page4">Página 4</a></li>
          <li class="py-2 text-gray-600 hover:text-blue-500"><a href="?page=page5">Página 5</a></li>
        </ul>
      </nav>
    </aside>
    <main class="flex-1 p-10">
      <?php
      $page = isset($_GET['page']) ? $_GET['page'] : 'cadastros';
      $pages = ['page1', 'page2', 'page3', 'page4', 'page5',];
      if (in_array($page, $pages)) {
        include "pages/$page.php";
      }
      ?>
    </main>
  </div>
</body>

</html>