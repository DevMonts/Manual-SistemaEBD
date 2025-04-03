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
  <div class="flex justify-center py-6">
    <form action="" method="GET" class="w-full max-w-2xl">
      <h1 class="text-center block text-xl font-bold mb-5">Olá, como podemos te ajudar?</h1>
      <div class="relative">
        <input type="text" name="search" placeholder="Busque sua pergunta ou palavra-chave aqui!"
          class="w-full p-3 pl-10 rounded-full border border-gray-300 shadow-sm focus:outline-none focus:ring-2 focus:ring-orange-500"
          value="<?php echo isset($_GET['search']) ? htmlspecialchars($_GET['search']) : ''; ?>">
        <button type="submit" class="absolute left-3 top-3 text-gray-500">
          <i class="material-icons">search</i>
        </button>
      </div>
    </form>
  </div>
  <div class="flex h-screen">
    <aside class="w-64 p-5">
      <nav>
        <ul>
          <ul>
            <li class="py-2 text-gray-600 hover:text-blue-500 font-bold"><a href="index.php">Introdução</a></li>
            <li class="py-2 text-gray-600 hover:text-blue-500"><a href="page2.php">Menu Principal</a></li>
            <li class="py-2 text-gray-600 hover:text-blue-500"><a href="page3.php">Cadastros</a></li>
            <li class="py-2 text-gray-600 hover:text-blue-500"><a href="page4.php">Relatórios</a></li>
            <li class="py-2 text-gray-600 hover:text-blue-500"><a href="page5.php">Configurações</a></li>
          </ul>
      </nav>
    </aside>
    <main class="flex-1 p-10">
      <?php
      $search = isset($_GET['search']) ? strtolower($_GET['search']) : '';
      $pages = [['title' => 'Introdução', 'description' => 'O Sistema EBD foi desenvolvido para facilitar a gestão da Escola Bíblica Dominical, permitindo controle de turmas, alunos, professores, aulas, pontuação, relatórios e muito mais.']];
      $filtered_pages = [];
      if (!empty($search)) {
        foreach ($pages as $page) {
          if (strpos(strtolower($page['title']), $search) !== false || strpos(strtolower($page['description']), $search) !== false) {
            $filtered_pages[] = $page;
          }
        }
      } else {
        $filtered_pages = $pages;
      }
      ?>
      <div class="space-y-4">
        <?php if (!empty($filtered_pages)): ?>
          <?php foreach ($filtered_pages as $page): ?>
            <div class="bg-white p-4 shadow-md rounded-lg flex items-start space-x-4">
              <div>
                <h2 class="text-lg font-bold text-orange-500"><?php echo $page['title']; ?></h2>
                <p class="text-gray-600 text-sm"><?php echo $page['description']; ?></p>
              </div>
            </div>
          <?php endforeach; ?>
        <?php else: ?>
          <p class="text-red-500 font-bold text-center">Nenhum resultado encontrado.</p>
        <?php endif; ?>
      </div>
    </main>
  </div>
</body>

</html>