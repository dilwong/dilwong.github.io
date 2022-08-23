    <?php $allpages = [['index', 'Home'], ['research', 'Research'], ['publications', 'Publications'], ['gallery', 'Gallery']]; ?>
    <?php $suffix = '.html'; ?>

    <nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href=<?php echo "'index$suffix'"; ?>>Dillon Wong</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="nav navbar-nav ml-auto">
                <?php foreach ($allpages as $p) { $active = ($p[0]==$page)? " active" : "" ; echo "<li class='nav-item$active'><a class='nav-link' href='$p[0]$suffix'>$p[1]</a></li>"; } ?>
            </ul>
        </div>
    </nav>

    <noscript> <!-- No Javascript fallback -->
        <ul class='nojavascript'>
            <?php foreach ($allpages as $p) { echo "<li><a href='$p[0]$suffix'>$p[1]</a></li>"; } ?>
        </ul>
    </noscript>