<table class="table table-bordered table-responsive jambo_table">
    <thead>
        <tr>
            <td colspan="4" id="thanhtoan_hoten" style="width: 5000px;"><?php echo $data['ho_ten'] ?></td>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="text-right" style="min-width: 150px;width: 150px;">
                <b><?= __('Mã Hợp Đồng') ?></b>
            </td>
            <td style="min-width: 150px;width: 150px;"><?php echo __('HD-').$data['quanly_id'] ?></td>
            <td class="text-right" style="min-width: 150px;width: 150px;">
                <b><?= __('Họ và tên') ?></b>
            </td>
            <td style="min-width: 150px;width: 150px;"><?php echo $data['ho_ten'] ?></td>
        </tr>
        <tr>
            <td class="text-right" style="min-width: 150px;width: 150px;">
                <b><?= __('Số tiền vay') ?></b>
            </td>
            <td style="min-width: 150px;width: 150px;"><?php echo $data['tienvay'] ?>đ</td>
            <td class="text-right" style="min-width: 150px;width: 150px;">
                <b><?= __('Lãi xuất') ?></b>
            </td>
            <td style="min-width: 150px;width: 150px;"><?php echo $data['tienlai'] ?>đ</td>
        </tr>
        <tr>
        	<td class="text-right" style="min-width: 150px;width: 150px;">
                <b><?= __('Trạng Thái Vay') ?></b>
            </td>
            <td style="min-width: 150px;">
            	<?php echo $this->Form->control(null,[
            		'type' => 'select',
            		'options' => [
                                ['value' => 0, 'text' => __('Đang Vay')],
                                ['value' => 2, 'text' => __('Trả Hết')],
                                ['value' => 3, 'text' => __('Nợ Xấu')],
                            ],
                    'class' => 'form-control',
                    'label' => false,
                    'placeholder' => __('Họ và tên (bắt buộc điền)'),
                    'required' => 'required',
                    'id' => 'tinh_trang',
                    'data-id' => $data['quanly_id'],
                    'value' => $data['tinh_trang']
                ]); ?>
            </td>
            <td class="text-right" style="min-width: 150px;width: 150px;">
                <b><?= __('Thời gian vay') ?></b>
            </td> 
            <td style="min-width: 150px;width: 150px;"><?php echo $data['thoigian'] ?></td>
            
        </tr>
    </tbody>
</table>
  
<script type="text/javascript">
	jQuery(document).ready(function(){
		jQuery("#tinh_trang").change(function(){
			var quanly_id = jQuery(this).data('id');
			var trang_thai = jQuery(this).val();
			jQuery.ajax({
		        method: "GET",
		        url : "<?php echo $this->Url->build(['controller' => 'Quanlys','action' => 'thaydoitrangthai']) ?>",
		        data: {
		            quanly_id : quanly_id,
		            trang_thai : trang_thai
		        },
		        success: function (reponse) {
		           alert(reponse);
		        },
		        error: function () {
		            console.log('Ajax error');
		        }
		    });
		});
		
	})
</script>