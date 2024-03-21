<?php require('partials/head.php'); ?>
<?php require('partials/nav.php');  ?>
<?php require('partials/banner.php'); ?>

<main>
  <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
    <?php foreach ($notes as $note) :   ?>
      <ul>
        <li>
          <a href="note?id=<?= $note['id'] ?>" class="text-blue-500 hover:underline"><?= $htmlspecialchars($note['body']); ?></a>
        </li>
      </ul>
    <?php endforeach; ?>

    <p class="mt-6">
      <a href="notes/create" class="hover:bg-green-400 rounded-md bg-green-500 text-white text-sm font-medium pl-2 pr-3 py-2 shadow-sm">Create Note</a>
    </p>

  </div>
</main>

<?php require('partials/footer.php'); ?>