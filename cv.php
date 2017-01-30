<div class='container footfix'>
    <div class='inner-content'>
        <div id='cv' class='content-box'>
            <!-- WORK -->
            <h2 class='cv-heading' id='head-1'>Arbetslivs&shyerfarenhet</h2>
            <?php
                $result = mysqli_query($db, "SELECT * FROM cv WHERE field = 'arbetslivserfarenhet'");
                while($row = mysqli_fetch_assoc($result)) {
                    echo   "<div class='content-box-1 clickable' id='box-{$row['id']}'>
                                {$row['employer']}<div class='expander'><i class='fa fa-chevron-down'></i></div>
                                <div class='wrktxt hidden'>
                                    <hr>
                                    <i>{$row['title']}</i>
                                    <span class='dates'>{$row['period']}</span>
                                    <section class='work-content'>{$row['content']}</section>
                                </div>
                            </div>";
                }
            ?>
            <!--Utbildning-->
            <h2 class='cv-heading' id='head-2'>Utbildning</h2>
            <?php
                $result = mysqli_query($db, "SELECT * FROM cv WHERE field = 'utbildning'");
                while($row = mysqli_fetch_assoc($result)) {
                    echo   "<div class='content-box-1 clickable' id='box-{$row['id']}'>
                                {$row['employer']}<div class='expander'><i class='fa fa-chevron-down'></i></div>
                                <div class='wrktxt hidden'>
                                    <hr>
                                    <i>{$row['title']}</i>
                                    <span class='dates'>{$row['period']}</span>
                                    <section class='work-content'>{$row['content']}</section>
                                </div>
                            </div>";
                }
            ?>
            <!--Musik-->
            <h2 class='cv-heading' id='head-3'>Musik</h2>
            <?php
                $result = mysqli_query($db, "SELECT * FROM cv WHERE field = 'musik'");
                while($row = mysqli_fetch_assoc($result)) {
                    echo   "<div class='content-box-1 clickable' id='box-{$row['id']}'>
                                {$row['employer']}<div class='expander'><i class='fa fa-chevron-down'></i></div>
                                <div class='wrktxt hidden'>
                                    <hr>
                                    <i>{$row['title']}</i>
                                    <span class='dates'>{$row['period']}</span>
                                    <section class='work-content'>{$row['content']}</section>
                                </div>
                            </div>";
                }
            ?>
        </div>
    </div>
</div>
<script src='script/cv.js'></script>
