<?php
             include 'header.php';
             include 'config.php';
             //It will increment the value by 1 Table visitors and column is visit
             //update visitors set visit=visit + 1
             $sql="update download set git remote add origin https://github.com/snehasheikh123/react_project.git
=counters + 1";
             $conn->query($sql);

          ?>
          <h2> Total Downloaders: 
            <?php 
                 $sql="select counters from download";
                 $result=$conn->query($sql);
                 $row=$result->fetch_assoc();
                 $cnt=$row['counters'];
                 echo $cnt;
?>