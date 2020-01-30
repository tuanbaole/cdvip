<div class="table-responsive">
    <?php $randomString = $this->Func->generateRandomString(10); ?>
    <table class="table table-bordered jambo_table" style="width: 100%;" role="grid" aria-describedby="datatable_info">
        <thead>
            <tr role="row">
                <th style="min-width: 20px;width: 20px;" class="text-th-kh"><?= __('STT') ?></th>
                <th style="min-width: 100px;width: 100px;" class="text-th-kh"><?= __('Họ và tên') ?></th>
               	<th style="min-width: 100px;width: 100px;" class="text-th-kh"><?= __("Tiền Lãi") ?></th>
               	<th style="min-width: 100px;width: 100px;" class="text-th-kh"><?= __("Phí Khác") ?></th>
               	<th style="min-width: 100px;width: 100px;" class="text-th-kh"><?= __("Ngày Trả") ?></th>
                <th class="text-center" style="min-width: 100px;width: 100px;" class="text-th-kh"><?= __("Trả Lãi") ?></th>
            </tr>
        </thead>
        <tbody id="data-table-donglai">
           <?php foreach ($donglais as $key => $donglai): ?>
				<tr>
					<td class="text-center"><?php echo $key + 1 ?></td>
					<td><?= h($donglai->ho_ten) ?></td>
					<td><?= $this->Number->format($donglai->tien_lai) ?></td>
					<td><?= h($donglai->phi_khac) ?></td>
					<td><?= date("d/m/Y", strtotime(h($donglai->ngay_tra))); ?></td>
                    <td class="text-center">
                        <?php echo $this->Form->control('trang_thai_tra_lai',[
                            'type'  => 'checkbox', 
                            'class' => 'form-control flat trang_thai_tra_lai '.$randomString,
                            'label' => false,
                            'checked' => $donglai->trang_thai_tra_lai,
                            'id' => false,
                            'data-donglai_id' => $donglai->id,
                        ]); ?>
                    </td>
				</tr>
			<?php endforeach ?>
        </tbody>
    </table>
</div>
<script type="text/javascript">
    jQuery(document).ready(function(){
        var rdString = "<?php echo $randomString; ?>";
        jQuery('.trang_thai_tra_lai.'+rdString).click(function(){
            var donglai_id = jQuery(this).data(donglai_id)['donglai_id'];
            var trang_thai_tra_lai = "1";
            if (jQuery(this).is(":checked")) {
                trang_thai_tra_lai = "1";
            } else {
                trang_thai_tra_lai = "0";
            }
            jQuery.ajax({
                method: "GET",
                url : "<?php echo $this->Url->build(['controller' => 'Donglais','action' => 'updatetrangthai']) ?>",
                data: {
                    donglai_id : donglai_id,
                    trang_thai_tra_lai : trang_thai_tra_lai
                },
                success: function (reponse) {
                    alert(reponse);
                },
                error: function () {
                  alert('Đóng lãi không thành công');
                }
            });
        });
    });
</script>