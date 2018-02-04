<?php
$GLOBALS['caller_page'] = 'Tofes';
include 'Frame/head.php';
?>
<h1>Tofes</h1>
<div class="container">
    <div class="row">
        <div id="numChart" class="col-sm-2">
            Add # here.
        </div>
        <div class="col-sm-4">
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">Type a number</span>
                <input id="numberIn" type="number" class="form-control" placeholder="Number" aria-describedby="basic-addon1">
            </div>
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
    $('#numBtn').click(function () {
        input = $('#numberIn').val();
        //alert("Handler for .click() called.");
        $('#numChart').append('<hr>' + input);
    });


</script>
