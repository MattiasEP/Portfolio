<?php
    if(is_admin()) {

        if( isset($_POST['word']) ) {
            $word = mb_strtoupper($_POST['word']);
            $query = "INSERT INTO words (word) VALUES ('$word')";
            mysqli_query($db, $query);
        }

        if ( isset($_POST['id']) ) {
            $id = $_POST['id'];
            $query = "DELETE FROM words WHERE id = '$id'";
            mysqli_query($db, $query);
        }

        echo "
            <div class='container footfix'>
                <div class='inner-content'>
                    <div class='content-box'>
                        <form action='' method='POST'>
                            <input type='text' name='word' />
                            <input type='submit' class='margin-top margin-bottom' value='LÄGG TILL ORD' />
                            <div id='words'>
                        </form>
                    </div>";

        $query = "SELECT * FROM words ORDER BY id DESC";

        $result = mysqli_query($db, $query);

        while($row = mysqli_fetch_assoc($result)) {
            echo "
                <div class='word'>
                    {$row['word']}
                    <i class='fa fa-times delete-word' aria-hidden='true'></i>
                    <form action='' method='POST'>
                        <input type='hidden' value='{$row[id]}' name='id' />
                        <button type='submit' value='X'></button>
                    </form>
                </div>
                ";
        }

        echo "

                </div>
            </div>
        </div>
        <script src='./admin/hangman.js'></script>
        ";
    }
    else {
        include('start.php');
    }
