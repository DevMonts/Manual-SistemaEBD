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
  <header class="bg-orange-500 py-4 px-8 flex justify-between items-center">
    <div class="flex items-center space-x-2">
      <img src="https://sistemaebd.com.br/wp-content/uploads/2023/01/Sistema-EBD-BR-EXT.png" alt="SistemaEBD" class="h-8">
    </div>
    <nav class="flex items-center space-x-6 text-white font-bold">
      <a href="https://sistemaebd.com.br/" class="hover:underline">Home</a>
      <a href="https://sistemaebd.com.br/home2/#recursos" class="hover:underline">Recursos</a>
      <a href="https://sistemaebd.com.br/#contato" class="hover:underline">Contato</a>
      <div class="relative group flex items-center space-x-1">
        <button class="hover:underline">Ajuda</button>
        <i class="material-icons">arrow_drop_down</i>
        <div class="absolute hidden bg-white text-black py-2 w-32 rounded-md shadow-lg group-hover:block">
          <a href="https://sistemaebd.com.br/categorias/subsidio/" class="block px-4 py-1 hover:bg-gray-200">Subsídios</a>
          <a href="https://sistemaebd.com.br/publicacoes/" class="block px-4 py-1 hover:bg-gray-200">Artigos e Publicações</a>
          <a href="https://sistemaebd.com.br/ajuda/" class="block px-4 py-1 hover:bg-gray-200">Manual do App</a>
        </div>
      </div>
      <a href="https://sistemaebd.com.br/status/" class="hover:underline">Status</a>
    </nav>
    <a href="https://app.sistemaebd.com.br/" class="bg-brown-800 text-white px-4 py-2 rounded-md font-bold">Login</a>
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