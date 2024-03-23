<?php require base_path('views/partials/head.php'); ?>
<?php require base_path('views/partials/nav.php');  ?>
<?php require base_path('views/partials/banner.php'); ?>


<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <p class="mb-6">
            <a href="/post" class="hover:bg-blue-400 rounded-md bg-blue-500 text-white text-sm font-medium pl-2 pr-3 py-2 shadow-sm">
               
                Back to notes
            </a>
        </p>
        <p><?= htmlspecialchars($note['body']); ?></p>
    </div>
</main>

<?php require base_path('views/partials/footer.php'); ?>