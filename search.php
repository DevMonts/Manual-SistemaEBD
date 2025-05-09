<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Resultado da Pesquisa</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 text-gray-900 p-6">
    <a href="index.php" class="text-orange-600 hover:underline block mb-4">&larr; Voltar</a>
    <?php
    if (isset($_GET['q']) && !empty(trim($_GET['q']))) {
        $search = strtolower(trim($_GET['q']));
        $dir = __DIR__ . '/pages';
        $results = [];
        $rii = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($dir));
        foreach ($rii as $file) {
            if (!$file->isDir() && pathinfo($file, PATHINFO_EXTENSION) === 'php') {
                $path = $file->getPathname();
                $content = file_get_contents($path);
                if (stripos($content, $search) !== false) {
                    preg_match('/<title>(.*?)<\/title>/i', $content, $matches);
                    $title = $matches[1] ?? basename($path);
                    $relativePath = str_replace(__DIR__ . '/', '', $path);
                    $results[] = [
                        'path' => $relativePath,
                        'title' => $title
                    ];
                }
            }
        }
        echo "<div class='max-w-2xl mx-auto bg-white p-6 rounded shadow'>";
        echo "<h2 class='text-lg font-semibold mb-4'>Resultados da pesquisa por: <em>" . htmlspecialchars($search) . "</em></h2>";
        if (count($results)) {
            echo "<ul class='list-disc pl-5 space-y-2'>";
            foreach ($results as $res) {
                echo "<li><a href='index.php?open=" . urlencode($res['path']) . "' class='text-orange-600 hover:underline' target='_self'>" . htmlspecialchars($res['title']) . "</a></li>";
            }
            echo "</ul>";
        } else {
            echo "<p>Nenhuma página encontrada.</p>";
        }
        echo "</div>";
    } else {
        echo "<p class='text-center'>Nada foi digitado.</p>";
    }
    ?>
</body>

</html>