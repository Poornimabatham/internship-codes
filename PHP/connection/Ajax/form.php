<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</head>

<body>

    <div class="row">
        <!-- <input class="form-control"   type="number" name="number" id="country" onchange="CityFetch(this.value)"> -->
        <label for="country">Country</label>
        <select name="country" id="Country">

        </select>

    </div>

    



    <div class="row">
            <label>City:</label><br /> <select name="city"
                id="City">
                <option value="">Select city</option>
            </select>
        </div>

        <div class="row">
            <label>State</label><br /> <select name="state"
                id="State">
                <option value="">Select State</option>
            </select>
        </div>
    




</body>
<script>

    $.ajax({
        type: "POST",
        url: "country.php",
        data: { country: 'country' },
        success: function (response) {
            // console.log(response);
            $('#Country').html(response);
        }
    });




    $("#Country").on('change', function () {
        var city = this.value;
        // console.log(city);
        $.ajax({
            type: "post",
            url: "getcity.php",
            data: { citydata: city },
            success: function (response) {
                // console.log(response);
                $('#City').html(response)
            }
        })

    });
    
    $("#City").on('change', function () {
        var State = this.value;
        // console.log(State);
        $.ajax({
            type: "post",
            url: "getState.php",
            data: { state: State},
            success: function (response) {
                // console.log(response);
                $('#State').html(response)
            }
        })

    });




</script>

</html>