<div class="x_panel">
    <div class="x_content">
        <div class="item form-group row">
            <div class="col-md-6 col-sm-6  form-group has-feedback">
                <label class="col-form-label col-md-12 col-sm-12">
                    <?= __('Họ và tên') ?>
                </label>
                <div class="col-md-12 col-sm-12 ">
                    <?php echo $this->Form->control(null,[
                        'class' => 'form-control pd-left-fr1',
                        'label' => false,
                        'disabled' => true,
                        'value' => $data['ho_ten'],
                        'readonly' => 'readonly'
                    ]); ?>
                  <span class="fa fa-user form-control-feedback left"></span>
                </div>
            </div>
            <div class="col-md-6 col-sm-6  form-group has-feedback">
                <label class="col-form-label col-md-12 col-sm-12">
                    <?= __('Số Tiền Vay') ?>
                </label>
                <div class="col-md-12 col-sm-12 ">
                    <?php echo $this->Form->control(null,[
                        'class' => 'form-control pd-left-fr1',
                        'label' => false,
                        'disabled' => true,
                        'value' => $this->Number->format($data['so_tien_vay'])."đ",
                        'readonly' => 'readonly'
                    ]); ?>
                  <span class="fa fa fa-money form-control-feedback left"></span>
                </div>
            </div>
            <div class="col-md-6 col-sm-6  form-group has-feedback">
                <label class="col-form-label col-md-12 col-sm-12">
                    <?= __('Kiểu vay') ?>
                </label>
                <div class="col-md-12 col-sm-12 ">
                    <?php echo $this->Form->control(null,[
                        'class' => 'form-control pd-left-fr1',
                        'label' => false,
                        'disabled' => true,
                        'value' => $data['ten_kieu_dong_lai'],
                        'readonly' => 'readonly'
                    ]); ?>
                  <span class="fa fa fa-money form-control-feedback left"></span>
                </div>
            </div>
            <div class="col-md-6 col-sm-6  form-group has-feedback">
                <label class="col-form-label col-md-12 col-sm-12">
                    <?php $ten_kieu_them = 'Số ngày'; ?>
                    <?php if (strpos(strtolower($data['ten_kieu_dong_lai']),"tuần")): ?>
                        <?php $ten_kieu_them = 'Số tuần'; ?>
                    <?php elseif (strpos(strtolower($data['ten_kieu_dong_lai']),"tháng")) :  ?>
                        <?php $ten_kieu_them = 'Số tháng'; ?>
                    <?php endif ?>
                    <?= $ten_kieu_them.__(' vay thêm') ?> <span style="color: red;">*</span>
                </label>
                <div class="col-md-12 col-sm-12">
                    <?php echo $this->Form->control('so_lan_gia_han',[
                        'type' => 'number',
                        'class' => 'form-control pd-left-fr1',
                        'label' => false,
                        'required' => 'required',
                        'id' => 'so_lan_gia_han',
                        'data-quanlyid' => $data['quanly_id'],
                        'data-kydongla' => $data['ky_dong_lai']
                    ]); ?>
                    <input type="hidden" name="" id="quanly_id" value="<?= $data['quanly_id'] ?>">
                    <input type="hidden" name="" id="ky_dong_lai" value="<?= $data['ky_dong_lai'] ?>">
                    <span class="fa fa-credit-card form-control-feedback left"></span>
                    <div class="hidden red" id="error_so_lan_gia_han"><?= __("Hãy điền thời gian vay thêm") ?></div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6 col-sm-6">
        <button type="submit" class="btn btn-info btn-lg" id="luu_thoigianvaythem"><?= __('Lưu') ?></button>
    </div>
</div>

<script type="text/javascript">
    jQuery(document).ready(function(){
        jQuery("#luu_thoigianvaythem").click(function(){
            var giatri_vaythem = jQuery('#so_lan_gia_han').val();
            var quanly_id = jQuery("#quanly_id").val();
            var kydonglai = jQuery("#ky_dong_lai").val();
            console.log(quanly_id);
            if (giatri_vaythem.length < 1) {
                jQuery('#error_so_lan_gia_han').removeClass('hidden');
                jQuery('#so_lan_gia_han').focus(); 
            } else {
                jQuery('#error_so_lan_gia_han').addClass('hidden');
                jQuery.ajax({
                    method: "GET",
                    url : "<?php echo $this->Url->build(['controller' => 'Quanlys','action' => 'themthoigianlai']) ?>",
                    data: {
                        quanly_id : quanly_id,
                        thoigiandonglai : giatri_vaythem,
                        kydonglai : kydonglai,
                    },
                    success: function (reponse) {
                        alert("thêm thời gian thành công");
                    },
                    error: function () {
                      console.log('Upload error');
                    }
                });
            }
        });


    });
</script>