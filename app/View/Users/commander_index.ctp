<div class="row">
    <div class="col-lg-12">
        <h2>Bordered Table</h2>
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Email</th>
                        <th>Name</th>
                        <th>Created</th>
                        <th>Modified</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($all_users)) : ?>
                        <?php foreach($all_users as $user) : ?>
                            <tr>
                                <td><?php echo $user['User']['email']; ?></td>
                                <td><?php echo $user['User']['name']; ?></td>
                                <td><?php echo $user['User']['created']; ?></td>
                                <td><?php echo $user['User']['modified']; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
