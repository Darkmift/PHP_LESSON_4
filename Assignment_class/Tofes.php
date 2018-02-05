<?php
$GLOBALS['caller_page'] = 'Tofes';
include 'Frame/head.php';
?>
<h3 id="alert">Tofes</h3>
<br>
<br>
<div class="container">
    <div class="row">
        <div class="col-sm-2">
            <h5>
                Number List
            </h5>
            <hr>
            <div class="pre-scrollable">
                <div id="numChart">

                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <form action="convert.php" method="POST">
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1">Type a number</span>
                    <input id="numberIn" type="number" class="form-control" placeholder="Number" value="" aria-describedby="basic-addon1">
                </div>
                <br><br>
                <!--hidden input-->
                <input id="postArray" name="postArray" type="hidden" value="">
                <input id="submitBtn" type="submit" class="btn btn-block btn-warning" value="Submit">
            </form>
        </div>
        <div class="col-sm-5">
            <button id="numBtn" type="button" class="btn btn-block btn-primary">Add</button>
        </div>
    </div>
</div>
<?php
include 'Frame/footer.php';
?>
<script>
    //limit input to 1-255
    $('#numberIn').on('input', function () {
        var value = $(this).val();
        if ((value !== '') && (value.indexOf('.') === -1)) {
            $(this).val(Math.max(Math.min(value, 255), 1));
        }
    });
    //register each input in numberIn add to list on left,
    //init array
    var numArray = [];
    $('#numBtn').click(function () {
        input = $('#numberIn').val();
        //alert("Handler for .click() called.");
        if (!input == '') {
            $('#alert').text("Tofes");
            if (numArray.length > 0) {
                numArray = JSON.parse(numArray);
            }
            $('#numChart').append(input + '<hr>');
            numArray.push(input),
                    console.log(numArray),
                    numArray = JSON.stringify(numArray),
                    console.log(numArray),
                    $('#postArray').val(numArray),
                    $('#numberIn').val('');
        } else {
            $('#alert').text("Add a number between 1 and 255 here.");
        }
    });
    $("form").submit(function (e) {
        if ($('#postArray').val() == "") {
            e.preventDefault();
            $('#alert').text("You must click the add button first.");
        }
    });

</script>
