<div id="rootContent">
    <div class="row text-center ml-4 mr-4">
        <table class="table table-striped">
            <thead>
            <tr>
                <theader>
                    <td>ID</td>
                    <td>First Name</td>
                    <td>Last Name</td>
                    <td>Email</td>
                    <td><a class="btn btn-dark btn-sm rounded-pill float-right" href="/create.php">Create User</a></td>
                </theader>
            </tr>
            </thead>
            <tbody>

			<?php foreach ($users as $user): ?>
                <tr>
                    <td><?php echo $user->id; ?></td>
                    <td><?php echo $user->first_name; ?></td>
                    <td><?php echo $user->surname; ?></td>
                    <td><?php echo $user->email; ?></td>
                    <td class="text-right"><a class="btn btn-sm btn-success rounded-pill p-0 pl-4 pr-4"
                                              href="/edit.php?id=<?= $user->id; ?>">Edit</a>
                        <button class="btn btn-sm btn-danger rounded-pill p-0 pl-4 pr-4 ml-2" data-toggle="modal"
                                data-target="#userForm" data-userid="<?= $user->id; ?>">Delete
                        </button>
                    </td>
                </tr>
			<?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<script>
    $(() => {
        $('button[data-target="#userForm"]').on('click', (event) => {
            let userId = $(event.target).attr('data-userid');
            $('#confirmDeleteBtn').attr('data-userid', userId);

            $('#confirmDeleteBtn').on('click', (event) => {
                $.post('delete.php', {id: userId, action: 'delete'}, (data, status) => {
                    if (status === 'success' && data.status === true) {
                        window.location.reload();
                        return false;
                    }

                    alert('Something went wrong');
                }, 'json');

                return false;
            })
        });
    });
</script>