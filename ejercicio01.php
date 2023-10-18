<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio 01</title>
</head>
<body>
    <h1>Datos del Ejercicio 01</h1>
    <table border="2" >
        <thead>
            <tr>
                <th>Categoría</th>
                <th>ID</th>
                <th>Título</th>
                <th>Autor</th>
                <th>Fecha de Creación</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($posts as $post): ?>
                <tr>
                    <td><?php echo $post['category']; ?></td>
                    <td><?php echo $post['id']; ?></td>
                    <td><?php echo $post['title']; ?></td>
                    <td><?php echo $post['username']; ?></td>
                    <td><?php echo $post['created_at']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <a href="<?php echo site_url('posts/exportCSV'); ?>" class="btn btn-primary">Exportar a CSV</a>
</body>
</html>
