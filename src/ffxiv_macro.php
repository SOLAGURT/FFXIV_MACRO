<?php
/**
 * Created by PhpStorm.
 * User: EnsembleBox
 * Date: 2019/03/16
 * Time: 4:37
 */
?>
<!DOCTYPE html>
<html lang="ja">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<head>
    <title>
        マクロ保管所テストコード
    </title>
    <link rel="stylesheet" type="text/css" href="css/macro.css">
    <link rel="stylesheet" type="text/css" href="css/icon_test.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>
<body>
<div class="macro_ui_frame">
    <div id="macro_ui_title">
        <div id="macro_ui_title_en">MACROS</div>
        <div id="macro_ui_title_jp">マクロ</div>
    </div>
    <div id="macro_ui_title_border"></div>
    <div class="macro_ui_box">
        <ul class="macro_icon_grid">
            <!--<li class="macro_brock1"><a hidden href="#">あいうえお</a></li>-->
            <?php
                for ($i = 1; $i < 101 ; $i++) {
                    echo "<li class=\"macro_brock$i\"></li>";
                }
            ?>
        </ul>
        <div id="macro_content">
            <div id="macro_chose_icon"></div>
            <div id="macro_title"></div>
            <div id="macro_command"></div>
        </div>
    </div>
</div>
<script type="text/javascript" src="js/macro_sortable.js"></script>
</body>
</html>
