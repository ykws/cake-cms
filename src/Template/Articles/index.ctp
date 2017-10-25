<h1>Articels</h1>
<table>
    <tr>
        <th>Title</th>
        <th>Created</th>
    </tr>
    
    <?php foreach ($articles as $article): ?>
    <tr>
        <td>
            <?= $this->Html->link($article->title, ['action' => 'view', $article->slug]) ?>
        </td>
        <td>
            <?= $article->created->format(DATE_RFC850) ?>
        </td>
    </tr>
    <?php endforeach ?>
</table>

<?= $this->Html->link('Add Article', ['action' => 'add']) ?>
