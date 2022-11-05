<?php 
include('conn.php');
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get the total tuition</title>
</head>
<body>

<div class="container-fluid">
                <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">

                    <table class="table table-striped text-center">
                    <thead >
                        <th>Row 1</th>
                        <th>Row 2</th>
                        <th>Row 3 </th>
                        <th>Row 4</th>
                        <th>Row 5</th>
                        <th>Row 6</th>
                    </thead>
                    <tbody id="myTable">
                    <!-- DISPLAY DATA FROM DATABASE -->
                    <?php
                            // PERFORM QUERY TO DATABASE
                            $sql = "SELECT student.name, course.description , course.price_per_unit * course.units AS tuition_fee FROM course JOIN student ON course.id = student.id";
                            $query = $conn->query($sql);

                            // FETCH A RESULT AS AN ASSOCIATIVE ARRAY
                            while($row=mysqli_fetch_array($query)){
                            ?>
                            <tr">
                                <!-- DISPLAY ROW FROM THE DATABASE -->
                                <td><?php echo ($row['name']); ?></td>
                                <td><?php echo ($row['description']); ?></td>
                                <td><?php echo ($row['tuition_fee']); ?></td>
                                <td><?php echo ($row['units']); ?></td>
                                <td><?php echo ($row['price_per_unit']); ?></td>
                                <td>
                                </td>
                                
                            </tr>
                            <?php
                            }
                    
                        ?>
                    </tbody>
                    </table>
                    </div>
                </div>
                </div>
            </div>
</body>
</html>