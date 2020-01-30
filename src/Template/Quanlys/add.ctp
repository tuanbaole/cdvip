<div class="row">
    <div class="col-md-12 col-sm-12 ">
        <?= $this->Form->create($quanly,[
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
                        <label class="col-form-label col-md-3 col-sm-3 label-align">
                            <?= __('Họ Tên') ?> <span style="color: red;">*</span>
                        </label>
                        <div class="col-md-9 col-sm-9 ">
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
                        <label class="col-form-label col-md-3 col-sm-3 label-align">
                            <?= __('Số Điện Thoại') ?> <span style="color: red;">*</span>
                        </label>
                        <div class="col-md-9 col-sm-9 ">
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
                        <label class="col-form-label col-md-3 col-sm-3 label-align"><?= __('Chứng minh thư') ?></label>
                        <div class="col-md-9 col-sm-9 ">
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
                        <label class="col-form-label col-md-3 col-sm-3 label-align"><?= __('Địa Chỉ') ?></label>
                        <div class="col-md-9 col-sm-9 ">
                            <?php echo $this->Form->control('dia_chi',[
                                'class' => 'form-control pd-left-fr1',
                                'label' => false,
                                'type' => 'text',
                                'placeholder' => __('Địa Chỉ')
                            ]); ?>
                            <span class="fa fa-map-marker form-control-feedback left"></span>
                        </div>
                    </div> 
                    <div class="col-md-6 col-sm-6  form-group has-feedback">
                        <label class="col-form-label col-md-3 col-sm-3 label-align"><?= __('Ngày Sinh') ?></label>
                        <div class="col-md-9 col-sm-9 ">
                            <?php echo $this->Form->control('ngay_sinh_kh',[
                                'type' => 'text',
                                'class' => 'form-control pd-left-fr1',
                                'label' => false,
                                'id'    => 'ngay_sinh_kh',
                                
                            ]); ?>
                            <span class="fa fa fa-calendar form-control-feedback left"></span>
                        </div>
                    </div>  
                    <div class="col-md-6 col-sm-6  form-group has-feedback">
                        <label class="col-form-label col-md-3 col-sm-3 label-align"><?= __('Ngày Cấp') ?></label>
                        <div class="col-md-9 col-sm-9 ">
                            <?php echo $this->Form->control('ngay_cap_kh',[
                                'type' => 'text',
                                'class' => 'form-control pd-left-fr1',
                                'label' => false,
                                'id'    => 'ngay_cap_kh',

                            ]); ?>
                            <span class="fa fa fa-calendar form-control-feedback left"></span>
                        </div>
                    </div> 
                    <div class="col-md-6 col-sm-6  form-group has-feedback">
                        <label class="col-form-label col-md-3 col-sm-3 label-align">
                            <?= __('Nơi Cấp') ?>
                        </label>
                        <div class="col-md-9 col-sm-9 ">
                            <?php echo $this->Form->control('noi_cap',[
                                'class' => 'form-control pd-left-fr1',
                                'label' => false,
                                'placeholder' => __('Nơi Cấp')
                            ]); ?>
                            <span class="fa fa-map-marker form-control-feedback left"></span>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6  form-group has-feedback">
                        <label class="col-form-label col-md-3 col-sm-3 label-align"><?= __('Ảnh (Nếu Có)') ?></label>
                        <div class="col-md-9 col-sm-9 ">
                            <?php echo $this->Form->control('img_khachhang',[
                                'class' => 'form-control pd-left-fr1',
                                'type' => 'file',
                                'label' => false,
                                'require' => false
                            ]); ?>
                            <span class="fa fa-camera form-control-feedback left"></span>
                        </div>
                    </div>
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
                <?php echo $this->Form->control('user_id',[
                    'options' => $users,
                    'class' => 'form-control hidden',
                    'label' => false,
                    'require' => false
                ]); ?>

                <div class="row">
                    <div class="col-md-6 col-sm-6  form-group has-feedback">
                        <label class="col-form-label col-md-3 col-sm-3 label-align"><?= __('Ngày Vay') ?></label>
                        <div class="col-md-9 col-sm-9 ">
                            <?php echo $this->Form->control('thoi_gian_bat_dau_vay',[
                                'class' => 'form-control pd-left-fr1',
                                'label' => false,
                                'id' => 'ngay_vay',
                                'type' => 'text'
                                
                            ]); ?>
                            <span class="fa fa-calendar form-control-feedback left"></span>
                        </div>
                    </div>
                </div>

                <div class="row">    
                    <div class="col-md-6 col-sm-6  form-group has-feedback">
                        <label class="col-form-label col-md-3 col-sm-3 label-align"><?= __('Ngày Trả Gốc') ?></label>
                        <div class="col-md-9 col-sm-9 ">
                            <?php echo $this->Form->control('thoi_gian_ket_thuc_vay',[
                                'class' => 'form-control  pd-left-fr1',
                                'label' => false,
                                'id' => 'ngay_tra',
                                'type' => 'text'
                                
                            ]); ?>
                            <span class="fa fa fa-calendar form-control-feedback left"></span>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 col-sm-6  form-group has-feedback">
                        <label class="col-form-label col-md-3 col-sm-3 label-align">
                            <?= __('Số tiền vay') ?> <span style="color: red;">*</span>
                        </label>
                        <div class="col-md-9 col-sm-9 ">
                            <?php echo $this->Form->control('so_tien_vay',[
                                'class' => 'form-control pd-left-fr1',
                                'label' => false,
                                'placeholder' => __('10,000'),
                                'type' => 'text',
                                'required' => 'required',
                                'onkeyup' => 'reformatText(this)'
                            ]); ?>
                            <span class="fa fa-money form-control-feedback left"></span>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 col-sm-6  form-group has-feedback">
                        <label class="col-form-label col-md-3 col-sm-3 label-align">
                            <span id="label_laixuat"><?= __('Lãi/triệu/ngày') ?></span> <span style="color: red;">*</span>
                        </label>
                        <div class="col-md-9 col-sm-9 ">
                            <?php echo $this->Form->control('lai_xuat_ngay',[
                                'class' => 'form-control pd-left-fr1',
                                'label' => false,
                                'type' => 'number',
                                'placeholder' => __('5,000'),
                                'type' => 'text',
                                'required' => 'required',
                                'onkeyup' => 'reformatText(this)'
                            ]); ?>
                            <span class="fa fa-calculator form-control-feedback left"></span>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6  form-group has-feedback">
                        <?php echo $this->Form->control('kieudonglai_id', [
                            'type' => 'radio',
                            'options' => $kieudonglais,
                            'class' => 'form-control flat',
                            'label' => false,
                            'div' => false,
                            'id' => 'kieudonglai_id'
                        ]); ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-6  form-group has-feedback">
                        <label class="col-form-label col-md-3 col-sm-3 label-align">
                            <?= __('Kỳ đóng lãi') ?> <span style="color: red;">*</span>
                        </label>
                        <div class="col-md-9 col-sm-9 ">
                            <?php echo $this->Form->control('ky_dong_lai',[
                                'class' => 'form-control pd-left-fr1',
                                'label' => false,
                                'type' => 'number',
                                'placeholder' => __('1'),
                                'required' => 'required',
                            ]); ?>
                            <span class="fa fa-calendar-o form-control-feedback left"></span>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6  form-group has-feedback">
                        <?php echo $this->Form->control('kieu_ky_dong_lai',[
                            'type' => 'radio',
                            'options' => [
                                ['value' => 0, 'text' => __('Ngày')],
                                ['value' => 1, 'text' => __('Tháng')]
                            ],
                            'class' => 'form-control flat',
                            'label' => false,
                            'div' => false,
                            'id' => 'kieu_ky_dong_lai'
                        ]); ?>
                    </div>
                </div>

                <div class="row hidden">
                    <div class="col-md-6 col-sm-6  form-group has-feedback">
                        <label class="col-form-label col-md-3 col-sm-3 label-align">
                            <?= __('Số Lần Trả') ?> <span style="color: red;">*</span>
                        </label>
                        <div class="col-md-9 col-sm-9 ">
                            <?php echo $this->Form->control('so_ngay_vay',[
                                'class' => 'form-control pd-left-fr1',
                                'label' => false,
                                'value' => 1
                            ]); ?>
                            <span class="fa fa-credit-card form-control-feedback left"></span>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 col-sm-6  form-group has-feedback">
                        <label class="col-form-label col-md-3 col-sm-3 label-align"><?= __('Kiểu đóng lãi') ?></label>
                        <div class="col-md-9 col-sm-9  form-group has-feedback" style="margin-left: -10px;">
                            <?php echo $this->Form->control('kieu_dong_lai',[
                                'type' => 'radio',
                                'options' => [
                                    ['value' => 1, 'text' => __('Trả Sau')],
                                    ['value' => 0, 'text' => __('Trả Trước')]
                                ],
                                'class' => 'form-control flat',
                                'label' => false
                            ]); ?>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 col-sm-6  form-group has-feedback">
                        <label class="col-form-label col-md-3 col-sm-3 label-align"><?= __('Giấy tờ') ?></label>
                        <div class="col-md-9 col-sm-9 ">
                            <?php echo $this->Form->control('giay_to_the_chap',[
                                'class' => 'form-control pd-left-fr1',
                                'label' => false,
                                'type' => 'text'
                            ]); ?>
                            <span class="fa fa-file-text-o form-control-feedback left"></span>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-md-6 col-sm-6  form-group has-feedback">
                        <label class="col-form-label col-md-3 col-sm-3 label-align"><?= __('Ghi Chú') ?></label>
                        <div class="col-md-9 col-sm-9 ">
                            <?php echo $this->Form->control('ghi_chu',[
                                    'class' => 'form-control pd-left-fr1',
                                    'label' => false,
                                    'type' => 'text'
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
                    <label class="col-form-label col-md-3 col-sm-3 label-align"><?= __('Tài Sản') ?></label>
                    <div class="col-md-9 col-sm-9 ">
                        <?php echo $this->Form->control('taisan_id',[
                            'class' => 'form-control pd-left-fr1',
                            'label' => false,
                            'require' => false
                        ]); ?>
                        <span class="fa fa-plus form-control-feedback left"></span>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4  form-group has-feedback">
                    <label class="col-form-label col-md-3 col-sm-3 label-align"><?= __('Nhãn Hiệu') ?></label>
                    <div class="col-md-9 col-sm-9 ">
                        <?php echo $this->Form->control('ten_tai_san',[
                            'class' => 'form-control pd-left-fr1',
                            'label' => false,
                            'placeholder' => __('Lead 2019')
                        ]); ?>
                        <span class="fa fa fa-pencil form-control-feedback left"></span>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4  form-group has-feedback">
                    <label class="col-form-label col-md-3 col-sm-3 label-align"><?= __('Số Khung') ?></label>
                    <div class="col-md-9 col-sm-9 ">
                        <?php echo $this->Form->control('so_khung',[
                            'class' => 'form-control pd-left-fr1',
                            'label' => false,
                            'require' => false
                        ]); ?>
                        <span class="fa fa fa-pencil form-control-feedback left"></span>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 form-group has-feedback">
                    <label class="col-form-label col-md-3 col-sm-3 label-align"><?= __('Số Máy') ?></label>
                    <div class="col-md-9 col-sm-9 ">
                        <?php echo $this->Form->control('so_may',[
                            'class' => 'form-control  pd-left-fr1',
                            'label' => false,
                            'require' => false
                        ]); ?>
                        <span class="fa fa fa-pencil form-control-feedback left"></span>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4  form-group has-feedback">
                    <label class="col-form-label col-md-3 col-sm-3 label-align"><?= __('Biển Số') ?></label>
                    <div class="col-md-9 col-sm-9 ">
                        <?php echo $this->Form->control('bien_so', [
                            'class' => 'form-control  pd-left-fr1',
                            'label' => false,
                            'require' => false
                        ]); ?>
                        <span class="fa fa fa-pencil form-control-feedback left"></span>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4  form-group has-feedback">
                    <label class="col-form-label col-md-3 col-sm-3 label-align"><?= __('Imei') ?></label>
                    <div class="col-md-9 col-sm-9 ">
                        <?php echo $this->Form->control('imei',[
                            'class' => 'form-control  pd-left-fr1',
                            'label' => false,
                            'require' => false
                        ]); ?>
                        <span class="fa fa fa-pencil form-control-feedback left"></span>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4  form-group has-feedback">
                    <label class="col-form-label col-md-3 col-sm-3 label-align"><?= __('Mật Khẩu') ?></label>
                    <div class="col-md-9 col-sm-9 ">
                        <?php echo $this->Form->control('mat_khau',[
                            'class' => 'form-control  pd-left-fr1',
                            'label' => false,
                            'require' => false
                        ]); ?>
                        <span class="fa fa fa-pencil form-control-feedback left"></span>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4  form-group has-feedback">
                    <label class="col-form-label col-md-3 col-sm-3 label-align"><?= __('Ảnh Tài Sản') ?></label>
                    <div class="col-md-9 col-sm-9 ">
                        <?php 
                            echo $this->Form->control('img_tai_san_kh',[
                                'class' => 'form-control  pd-left-fr1',
                                'type'=>'file',
                                'label' => false,'require' => false
                            ]); 
                        ?>
                        <span class="fa fa-camera form-control-feedback left"></span>
                    </div>
                </div>
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
<script type="text/javascript">
jQuery(document).ready(function(){
    jQuery('#ngay_sinh_kh').daterangepicker({
        timeZone: 'Asia/Ho_Chi_Minh',
        locale: {
            format: 'MM/DD/YYYY',
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

    jQuery('label[for=kieudonglai_id-1]').click(function(){
        var text = jQuery(this).text();
        jQuery('#label_laixuat').text(text);
        jQuery('#lai-xuat-ngay').attr("placeholder", "5,000");
    });

    jQuery('label[for=kieudonglai_id-2]').click(function(){
        var text = jQuery(this).text();
        jQuery('#label_laixuat').text(text);
        jQuery('#lai-xuat-ngay').attr("placeholder", "5,000");
    });

    jQuery('label[for=kieudonglai_id-3]').click(function(){
        var text = jQuery(this).text();
        jQuery('#label_laixuat').text(text);
        jQuery('#lai-xuat-ngay').attr("placeholder", "%");
    });
 
    //Khi bàn phím được nhấn và thả ra thì sẽ chạy phương thức này
    $("#formkhachhang").validate({
        rules: {
            ho_ten: "required",
            sdt: {
                required: true,
                minlength: 9,
                maxlength: 12,
            }
        },
        messages: {
            ho_ten: "Vui lòng nhập họ", 
            sdt : {
                required: "Vui lòng nhập số điện thoại",
                minlength: "Hãy nhập đủ 10 ký tự",
                maxlength: "không nhập quá 12 ký tự"
            },
            so_tien_vay : {
                required: "Vui lòng nhập số tiền vay",
            },
            lai_xuat_ngay : {
                required: "Hãy nhập lãi xuất",
            },
            ky_dong_lai: {
                required: "Hãy nhập số lần trả lãi",
            }
        }
    });

 

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