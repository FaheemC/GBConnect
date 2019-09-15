<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <style>
        .modal-title {
            text-align:center;
            font-size:20px;
            font-weight:bold;
        }
        @media screen and (min-width: 768px){
            #myModal .modal-dialog {
                webkit-box-shadow: 0 5px 15px rgba(0,0,0,.5);
                box-shadow: 0 5px 15px rgba(0,0,0,.5);
            }
        }
        #myModal .modal-header {
            border-radius: 5px 5px 0 0;
            background-color:#fff;
        }
        #myModal .modal-content {
            background-color:#fff;
            border-radius: 0;
            padding:20px;
            box-shadow: none;
            background-clip:inherit;
        }
        #myModal .modal-footer {
            background-color:#fff;
            border-radius: 0 0 5px 5px;
        }
    </style>
</head>
<body>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <p class="modal-title">My Dynamic Modal</p>
        </div>
        <!-- Modal content-->
        <div class="modal-content clearable-content">
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
    </div>
</div>


<a data-toggle="modal" href="2.html" data-remote="1.html #modal-section" data-target="#myModal">Page 1 Modal Content</a>
<br /><br />
<a data-toggle="modal" href="3.html" data-remote="2.html #modal-section" data-target="#myModal">Page 2 Modal Content</a>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script>
    $(document).on('hidden.bs.modal', function (e) {
        var target = $(e.target);
        target.removeData('bs.modal')
            .find(".clearable-content").html('');
    });
</script>
</body>
</html>