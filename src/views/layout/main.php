<!doctype html>
<html>
<head>
    <title>Getting Started</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <script src="assets/js/jquery-3.4.1.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</head>
<body>
<div id="root" class="container-fluid pl-0 pr-0">
	<?= $header ?>
	<?= $body; ?>
	<?= $footer; ?>
</div>

<div class="modal" tabindex="-1" role="dialog" id="userForm">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Delete User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Please confirm deleting user</p>
            </div>
            <div class="modal-footer">
                <form>
                    <button type="button" id="dismissModal" class="btn btn-secondary" data-dismiss="modal">Cancel
                    </button>
                    <button type="button" id="confirmDeleteBtn" class="btn btn-outline-danger">Confirm</button>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>