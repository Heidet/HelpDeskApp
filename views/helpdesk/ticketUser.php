?php ob_start(); ?>
<div class="container mt-4">
<h6 class="border-bottom border-gray pb-2 mb-0">Ticket</h6>
</div>
        <?php while ( $data = $tickets->fetch()){ ?>
            <main role="main" class="container">
        
            
            <div class="my-3 p-3 bg-white rounded shadow-sm">
                <div class="media text-muted pt-1">
                <svg class="bd-placeholder-img mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title><rect width="100%" height="100%" fill="#007bff"/><text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text></svg>
                <p class="media-body pb-1 mb-0 small lh-125 border-bottom border-gray">
                    <strong class="d-block text-gray-dark"><?= $data[''] ?></strong>
                    <?= htmlspecialchars($data['']) ?>
                </p>
                <a href="index.php?action=ticket&amp;id=<?= $data[''] ?>" class="btn btn-primary">...</a>
                </div>
            </main>
        </div>

    <?php
    }   
?>
<?php $contentPage = ob_get_clean(); ?>
<?php require('template.php'); ?>