<div id="rootContent" class="container pt-5">
    <div class="row ml-4 mr-4">
        <form method="post" class="text-left mx-auto" id="userCreateForm">
            <div class="form-group">
                <label for="firstName">First Name</label>
                <input name="first_name" type="text" class="form-control" id="firstName" aria-describedby="firstNameHelp"
                       placeholder=" Enter First Name" required="">
                <!--                        <small id="firstNameHelp" class="form-text text-muted">.</small>-->
            </div>
            <div class="form-group">
                <label for="lastName">Last Name</label>
                <input name="surname" type="text" class="form-control" id="lastName" aria-describedby="lasNameHelp"
                       placeholder="Enter Last Name" required="">
                <!--                        <small id="lasNameHelp" class="form-text text-muted">.</small>-->
            </div>
            <div class="form-group">
                <label for="emailAddress">Email address</label>
                <input name="email" type="email" class="form-control" id="emailAddress" aria-describedby="emailHelp"
                       placeholder="Enter email" required="">
                <!--                        <small id="emailHelp" class="form-text text-muted">.</small>-->
            </div>
            <div class="form-group">
                <label for="username">Username</label>
                <input name="username" type="text" class="form-control" id="username" aria-describedby="usernameHelp"
                       placeholder="Enter Username" required="">
                <!--                        <small id="usernameHelp" class="form-text text-muted">.</small>-->
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input name="password" type="password" class="form-control" id="password" placeholder="Password"
                       required="">
            </div>
            <button type="submit" class="btn btn-sm btn-success rounded-pill float-right pl-4 pr-4">Submit</button>
        </form>
    </div>
</div>

<script type="text/javascript">
    jQuery(function () {
        jQuery('#userCreateForm').on('submit', (event) => {
            let data = {};
            $(event.target).find('input').each((index, item) => {
                let input = $(item);
                data[input.attr('name')] = input.val();
            });

            data['action'] = 'create';

            $.post('', data, (data, status) => {
                if (status === 'success' && data.status === true) {
                    window.location.assign('/');
                    return false;
                }

                alert('Something went wrong');
            }, 'json');

            return false;
        })
    })
</script>