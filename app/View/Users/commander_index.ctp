<?php echo $this->Html->script(array('custom/users'), array('inline' => FALSE)) ?>

<div class="row">
    <div class="col-lg-12">
        <div class="row">
            <h2 class="col-lg-6"><?php echo $page_title; ?></h2>
            <div class="col-lg-6">
                <?php
                echo $this->Html->link('<button class="btn btn-primary pull-right" type="button">Add New User</button>',
                    array('action' => 'commander_add'), array('escape' => FALSE));
                ?>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Email</th>
                        <th>Name</th>
                        <th>Action</th>
                        <th>Status</th>
                        <th>Created</th>
                        <th>Modified</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($all_users)) : ?>
                        <?php foreach($all_users as $user) : ?>
                            <tr>
                                <td><?php echo $user['User']['email']; ?></td>
                                <td><?php echo $user['User']['full_name']; ?></td>
                                <td>
                                    <?php echo $this->Html->link('<i class="fa fa-edit fa-2x"></i>', array('action' => 'commander_edit', $user['User']['id']), array('escape' => FALSE)); ?>
                                    
                                    <i class="fa fa-times fa-2x"></i>
                                </td>
                                <td>
                                    <?php 
                                    echo $user['User']['status'] == ACTIVE ? 
                                        '<i data-status="' . IN_ACTIVE . '" data-id = "' . $user['User']['id'] . '" class="fa fa-toggle-on fa-2x change_status"></i>' : 
                                        '<i data-status="' . ACTIVE . '" data-id = "' . $user['User']['id'] . '" class="fa fa-toggle-off fa-2x change_status"></i>'; 
                                    ?>
                                </td>
                                <td><?php echo $user['User']['created']; ?></td>
                                <td><?php echo $user['User']['modified']; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                    <tr>
                        <td colspan="4">
                            <?php
                            echo $this->Paginator->first(3);
                            
                            if ($this->Paginator->hasPrev('User'))
                            {
                                echo '<< ' . $this->Paginator->prev('Prev') . '  ';
                            }
                            
                            echo $this->Paginator->numbers(array('first' => 'First page'))  . '  ';
                            
                            if ($this->Paginator->hasNext('User'))
                            {
                                echo $this->Paginator->next('Next') . ' >>';
                            }
                            ?>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
