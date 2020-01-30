    <div class="x_panel">
        <div class="x_title">
            <h2><small><?= __('Kiểu Lãi') ?></small></h2>
            <ul class="nav navbar-right panel_toolbox">
                <li class="dropdown-mv">
                    <a href="<?= $this->Url->build(array('controller'=>'Kieudonglais','action'=>'add')); ?>" class="color-black"><i class="glyphicon glyphicon-plus"></i> <?= __('Thêm Mới') ?></a>
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
                            <tr>
                                <th><?= $this->Paginator->sort('id') ?></th>
                                <th><?= $this->Paginator->sort('ten_kieu_dong_lai',__('Dạng Lãi')) ?></th>
                                <th><?= $this->Paginator->sort('dang_lai',__('Dạng Lãi')) ?></th>
                                <th><?= $this->Paginator->sort('tinh_lai',__('Cách Tính Lãi')) ?></th>
                                <th><?= $this->Paginator->sort('he_so',__('Hệ Số')) ?></th>
                                <th class="actions" style="width: 30px;"><?= __('Hoạt Động') ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($kieudonglais as $kieudonglai): ?>
                                <tr>
                                    <td class="text-center"><?= $this->Number->format($kieudonglai->id) ?></td>
                                    <td class="text-center"><?= h($kieudonglai->ten_kieu_dong_lai) ?></td>
                                    <td class="text-center"><?= ($kieudonglai->dang_lai == 0) ? '%' : 'Nghìn'; ?></td>
                                    <td class="text-center">
                                        <?php 
                                            if($kieudonglai->tinh_lai == 0) {
                                                echo 'Ngày';
                                            } else if($kieudonglai->tinh_lai == 1)  {
                                                echo 'Tuần';
                                            } else {
                                                echo 'Tháng';
                                            }
                                        ?>
                                    </td>
                                    <td class="text-center">
                                        <?php 
                                            if($kieudonglai->he_so == 1) {
                                                echo 'Có Nhân Hệ Số';
                                            } else {
                                                echo 'Không Nhân Hệ Số';
                                            }
                                        ?>
                                    </td>
                                    <td  class="text-center">
                                        <div class="input-group-btn">
                                        <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" style="font-size: 14px;">Chỉnh Sửa <span class="caret"></span></button>
                                        <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                            <li>
                                                <a href="<?= $this->Url->build(['action' => 'edit', $kieudonglai->id]); ?>" class="dropdown-item">
                                                    <i class="fa fa-edit"></i> <?= __('Sửa') ?>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="<?= $this->Url->build(['action' => 'delete', $kieudonglai->id]); ?>" class="dropdown-item" onclick="return confirm('Bạn có chắc muốn xóa không?')">
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