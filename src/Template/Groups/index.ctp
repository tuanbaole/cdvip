    <div class="x_panel">
        <div class="x_title">
            <h2><small><?= __('Phân Quyền') ?></small></h2>
            <ul class="nav navbar-right panel_toolbox">
                <li class="dropdown-mv">
                    <a href="<?= $this->Url->build(array('controller'=>'Groups','action'=>'add')); ?>" class="color-black"><i class="glyphicon glyphicon-plus"></i> <?= __('Thêm Mới') ?></a>
                </li>
                <li class="dropdown-mv">
                    <a href="#" class="dropdown-toggle-mv color-black"><i class="glyphicon glyphicon-search"></i><?= __('Tìm Kiếm') ?></a>
                    <div class="dropdown-menu-mv top_search_mv">
                        <div class="form-group top_search">
                            <div class="input-group">
                                <input type="text" class="form-control ip_timkiem" placeholder="<?= __('Tìm Kiếm...') ?>">
                                <span class="input-group-btn">
                                  <button class="btn btn-default sb_timkiem" type="button"><i class="glyphicon glyphicon-search"></i></button>
                              </span>
                          </div>
                      </div>
                  </div>
              </li>
          </ul>
          <div class="clearfix">
          </div>
      </div>
      <div class="x_content">
        <div class="card-box table-responsive">
            <div id="datatable_wrapper" class="dataTables_wrapper dt-bootstrap no-footer">
                <div>
                    <table id="datatable" class="table table-striped table-bordered dataTable no-footer" style="width: 100%;" role="grid" aria-describedby="datatable_info">
                        <thead>
                            <tr role="row">
                                <th style="min-width: 20px;"><?= $this->Paginator->sort('id') ?></th>
                                <th style="min-width: 120px;"><?= $this->Paginator->sort('name_group',__('Tên Nhóm')) ?></th>
                                <th style="min-width: 100px;"><?= $this->Paginator->sort('permission',__('Quyền')) ?></th>
                                <th style="min-width: 100px;"><?= $this->Paginator->sort('created',__('Ngày Tạo')) ?></th>
                                <th style="min-width: 100px;"><?= $this->Paginator->sort('modified',__('Ngày Sửa')) ?></th>
                                <th style="width: 30px;"><?= __('Hoạt Động') ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($groups as $keygr => $group): ?>
                                <tr role="row" class="<?= ($keygr%2==0) ? 'odd' : 'event'?>">
                                    <td><?= $this->Number->format($group->id) ?></td>
                                    <td><?= h($group->name_group) ?></td>
                                    <td><?= $this->Number->format($group->permission) ?></td>
                                    <td><?= date("d-m-Y", strtotime(h($group->created))); ?></td>
                                    <td><?= date("d-m-Y", strtotime(h($group->modified))); ?></td>
                                    <td class="actions">
                                        <div class="input-group-btn">
                                        <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" style="font-size: 14px;">Chỉnh Sửa <span class="caret"></span></button>
                                        <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                            <li>
                                                <a href="<?= $this->Url->build(['action' => 'edit', $group->id]); ?>" class="dropdown-item">
                                                    <i class="fa fa-edit"></i> <?= __('Sửa') ?>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="<?= $this->Url->build(['action' => 'delete', $group->id]); ?>" class="dropdown-item" onclick="return confirm('Bạn có chắc muốn xóa không?')">
                                                    <i class="fa fa-trash"></i> <?= __('Xóa') ?>
                                                </a>
                                            </li>
                                        </ul>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <?= $this->element('paginator'); ?>
    </div>
</div>