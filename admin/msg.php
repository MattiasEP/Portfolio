<?php
    if(is_admin()) {

        if(isset($_POST['id'])) {
            $id = cleaner($_POST['id']);

            $query = "DELETE FROM messages WHERE id = $id";

            mysqli_query($db, $query);
        }

        $query = "SELECT * FROM messages $search_query ORDER BY id DESC";

        $result = mysqli_query($db, $query);

        while($row = mysqli_fetch_assoc($result)) {
            echo "
                <div class='container'>
                    <div class='inner-content'>
                        <div class='content-box'>
                            <p id='date'>{$row['date']}</p>
                            <p>Namn: {$row['name']}</p>
                            <br />
                            <p>Meddelande: <br /> {$row['message']}</p>
                            <br />
                            <p>Telefonnummer: {$row['phone']}</p>
                            <p>E-mail: <a href='mailto:{$row['mail']}'>{$row['mail']}</a></p>
                            <form method='post' action=''>
                                <input type='hidden' name='id' value='{$row['id']}' />
                                <input type='submit' class='delete' value='RADERA' />
                            </form>
                        </div>
                    </div>
                </div>
                ";
        }

        echo "
            <div class='footfix'>
            </div>
            ";

    }
    else {
        include('start.php');
    }
