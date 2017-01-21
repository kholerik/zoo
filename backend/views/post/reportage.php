<h1>ew</h1>
<?php foreach ($model as $item) : ?>
    <div class="well">
        <h3> <?= $item->title ?></h3>
        <p><?= $item->description ?></p>
    </div>


<?php endforeach; ?>
 