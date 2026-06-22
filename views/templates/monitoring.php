<h2>Monitoring du blog</h2>

<table class="monitoring-table">
    <thead>
        <tr>
            <th><a href="index.php?action=showMonitoring&sort=title&order=asc">Noms des articles</a></th>
            <th><a href="index.php?action=showMonitoring&sort=views&order=asc">Nombre de vues</a></th>
            <th><a href="index.php?action=showMonitoring&sort=comments&order=asc">Commentaires</a></th>
            <th><a href="index.php?action=showMonitoring&sort=date&order=asc">Date de publication</a></th>
        </tr>
    </thead>

    <tbody>
        <?php foreach ($articles as $article): ?>
            <tr>
                <td><?= htmlspecialchars($article['title']) ?></td>
                <td><?= $article['views'] ?></td>
                <td><?= $article['nb_comments'] ?></td>
                <td><?= $article['date_creation'] ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
