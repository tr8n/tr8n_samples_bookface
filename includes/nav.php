<?php tr8n_begin_block_with_options(array("source" => "navigation")) ?>

<!-- Static navbar -->
<div class="navbar navbar-inverse navbar-static-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only"><?php tre("Toggle navigation") ?></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><strong>bookface</strong></a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li><a href="#"><?php tre("About Us") ?></a></li>
                <li><a href="#"><?php tre("Newsfeed") ?></a></li>
                <li><a href="#"><?php tre("Find Friends") ?></a></li>
                <li><a href="#"><?php tre("Help") ?></a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#" onClick="Tr8n.UI.LanguageSelector.show(true);">
                        <img src="<?php echo tr8n_current_language()->flagUrl() ?>"> &nbsp;
                        <?php echo tr8n_current_language()->english_name ?></a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php tre("More {caret}", array("caret" => '<b class="caret"></b>')) ?></a>
                    <ul class="dropdown-menu">
                        <li><a href="#"><?php tre("Log in") ?></a></li>
                        <li><a href="#"><?php tre("Sign Up") ?></a></li>
                    </ul>
                </li>
            </ul>
        </div><!--/.nav-collapse -->
    </div><!--/.container-fluid -->
</div>

<?php tr8n_finish_block_with_options() ?>