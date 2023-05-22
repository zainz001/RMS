<?php
include('../dbconnect.php');
include('../head.php')
    ?>


<body>


    <div class="container">
        <div class="table">
            <table>
                <thead>
                    <tr>
                        <th hidden>ticket_id</th>
                        <th>train_name</th>
                        <th>date_available</th>
                        <th>departure_time</th>
                        <th>arrival_time</th>
                        <th>departure_location</th>
                        <th>destination</th>
                        <th>Update Tickets</th>
                        <th>Delete Tickets</th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = "SELECT * from train_ticket";
                    $statement = $conn->prepare($query);
                    $statement->execute();

                    $result = $statement->fetchall();
                    if ($result) {
                        foreach ($result as $row) {
                            ?>

                            <tr>

                                <td>
                                    <?= $row['train_name']; ?>
                                </td>
                                <td>
                                    <?= $row['date_available']; ?>
                                </td>
                                <td>
                                    <?= $row['departure_time']; ?>
                                </td>
                                <td>
                                    <?= $row['arrival_time']; ?>
                                </td>
                                <td>
                                    <?= $row['departure_location']; ?>
                                </td>

                                <td>
                                    <?= $row['destination']; ?>
                                </td>
                                <td> <!-- Button trigger modal -->
                                    <button type="button" value="<?= $row['ticket_id']; ?>" name="ticketid"
                                        class="btn btn-success ticketid" data-toggle="modal" data-target="#exampleModal">
                                        Update
                                    </button>
                                </td>
                                <td> <!-- Button trigger modal -->
                                    <button type="button" value="<?= $row['ticket_id']; ?>" name="ticketid"
                                        class="btn btn-danger delticketid" data-toggle="modal" data-target="#exampleModal1">
                                        delete
                                    </button>
                                </td>

                            </tr>
                            <?php
                        }
                    } else {
                        ?>
                        <tr>
                            <td colspan="5">no record found</td>

                        </tr>
                        <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="Package Details" id="exampleModalLabel">Package Details</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <form action="update.php" method="post">
                        <div class="modal-body">
                            <input type="number" name="ticketid" id="ticketid" hidden>
                            <label for="train_name">train name</label>
                            <br>
                            <input type="text" id="train_name" name="train_name">
                            <br>
                            <label for="date_available">date available</label>
                            <br>
                            <input type="date" id="date_available" name="booking_date" />
                            <br>
                            <label for="departure_time">Departure time</label>
                            <br>
                            <input type="text" id="departure_time" name="departure_time">
                            <br>
                            <label for="arrival_time">Arrival time</label>
                            <br>
                            <input type="text" id="arrival_time" name="arrival_time">
                            <br>
                            <label for="departure_location">Departure time</label>
                            <br>
                            <input type="text" id="departure_location" name="departure_location">
                            <br>
                            <label for="destination">destination</label>
                            <br>
                            <input type="text" id="destination" name="destination">
                            <br>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success" name="update" value="bookticket ">Update
                                Tickets</button>

                        </div>
                    </form>

                </div>
            </div>
        </div>

        <?php include('../scripts.php') ?>
        <script>
            $(document).on('click', '.ticketid', function () {
                var ticketid = $(this).val();
                $.ajax({
                    type: "POST", // Change the request method to POST
                    url: "ajax.php",
                    data: { ticketid: ticketid }, // Pass data as an object
                    dataType: "json",
                    success: function (data) {
                        if (data) {
                            $('#ticketid').val(data.ticket_id);
                            $('#train_name').val(data.train_name);
                            $('#date_available').val(data.date_available);
                            $('#departure_time').val(data.departure_time);
                            $('#arrival_time').val(data.arrival_time);
                            $('#departure_location').val(data.departure_location);
                            $('#destination').val(data.destination);

                        }
                    }
                });
            });
        </script>
        <script>
            $(document).on('click', '.delticketid', function () {
                var delticketid = $(this).val();
                $.ajax({
                    type: "POST", // Change the request method to POST
                    url: "ajax.php",
                    data: { delticketid: delticketid }, // Pass data as an object
                    dataType: "json",
                    success: function (result) {
                        if (result) {
                            alert("ticket Deleted Successfully");
                           
                        }
                    }
                });
            });
        </script>
        
</body>