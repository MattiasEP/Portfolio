<?php
    if(is_admin()) {

        if( isset($_POST['heading']) && isset($_POST['content']) && isset($_POST['id']) ) {
            $heading = $_POST['heading'];
            $content = $_POST['content'];
            $id      = $_POST['id'];

            $query = "UPDATE texts SET heading = '$heading', content = '$content' WHERE id = '$id'";
            mysqli_query($db, $query);

        }

        $query = "SELECT * FROM texts";
        $result = mysqli_query($db, $query);

        echo "
            <div class='container'>
                <div class='inner-content'>
            ";

        while($row = mysqli_fetch_assoc($result)) {
            echo "
                <div class='content-box'>
                    <form action='' method='POST'>
                        <p>Rubrik</p>
                        <input class='heading' name='heading' value='{$row['heading']}' />
                        <p class='margin-top'>Brödtext</p>
                        <textarea name='content'>{$row['content']}</textarea>
                        <input type='hidden' name='id' value={$row['id']} />
                        <input type='submit' class='margin-top' value='UPPDATERA'/>
                    </form>
                </div>
                ";
        }

        echo "
                </div>
            </div>
            ";
    }
    else {
        include('start.php');
    }
