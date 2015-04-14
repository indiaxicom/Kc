<div class="row">
    <div class="col-lg-12">
        <h2><?php echo $page_title; ?></h2>
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
                    <tr>
                        <td colspan="4">
                            <?php
                            echo $this->Paginator->first(3);
                            echo $this->Paginator->prev('Prev') . ' | ';
                            echo $this->Paginator->numbers(array('first' => 'First page')) . ' | ';
                            echo $this->Paginator->next('Next');
                            ?>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
