<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet"/>

<?php
for($i=0;$i<3;$i++) {
    ?>

    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" data-whatever="<?php echo $i?>">
        Open modal for <?php echo $i?>
    </button>
    <?php
}
?>

<!-- The Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="exampleModalLabel">New message</h4>
            </div>
            <div class="modal-body">
                <b>Overall GPA: </b>
                <p class="modal-GPA"></p>
                <b>Final Mark: </b>
                <h4 class="modal-FinalMark"></h4>
                <b>E-mail Address: </b>
                <h4 class="modal-Email"></h4>
                <b>Description: </b>
                <h4 class="modal-Desc"></h4>
            </div>
        </div>
    </div>
</div>

<script>
    $('#myModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var recipient = button.data('whatever') // Extract info from data-* attributes
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        var modal = $(this)
        modal.find('.modal-title').text('New message to ' + recipient)
        modal.find('.modal-GPA').text('New message to ' + recipient)
        modal.find('.modal-body input').val(recipient)
    })
</script>
