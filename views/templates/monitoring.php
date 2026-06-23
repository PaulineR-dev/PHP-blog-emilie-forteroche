<?php
function sortChoice($col, $label, $choice, $order) {

    // Détermine le prochain ordre si on clique
    $next = ($choice === $col && $order === 'asc') ? 'desc' : 'asc';

    if ($choice === $col) {
        $arrow = $order === 'asc' ? ' ▲' : ' ▼';
    } else {
        $arrow = ' ▲';
    }

    return "<a href='index.php?action=showMonitoring&choice=$col&order=$next'>$label$arrow</a>";
}
?>

<h2>Monitoring du blog</h2>

<table class="monitoring-table">
    <thead>
        <tr>
            <th><?= sortChoice('title', 'Noms des articles', $choice, $order) ?></th>
            <th><?= sortChoice('views', 'Nombre de vues', $choice, $order) ?></th>
            <th><?= sortChoice('comments', 'Commentaires', $choice, $order) ?></th>
            <th><?= sortChoice('date', 'Date de publication', $choice, $order) ?></th>
            <th><?= sortChoice('update', 'Date de mise à jour', $choice, $order) ?></th>
        </tr>
    </thead>

    <tbody>
        <?php foreach ($articles as $article): ?>
            <tr>
                <td><?= htmlspecialchars($article['title']) ?></td>
                <td><?= $article['views'] ?></td>
                <td><?= $article['nb_comments'] ?></td>
                <td><?= $article['date_creation'] ?></td>
                <td><?= $article['date_update'] ?></td> 
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
