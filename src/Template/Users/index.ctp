<div class="x_panel">
    <div class="x_title">
        <h2><small><?= __('Quản Lý Tài Khoản') ?></small></h2>
        <ul class="nav navbar-right panel_toolbox">
            <li class="dropdown-mv">
                <a href="<?= $this->Url->build(array('controller'=>'Users','action'=>'add')); ?>" class="color-black"><i class="glyphicon glyphicon-plus"></i> <?= __('Thêm Mới') ?></a>
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
                            <th style="min-width: 120px;"><?= $this->Paginator->sort('username',__('Tài Khoản')) ?></th>
                            <th style="min-width: 120px;"><?= $this->Paginator->sort('link_mobile',__('Link MB')) ?></th>
                            <th style="min-width: 120px;"><?= $this->Paginator->sort('pd_mobile',__('Mật Khẩu MB')) ?></th>
                            <th style="min-width: 120px;"><?= $this->Paginator->sort('ngay_het_han',__('Ngày Hết Hạn')) ?></th>
                            <th style="min-width: 120px;"><?= $this->Paginator->sort('sdt',__('Số Điện Thoại')) ?></th>
                            <th style="min-width: 120px;"><?= $this->Paginator->sort('dia_chi',__('Địa Chỉ')) ?></th>
                            <th style="min-width: 120px;"><?= $this->Paginator->sort('group_id',__('Nhóm')) ?></th>
                            <th style="min-width: 120px;"><?= $this->Paginator->sort('created',__('Ngày Tạo')) ?></th>
                            <th style="min-width: 120px;"><?= $this->Paginator->sort('modified',__('Ngày Sửa')) ?></th>
                            <th style="width: 30px;"><?= __('Hoạt Động') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($users as $user): ?>
                            <tr>
                                <td><?= $this->Number->format($user->id) ?></td>
                                <td><?= h($user->username) ?></td>
                                <td><?= h($user->link_mobile) ?></td>
                                <td><?= h($user->pd_mobile) ?></td>
                                <td><?= date("d-m-Y", strtotime(h($user->ngay_het_han))); ?></td>
                                <td><?= h($user->sdt) ?></td>
                                <td><?= h($user->dia_chi) ?></td>
                                <td><?= h($user->group_id) ?></td>
                                <td><?= date("d-m-Y", strtotime(h($user->created))); ?></td>
                                <td><?= date("d-m-Y", strtotime(h($user->modified))); ?></td>
                                <td class="actions">
                                    <div class="input-group-btn">
                                    <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" style="font-size: 14px;">Chỉnh Sửa <span class="caret"></span></button>
                                    <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                        <li>
                                            <a href="<?= $this->Url->build(['action' => 'edit', $user->id]); ?>" class="dropdown-item">
                                                <i class="fa fa-edit"></i> <?= __('Sửa') ?>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?= $this->Url->build(['action' => 'delete', $user->id]); ?>" class="dropdown-item" onclick="return confirm('Bạn có chắc muốn xóa không?')">
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
        </div><!-- #datatable_wrapper --> 
    </div><!-- .card-box --> 
    <?= $this->element('paginator'); ?>
</div>
</div>