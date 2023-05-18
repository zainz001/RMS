<body>
    <h2>Ticket Form</h2>
    <form action="addTicketAction.php" method="post">
        <select name="train_name" id="">
            <option>Select Train</option>

        </select>
        <input placeholder="Departure Date" type="date" name="departure_date" id="">
        <select name="departure_time" id="">
            <option>Select Departure time</option>
            <option value="">1200</option>
            <option value="">1200</option>
            <option value="">1200</option>
            <option value="">1200</option>
            <option value="">1200</option>
            <option value="">1200</option>
            <option value="">1200</option>
            <option value="">1200</option>
            <option value="">1200</option>
            <option value="">1200</option>
            <option value="">1200</option>
            <option value="">1200</option>
            <option value="">1200</option>
        </select>
        <select name="arrival_time" id="">
            <option>Select Arrival time</option>
            <option value="">1200</option>
            <option value="">1200</option>
            <option value="">1200</option>
            <option value="">1200</option>
            <option value="">1200</option>
            <option value="">1200</option>
            <option value="">1200</option>
            <option value="">1200</option>
            <option value="">1200</option>
            <option value="">1200</option>
            <option value="">1200</option>
            <option value="">1200</option>
            <option value="">1200</option>
        </select>
        <select name="departure_location" id="">
            <option>From</option>

        </select>
        <select name="arrival_location" id="">
            <option>To</option>
        </select>
        <button type="submit" name="add_ticket">Add Ticket</button>
    </form>

</body>