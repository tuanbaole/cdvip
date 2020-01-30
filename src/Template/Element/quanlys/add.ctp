<div class="row">
    <div class="col-md-12 col-sm-12 ">
        <?= $this->Form->create($quanlys,[
            'class' => 'form-horizontal form-label-left',
            'novalidate' => true,
            'id' => 'formkhachhang',
            'enctype' => 'multipart/form-data',
            'url' => [
            	'controller' => 'quanlys',
            	'action' => 'add'
            ]
        ]) ?>
        <div class="x_panel">
            <div class="x_title">
                <h2><?= __('Khách hàng') ?></h2>
                <ul class="nav navbar-right panel_toolbox width-r">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <div class="item form-group row">
                    <div class="col-md-6 col-sm-6  form-group has-feedback">
                        <label class="col-form-label col-md-4 col-sm-4 label-align">
                            <?= __('Họ Tên') ?> <span style="color: red;">*</span>
                        </label>
                        <div class="col-md-8 col-sm-8 ">
                            <?php echo $this->Form->control('ho_ten',[
                                'class' => 'form-control pd-left-fr1',
                                'label' => false,
                                'placeholder' => __('Họ và tên (bắt buộc điền)'),
                                'required' => 'required',
                                'id' => 'ho_ten'
                            ]); ?>
                          <span class="fa fa-user form-control-feedback left"></span>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6  form-group has-feedback">
                        <label class="col-form-label col-md-4 col-sm-4 label-align">
                            <?= __('SĐT') ?> <span style="color: red;">*</span>
                        </label>
                        <div class="col-md-8 col-sm-8 ">
                            <?php echo $this->Form->control('sdt',[
                            	'type' => 'number',
                                'class' => 'form-control pd-left-fr1',
                                'label' => false,
                                'placeholder' => __('Số Điện Thoại (bắt buộc điền)')
                            ]); ?>
                            <span class="fa fa-phone form-control-feedback left"></span>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6  form-group has-feedback">
                        <label class="col-form-label col-md-4 col-sm-4 label-align"><?= __('CMT') ?></label>
                        <div class="col-md-8 col-sm-8 ">
                            <?php echo $this->Form->control('so_cmt',[
                                'class' => 'form-control pd-left-fr1',
                                'label' => false,
                                'placeholder' => __('Số Chứng minh thư'),
                                'require' => false
                            ]); ?>
                            <span class="fa fa-barcode form-control-feedback left"></span>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6  form-group has-feedback">
                        <label class="col-form-label col-md-4 col-sm-4 label-align"><?= __('Địa Chỉ') ?></label>
                        <div class="col-md-8 col-sm-8 ">
                            <?php echo $this->Form->control('dia_chi',[
                                'class' => 'form-control pd-left-fr1',
                                'label' => false,
                                'type' => 'text',
                                'placeholder' => __('Địa Chỉ')
                            ]); ?>
                            <span class="fa fa-map-marker form-control-feedback left"></span>
                        </div>
                    </div> 
                    <div class="col-md-6 col-sm-6  form-group has-feedback hidden" id="form-ngaysinhkh">
                        <label class="col-form-label col-md-4 col-sm-4 label-align"><?= __('Ngày Sinh') ?></label>
                        <div class="col-md-8 col-sm-8 ">
                            <?php echo $this->Form->control('ngay_sinh_kh',[
                                'type' => 'text',
                                'class' => 'form-control pd-left-fr1',
                                'label' => false,
                                'id'    => 'ngay_sinh_kh',
                                'readonly' => 'readonly',
                            ]); ?>
                            <span class="fa fa fa-calendar form-control-feedback left"></span>
                        </div>
                    </div>  
                    <div class="col-md-6 col-sm-6  form-group has-feedback hidden" id="form-ngaycapkh">
                        <label class="col-form-label col-md-4 col-sm-4 label-align"><?= __('Ngày Cấp') ?></label>
                        <div class="col-md-8 col-sm-8 ">
                            <?php echo $this->Form->control('ngay_cap_kh',[
                                'type' => 'text',
                                'class' => 'form-control pd-left-fr1',
                                'label' => false,
                                'id'    => 'ngay_cap_kh',
                                'readonly' => 'readonly',
                            ]); ?>
                            <span class="fa fa fa-calendar form-control-feedback left"></span>
                        </div>
                    </div> 
                    <div class="col-md-6 col-sm-6  form-group has-feedback hidden" id="form-noicap">
                        <label class="col-form-label col-md-4 col-sm-4 label-align">
                            <?= __('Nơi Cấp') ?>
                        </label>
                        <div class="col-md-8 col-sm-8 ">
                            <?php echo $this->Form->control('noi_cap',[
                                'class' => 'form-control pd-left-fr1',
                                'label' => false,
                                'placeholder' => __('Nơi Cấp')
                            ]); ?>
                            <span class="fa fa-map-marker form-control-feedback left"></span>
                        </div>
                    </div>
                   <!--  <div class="col-md-6 col-sm-6  form-group has-feedback">
                        <label class="col-form-label col-md-4 col-sm-4 label-align"><?= __('Ảnh (Nếu Có)') ?></label>
                        <div class="col-md-8 col-sm-8 ">
                            <?php 
                                // echo $this->Form->control('img_khachhang',[
                                //     'class' => 'form-control pd-left-fr1',
                                //     'type' => 'file',
                                //     'multiple' => true,
                                //     'label' => false,
                                //     'require' => false,
                                //     'accept' => 'image/*',
                                //     'name' => 'img_khachhang'
                                // ]); 
                            ?>
                            <span class="fa fa-camera form-control-feedback left"></span>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>

        <div class="x_panel">
            <div class="x_title">
                <h2><?= __('Thảo Thuận') ?></h2>
                <ul class="nav navbar-right panel_toolbox width-r">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <div class="row">
                    <div class="col-md-6 col-sm-6  form-group has-feedback">
                        <label class="col-form-label col-md-4 col-sm-4 label-align">
                            <?= __('Ngày Vay') ?> <span style="color: red;">*</span>
                        </label>
                        <div class="col-md-8 col-sm-8 ">
                            <?php echo $this->Form->control('thoi_gian_bat_dau_vay',[
                                'class' => 'form-control pd-left-fr1',
                                'label' => false,
                                'id' => 'ngay_vay',
                                'type' => 'text',
                                'required' => 'required',
                                'readonly' => 'readonly',
                            ]); ?>
                            <span class="fa fa-calendar form-control-feedback left"></span>
                        </div>
                    </div>
                </div>

                <div class="row hidden">    
                    <div class="col-md-6 col-sm-6  form-group has-feedback">
                        <label class="col-form-label col-md-4 col-sm-4 label-align"><?= __('Ngày Trả Gốc') ?></label>
                        <div class="col-md-8 col-sm-8 ">
                            <?php echo $this->Form->control('thoi_gian_ket_thuc_vay',[
                                'class' => 'form-control  pd-left-fr1',
                                'label' => false,
                                'id' => 'ngay_tra',
                                'type' => 'text',
                                'required' => 'required',
                                'placeholder' => date("d/m/Y")
                                
                            ]); ?>
                            <span class="fa fa fa-calendar form-control-feedback left"></span>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 col-sm-6  form-group has-feedback">
                        <label class="col-form-label col-md-4 col-sm-4 label-align">
                            <?= __('Số tiền vay') ?> <span style="color: red;">*</span>
                        </label>
                        <div class="col-md-8 col-sm-8 ">
                            <?php echo $this->Form->control('so_tien_vay',[
                                'class' => 'form-control pd-left-fr1',
                                'label' => false,
                                'div' => false,
                                'placeholder' => __('10,000'),
                                'type' => 'text',
                                'required' => 'required',
                                'onkeyup' => 'reformatText(this)'
                            ]); ?>
                            <span class="fa fa-money form-control-feedback left"></span>
                            <span class="form-control-feedback right">VND</span>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 col-sm-6  form-group has-feedback">
                        <label class="col-form-label col-md-4 col-sm-4 label-align">
                            <span><?= __('Hình thức lãi') ?></span> <span style="color: red;">*</span>
                        </label>
                        <div class="col-md-8 col-sm-8 ">
                            <?php echo $this->Form->control('kieudonglai_id', [
                                'options' => $kieudonglais,
                                'class' => 'form-control pd-left-fr1',
                                'label' => false,
                                'div' => false,
                                'value' => array_key_first($kieudonglais->toArray()),
                                'id' => 'kieudonglai_id',
                                'data-val' => array_key_first($kieudonglais->toArray())
                            ]); ?>
                            <span class="fa fa-calculator form-control-feedback left"></span>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 col-sm-6  form-group has-feedback">
                        <label class="col-form-label col-md-4 col-sm-4 label-align">
                            <span id="label_laixuat"><?= __('Lãi xuất') ?></span> <span style="color: red;">*</span>
                        </label>
                        <div class="col-md-8 col-sm-8 ">
                            <?php echo $this->Form->control('lai_xuat_ngay',[
                                'class' => 'form-control pd-left-fr1',
                                'label' => false,
                                'type' => 'number',
                                'type' => 'text',
                                'required' => 'required',
                                'onkeyup' => 'reformatText(this)',
                                'placeholder' => __('Nhập Lãi Xuất')
                            ]); ?>
                            <span class="fa fa-calculator form-control-feedback left"></span>
                            <span class="form-control-feedback right" id="dongia_laixuat">VND</span>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6  form-group">
                        <div class="col-form-label col-md-12 col-sm-12">
                            <span id="label_lai_xuat_ngay" class="red"><?= __('Ví dụ : lãi tính 1K/1triệu nhập 1000') ?></span>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 col-sm-6  form-group has-feedback">
                        <label class="col-form-label col-md-4 col-sm-4 label-align">
                            <span id="label_ky_dong_lai"><?= __('Kỳ đóng lãi') ?></span> <span style="color: red;">*</span>
                        </label>
                        <div class="col-md-8 col-sm-8 ">
                            <?php echo $this->Form->control('ky_dong_lai',[
                                'class' => 'form-control pd-left-fr1',
                                'label' => false,
                                'type' => 'number',
                                'placeholder' => __('Ví Dụ Nhập: 10'),
                                'required' => 'required',
                            ]); ?>
                            <span class="fa fa-calendar-o form-control-feedback left"></span>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6  form-group">
                        <div class="col-form-label col-md-12 col-sm-12">
                            <span id="label_ky_kieu_dong_lai" class="red"><?= __('Ví dụ : 10 ngày đóng lãi 1 lần nhập số 10') ?></span>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4  form-group has-feedback hidden">
                        <?php echo $this->Form->control('kieu_ky_dong_lai',[
                            'type' => 'radio',
                            'options' => [
                                ['value' => 0, 'text' => __('Ngày')],
                                ['value' => 1, 'text' => __('Tháng')]
                            ],
                            'class' => 'form-control flat',
                            'label' => false,
                            'div' => false,
                            'value' => 0,
                            'data-val' => 0,
                            'id' => 'kieu_ky_dong_lai',
                        ]); ?>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 col-sm-6  form-group has-feedback">
                        <label class="col-form-label col-md-4 col-sm-4 label-align">
                            <span id="label_thoi_gian_vay"><?= __('Số Ngày Vay') ?></span> <span style="color: red;">*</span>
                        </label>
                        <div class="col-md-8 col-sm-8 ">
                            <?php echo $this->Form->control('so_ngay_vay',[
                                'type' => 'number',
                                'class' => 'form-control pd-left-fr1',
                                'label' => false,
                                'required' => 'required',
                                'placeholder' => __('Ví Dụ Nhập: 30'),
                            ]); ?>
                            <span class="fa fa-credit-card form-control-feedback left"></span>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6  form-group">
                        <div class="col-form-label col-md-12 col-sm-12">
                            <span id="label_so_ngay_vay" class="red"><?= __('Ví dụ : vay 10 ngày nhập 10') ?></span>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 col-sm-6  form-group has-feedback" id="kieutralailb">
                        <label class="col-form-label col-md-4 col-sm-4 label-align"><?= __('Kiểu Trả') ?></label>
                        <div class="col-md-8 col-sm-8 ">
                            <?php echo $this->Form->control('kieu_dong_lai',[
                                'type' => 'radio',
                                'class' => 'form-control flat',
                                'options' => [
                                    ['value' => 1, 'text' => __('Trả Sau')],
                                    ['value' => 0, 'text' => __('Trả Trước')]
                                ],
                                'label' => false,
                                'value' => 1,
                                'data-val' => 1
                            ]); ?>
                        </div>
                    </div>
                </div>

                

                <div class="row hidden">
                    <div class="col-md-6 col-sm-6  form-group has-feedback">
                        <label class="col-form-label col-md-4 col-sm-4 label-align"><?= __('Giấy tờ') ?></label>
                        <div class="col-md-8 col-sm-8 ">
                            <?php echo $this->Form->control('giay_to_the_chap',[
                                'class' => 'form-control pd-left-fr1',
                                'label' => false,
                                'type' => 'text',
                                'placeholder' => __('Giấy tờ thế chấp'),
                            ]); ?>
                            <span class="fa fa-file-text-o form-control-feedback left"></span>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-md-6 col-sm-6  form-group has-feedback">
                        <label class="col-form-label col-md-4 col-sm-4 label-align"><?= __('Ghi Chú') ?></label>
                        <div class="col-md-8 col-sm-8 ">
                            <?php echo $this->Form->control('ghi_chu',[
                                    'class' => 'form-control pd-left-fr1',
                                    'label' => false,
                                    'type' => 'text',
                                    'placeholder' => __('Ghi Chú'),
                                ]);
                            ?>
                            <span class="fa fa-file-text-o form-control-feedback left"></span>
                        </div>
                    </div>
                </div>
            </div> 
        </div>  

         <div class="x_panel">
            <div class="x_title">
                <h2><?= __('Tài Sản') ?></h2>
                <ul class="nav navbar-right panel_toolbox width-r">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <div class="col-md-4 col-sm-4 form-group has-feedback">
                    <label class="col-form-label col-md-4 col-sm-4 label-align"><?= __('Tài Sản') ?></label>
                    <div class="col-md-8 col-sm-8 ">
                        <?php echo $this->Form->control('taisan_id',[
                            'class' => 'form-control pd-left-fr1',
                            'label' => false,
                            'require' => false
                        ]); ?>
                        <span class="fa fa-plus form-control-feedback left"></span>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4  form-group has-feedback">
                    <label class="col-form-label col-md-4 col-sm-4 label-align"><?= __('Nhãn Hiệu') ?></label>
                    <div class="col-md-8 col-sm-8 ">
                        <?php echo $this->Form->control('ten_tai_san',[
                            'class' => 'form-control pd-left-fr1',
                            'label' => false,
                            'placeholder' => __('Lead 2019')
                        ]); ?>
                        <span class="fa fa fa-pencil form-control-feedback left"></span>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4  form-group has-feedback">
                    <label class="col-form-label col-md-4 col-sm-4 label-align"><?= __('Số Khung') ?></label>
                    <div class="col-md-8 col-sm-8 ">
                        <?php echo $this->Form->control('so_khung',[
                            'class' => 'form-control pd-left-fr1',
                            'label' => false,
                            'require' => false,
                            'placeholder' => __('Số Khung')
                        ]); ?>
                        <span class="fa fa fa-pencil form-control-feedback left"></span>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 form-group has-feedback">
                    <label class="col-form-label col-md-4 col-sm-4 label-align"><?= __('Số Máy') ?></label>
                    <div class="col-md-8 col-sm-8 ">
                        <?php echo $this->Form->control('so_may',[
                            'class' => 'form-control  pd-left-fr1',
                            'label' => false,
                            'require' => false,
                            'placeholder' => __('Số Máy')
                        ]); ?>
                        <span class="fa fa fa-pencil form-control-feedback left"></span>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4  form-group has-feedback">
                    <label class="col-form-label col-md-4 col-sm-4 label-align"><?= __('Biển Số') ?></label>
                    <div class="col-md-8 col-sm-8 ">
                        <?php echo $this->Form->control('bien_so', [
                            'class' => 'form-control  pd-left-fr1',
                            'label' => false,
                            'require' => false,
                            'placeholder' => __('29T1-123.45')
                        ]); ?>
                        <span class="fa fa fa-pencil form-control-feedback left"></span>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4  form-group has-feedback">
                    <label class="col-form-label col-md-4 col-sm-4 label-align"><?= __('Imei') ?></label>
                    <div class="col-md-8 col-sm-8 ">
                        <?php echo $this->Form->control('imei',[
                            'class' => 'form-control  pd-left-fr1',
                            'label' => false,
                            'require' => false,
                            'placeholder' => __('IMEI')
                        ]); ?>
                        <span class="fa fa fa-pencil form-control-feedback left"></span>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4  form-group has-feedback">
                    <label class="col-form-label col-md-4 col-sm-4 label-align"><?= __('Mật Khẩu') ?></label>
                    <div class="col-md-8 col-sm-8 ">
                        <?php echo $this->Form->control('mat_khau',[
                            'class' => 'form-control  pd-left-fr1',
                            'label' => false,
                            'require' => false,
                            'placeholder' => __('Mật Khẩu')
                        ]); ?>
                        <span class="fa fa fa-pencil form-control-feedback left"></span>
                    </div>
                </div>
                <!-- <div class="col-md-4 col-sm-4  form-group has-feedback">
                    <label class="col-form-label col-md-4 col-sm-4 label-align"><?= __('Ảnh Tài Sản') ?></label>
                    <div class="col-md-8 col-sm-8 ">
                        <?php 
                            // echo $this->Form->control('img_tai_san_kh',[
                            //     'class' => 'form-control  pd-left-fr1',
                            //     'type'=>'file',
                            //     'multiple' => true,
                            //     'label' => false,'require' => false
                            // ]); 
                        ?>
                        <span class="fa fa-camera form-control-feedback left"></span>
                    </div>
                </div> -->
            </div>
        </div>  

        <div class="row">
            <div class="col-md-6 col-sm-6">
                <button type="submit" class="btn btn-info btn-lg"><?= __('Lưu') ?></button>
            </div>
        </div>
        <?= $this->Form->end() ?>
    </div>
