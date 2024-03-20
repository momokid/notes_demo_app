<?php require('partials/head.php'); ?>
<?php require('partials/nav.php');  ?>
<?php require('partials/banner.php'); ?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <p class="mb-6">
            <a href="/post" class="hover:bg-blue-400 rounded-md bg-blue-500 text-white text-sm font-medium pl-2 pr-3 py-2 shadow-sm">
               
                Back
            </a>
        </p>
        <p><?= $note['body']; ?></p>
    </div>
</main>

<?php require('partials/footer.php'); ?>