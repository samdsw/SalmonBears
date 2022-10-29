<nav>
    <a class="<?php
                if ($path_parts['filename'] == 'index') {
                    print 'activePage';
                }
                ?>" href="index.php">Home</a>

    <a class="<?php
                if ($path_parts['filename'] == 'targetmarket') {
                    print 'activePage';
                }
                ?>" href="targetmarket.php">Target Market</a>


    <a class="<?php
                if ($path_parts['filename'] == 'control') {
                    print 'activePage';
                }
                ?>" href="control.php">Control </a>
</nav>