</div>
<div class="hidden" data-date="<?= date('d/m/Y'); ?>" id="dateday"><?= date('d/m/Y'); ?></div>
<script type="text/javascript">
jQuery(document).ready(function(){
    jQuery('#ngay_sinh_kh').daterangepicker({
        timeZone: 'Asia/Ho_Chi_Minh',
        locale: {
            format: 'DD/MM/YYYY',
            "daysOfWeek": [
                "CN", "T2", "T3", "T4", "T5", "T6", "T7"
            ],
            "monthNames": ["Tháng một", "Tháng hai", "Tháng ba", "Tháng tư", "Tháng năm", "Tháng sáu", "Tháng bảy", "Tháng tám", "Tháng chín", "Tháng mười", "Tháng mười một", "Tháng mười hai"]
        },
        singleDatePicker: true,
        singleClasses: "picker_1"
    }, function(start, end, label) {
        console.log(start.toISOString(), end.toISOString(), label);
    });

    jQuery('#ngay_cap_kh').daterangepicker({
        timeZone: 'Asia/Ho_Chi_Minh',
        locale: {
            format: 'DD/MM/YYYY',
            "daysOfWeek": [
                "CN", "T2", "T3", "T4", "T5", "T6", "T7"
            ],
            "monthNames": ["Tháng một", "Tháng hai", "Tháng ba", "Tháng tư", "Tháng năm", "Tháng sáu", "Tháng bảy", "Tháng tám", "Tháng chín", "Tháng mười", "Tháng mười một", "Tháng mười hai"]
        },
        singleDatePicker: true,
        singleClasses: "picker_1"
    }, function(start, end, label) {
      console.log(start.toISOString(), end.toISOString(), label);
    });

    jQuery('#ngay_vay').daterangepicker({
        timeZone: 'Asia/Ho_Chi_Minh',
        locale: {
            format: 'DD/MM/YYYY',
            "daysOfWeek": [
                "CN", "T2", "T3", "T4", "T5", "T6", "T7"
            ],
            "monthNames": ["Tháng một", "Tháng hai", "Tháng ba", "Tháng tư", "Tháng năm", "Tháng sáu", "Tháng bảy", "Tháng tám", "Tháng chín", "Tháng mười", "Tháng mười một", "Tháng mười hai"]
        },
        singleDatePicker: true,
        singleClasses: "picker_1"
    }, function(start, end, label) {
      console.log(start.toISOString(), end.toISOString(), label);
    });

    jQuery('#ngay_tra').daterangepicker({
        timeZone: 'Asia/Ho_Chi_Minh',
        locale: {
            format: 'DD/MM/YYYY',
            "daysOfWeek": [
                "CN", "T2", "T3", "T4", "T5", "T6", "T7"
            ],
            "monthNames": ["Tháng một", "Tháng hai", "Tháng ba", "Tháng tư", "Tháng năm", "Tháng sáu", "Tháng bảy", "Tháng tám", "Tháng chín", "Tháng mười", "Tháng mười một", "Tháng mười hai"]
        },
        singleDatePicker: true,
        singleClasses: "picker_1"
    }, function(start, end, label) {
      console.log(start.toISOString(), end.toISOString(), label);
    });



    // jQuery('input[for=kieudonglai_id-1]').click(function(){
    //     var text = jQuery(this).text();
    //     jQuery('#label_laixuat').text(text);
    //     jQuery('#lai-xuat-ngay').attr("placeholder", "5,000");
    // });

    // jQuery('label[for=kieudonglai_id-2]').click(function(){
    //     var text = jQuery(this).text();
    //     jQuery('#label_laixuat').text(text);
    //     jQuery('#lai-xuat-ngay').attr("placeholder", "5,000");
    // });

    // jQuery('label[for=kieudonglai_id-3]').click(function(){
    //     var text = jQuery(this).text();
    //     jQuery('#label_laixuat').text(text);
    //     jQuery('#lai-xuat-ngay').attr("placeholder", "%");
    // });
    
    jQuery.validator.addMethod("greaterThan", 
    function(value, element, params) {
        var d1 = value.split("/");
        var d2 = $(params).val().split("/");
        if (d1[2] > d2[2]) {
            console.log('true1');
            return true;
        } else if (d1[2] == d2[2]) {
            if (d1[1] > d2[1]) {
                console.log('true2');
                return true;
            } else if (d1[1] == d2[1]) {
                if (d1[0] > d2[0]) {
                    console.log('true3');
                    return true;
                } else if (d1[0] == d2[0]) {
                     console.log('false1');
                    return false;
                } else {
                    console.log('false2');
                    return false;
                }
            } else {
                 console.log('false3');
                return false;
            }
        } else {
             console.log('false4');
            return false;
        }
    },'Must be greater than {0}.');

    jQuery.validator.addMethod("comperNumber", 
    function(value, element, params) {
        var d1 = value;
        var d2 = $(params).val();
        if (parseInt(d1) >= parseInt(d2)) {
            console.log('true');
            return true;
        } else {
            console.log('false');
            return false;
        }
    },'Thời gian vay phải lớn hơn số lần đóng lãi.');

    //Khi bàn phím được nhấn và thả ra thì sẽ chạy phương thức này
    jQuery("#formkhachhang").validate({
        rules: {
            ho_ten: "required",
            sdt: {
                required: true,
                minlength: 9,
                maxlength: 12,
            },
            so_tien_vay : "required",
            lai_xuat_ngay : "required",
            ky_dong_lai : "required",
            thoi_gian_bat_dau_vay : "required",
            thoi_gian_ket_thuc_vay : {
                required: true,
                greaterThan: '#ngay_vay',
            },
            so_ngay_vay : {
                required: true,
                comperNumber: '#ky-dong-lai',
            }
            
        },
        messages: {
            ho_ten: "Vui lòng nhập họ tên", 
            sdt : {
                required: "Vui lòng nhập số điện thoại",
                minlength: "Hãy nhập đủ 10 ký tự",
                maxlength: "không nhập quá 12 ký tự"
            },
            so_tien_vay :  "Vui lòng nhập số tiền vay",
            lai_xuat_ngay : "Hãy nhập lãi xuất",
            ky_dong_lai: "Hãy nhập số lần trả lãi",
            thoi_gian_bat_dau_vay : "Hãy nhập ngày vay",
            thoi_gian_ket_thuc_vay : {
                required : "Hãy nhập ngày trả",
                greaterThan : "Ngày trả phải lớn hơn ngày vay",
            },
            so_ngay_vay : {
                required : "Hãy nhập số Thời gian",
                comperNumber : "Thời gian vay phải lớn hơn số lần đóng lãi",
            },
        }
    });

    jQuery('#so-cmt').click(function() {
        jQuery('#form-ngaysinhkh').removeClass('hidden');
        jQuery('#form-ngaycapkh').removeClass('hidden');
        jQuery('#form-noicap').removeClass('hidden');
    });
    

    // jQuery('#ky-dong-lai').change(function() {
    //     var kydonglai = jQuery(this).val();
    //     var kieukydonglai = jQuery('input[name=kieu_ky_dong_lai]:checked', '#formkhachhang').val()
    //     console.log(kydonglai);
    //     console.log(kieukydonglai);
    //     var date = new Date('03/10/2020');
    //     var correctDate = formatDate(addDays(date, 40));
    //     var failDate = formatDate(addDaysWRONG(date, 1));
    //     var failDstDate = formatDate(addDaysDstFail(date, 1));
    //     console.log(correctDate);
    // })

    // // Correct
    // function addDays(date, days) {
    //     var result = new Date(date);
    //     result.setDate(date.getDate() + days);
    //     return result;
    // }


    // // Bad Year/Month
    // function addDaysWRONG(date, days) {
    //     var result = new Date();
    //     result.setDate(date.getDate() + days);
    //     return result;
    // }

    // // Bad during DST
    // function addDaysDstFail(date, days) {
    //     var dayms = (days * 24 * 60 * 60 * 1000);
    //     return new Date(date.getTime() + dayms);    
    // }


    // // TEST

    // function formatDate(date) {
    //     return (date.getMonth() + 1) + '/' + date.getDate() + '/' + date.getFullYear();
    // }

});

String.prototype.reverse = function () {
    return this.split("").reverse().join("");
}

function reformatText(input) {        
    var x = input.value;
    x = x.replace(/,/g, ""); // Strip out all commas
    x = x.reverse();
    x = x.replace(/.../g, function (e) {
        return e + ",";
    }); // Insert new commas
    x = x.reverse();
    x = x.replace(/^,/, ""); // Remove leading comma
    input.value = x;
}

</script>