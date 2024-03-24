<?php require base_path('views/partials/head.php'); ?>
<?php require base_path('views/partials/nav.php');  ?>
<?php require base_path('views/partials/banner.php'); ?>


<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <p class="mb-6">
            <a href="/notes" class="hover:bg-blue-400 rounded-md bg-blue-500 text-white text-sm font-medium pl-2 pr-3 py-2 shadow-sm">
                Back to notes
            </a>
        </p>
        <p><?= htmlspecialchars($note['body']); ?></p>
    <form >
        <input type="text" value="<?= $note['id'] ?>" />
        <button method="POST" class="hover:bg-red-400 rounded-md bg-red-500 text-white text-sm font-medium pl-2 pr-3 py-2 shadow-sm">Delete</button>
    </form>
    </div>
</main>

<?php require base_path('views/partials/footer.php'); ?>