

<?php 
        $mysqli= new mysqli('localhost','root', '', 'it15_database') or die('Cannot connect to datebase');
        $search = $_POST['search'];


        if($_POST['submit']){
            $result = $mysqli->query("SELECT * FROM users_tbl WHERE firstname LIKE '%".$search."%'") or die($mysqli->error);
            if(isset($search)){
                
                while ($row = $result -> FETCH_ASSOC()):
                    echo '<table>';
                    echo '<td>'.$row['firstname'].'</td>';
                    echo '<td>'.$row['lastname'].'</td>';
                    echo '<td>'.$row['birthdate'].'</td>';
                    echo '</tr>';
                    echo '<table>';
                endwhile;
            }else{
                echo "No records found...";
                }
        }
        
    ?>