<?php
    if(is_admin()) {

        if( isset($_POST['employer']) &&
            isset($_POST['title']) &&
            isset($_POST['period']) &&
            isset($_POST['content']) &&
            isset($_POST['id']) ) {

            $employer = cleaner($_POST['employer']);
            $title    = cleaner($_POST['title']);
            $period   = cleaner($_POST['period']);
            $content  = cleaner($_POST['content']);
            $id       = cleaner($_POST['id']);

            $query = "UPDATE cv SET
                    employer = '$employer',
                    title    = '$title',
                    period   = '$period',
                    content  = '$content'
                    WHERE id = '$id'";

            mysqli_query($db, $query);

        }

        $query = "SELECT * FROM cv";
        $result = mysqli_query($db, $query);

        echo "
            <div class='container footfix'>
                <div class='inner-content'>
                    <div id='cv' class='content-box'>";


        while($row = mysqli_fetch_assoc($result)) {
            echo "
                <div class='content-box-1'>
                    <div class='clickable-2'>
                    {$row['employer']}<div class='expander'><i class='fa fa-chevron-down'></i></div>
                    </div>
                    <div class='wrktxt hidden'>
                        <hr>
                        <form action='' method='POST'>
                            <p>Arbetsgivare/Skola</p>
                            <input name='employer' value='{$row['employer']}' />
                            <p>Titel</p>
                            <input name='title' value='{$row['title']}' />
                            <p>Period</p>
                            <input name='period' value='{$row['period']}' />
                            <p>Beskrivning</p>
                            <textarea name='content'>{$row['content']}</textarea>
                            <input name='id' type='hidden' value='{$row['id']}' />
                            <input type='submit' class='margin-top margin-bottom' value='UPPDATERA' />
                        </form>
                    </div>
                </div>
                ";
        }

        echo "
                    </div>
                </div>
            </div>
            <script src='../script/cv.js'></script>
            ";
    }
    else {
        include('start.php');
    }
