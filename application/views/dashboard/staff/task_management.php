<div class="page-content">

    <div class="container-fluid m-tasks">
        <div class="page-content__header">
            <div>
                <h2 class="page-content__header-heading">Tasks</h2>
            </div>
        </div>
        <div class="main-container m-tasks__container container-heading-bordered">
            <h2 class="container-heading">
                <span>Tasks (18)</span>
                <div class="col-lg-3"><a style="float:right;" href="<?php echo base_url(); ?>staff/add_new_task"
                                         type="submit"
                                         class="btn btn-outline-success btn-block iconfont icon-left btn-lg m-tasks__add-card">
                        New Task
                    </a>
                </div>
                <span class="container-heading-controls">
        <a href="#" class="ua-icon-action-plus container-heading-control"></a>
      </span>
            </h2>
            <div class="container-body m-tasks__columns">
                <div class="m-tasks__column m-tasks__column--new">
                    <div class="m-tasks__column-header">
                        <span class="m-tasks__column-icon ua-icon-task-label"></span>
                        <span class="m-tasks__column-name">New</span>
                    </div>
                    <div class="m-tasks__items">
                        <?php foreach ($all_atask as $single_task) {
                            if ($single_task['status'] == 'NEW') { ?>
                                <div class="m-tasks__item list-group-item">

                                    <h6 class="m-tasks__item-name"><?php echo $single_task['title']; ?></h6>
                                    <div class="m-tasks__item-desc">
                                        <?php echo $single_task['description']; ?>
                                        <a href="<?php echo base_url(); ?>staff/change_task_status/<?php echo $single_task['task_id']; ?>/PENDING"<span
                                                class="m-tasks__item-priority m-tasks__item-priority--normal"
                                                style="float:right;"><button class="btn icon-left sidebar-user-a__link">PENDING</button></span></a>
                                    </div>

                                </div>
                            <?php }
                        } ?>
                    </div>

                </div>
                <div class="m-tasks__column m-tasks__column--pending list-group">
                    <div class="m-tasks__column-header">
                        <span class="m-tasks__column-icon ua-icon-task-label"></span>
                        <span class="m-tasks__column-name">Pending</span>
                    </div>
                    <div class="m-tasks__items">
                        <?php foreach ($all_atask as $single_task) {
                            if ($single_task['status'] == "PENDING") { ?>
                                <div class="m-tasks__item list-group-item">

                                    <h6 class="m-tasks__item-name"><?php echo $single_task['title']; ?></h6>
                                    <div class="m-tasks__item-desc">
                                        <?php echo $single_task['description']; ?>
                                        <a href="<?php echo base_url(); ?>staff/change_task_status/<?php echo $single_task['task_id']; ?>/COMPLETED"<span
                                                class="m-tasks__item-priority m-tasks__item-priority--normal"
                                                style="float:right;"><button class="btn icon-left sidebar-user-a__link">COMPLETED</button></span></a>
                                    </div>

                                </div>
                            <?php }
                        } ?>
                    </div>
                </div>
                <div class="m-tasks__column m-tasks__column--pending list-group">
                    <div class="m-tasks__column-header">
                        <span class="m-tasks__column-icon ua-icon-task-label"></span>
                        <span class="m-tasks__column-name">Completed</span>
                    </div>
                    <div class="m-tasks__items">
                        <?php foreach ($all_atask as $single_task) {
                            if ($single_task['status'] == "COMPLETED") { ?>
                                <div class="m-tasks__item list-group-item">

                                    <h6 class="m-tasks__item-name"><?php echo $single_task['title']; ?></h6>
                                    <div class="m-tasks__item-desc">
                                        <?php echo $single_task['description']; ?>

                                    </div>

                                </div>
                            <?php }
                        } ?>
                    </div>
                </div>

            </div>
        </div>
    </div>

</div>