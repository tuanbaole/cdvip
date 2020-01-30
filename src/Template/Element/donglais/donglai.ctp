<ul class="nav nav-tabs bar_tabs" id="myTab" role="tablist">
  	<li class="nav-item">
        <a class="nav-link active" id="profile-tab" data-toggle="tab" href="#profile">
        	<?= __("Chi tiết") ?>
        </a>
  	</li>
</ul>
<div class="tab-content" id="myTabContent">
    <div class="tab-pane fade active show" id="profile">
        <div id="noidung_donglai"></div>
        <button class="btn btn-success" id="xemthem_page"><?= __('Xem Thêm') ?></button>
        <input type="number" name="" class="hidden" value="2" id="page_xemthem">
     </div>
</div>


<script type="text/javascript">
jQuery(document).ready(function(){
    jQuery('#donglai_ngaytra').daterangepicker({
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

    //Khi bàn phím được nhấn và thả ra thì sẽ chạy phương thức này
    jQuery("#donglai_el").validate({
        rules: {
            ho_ten: "required",
            tien_lai: "required",
            ngay_tra: "required"
        },
        messages: {
            ho_ten: "Vui lòng nhập họ tên", 
           	tien_lai: "Vui lòng tiền lãi", 
            ngay_tra: "Vui lòng nhập ngày trả"
        }
    });
    
    jQuery('#xemthem_page').click(function(){
    	var quanly_id = jQuery('.hight-ye').first().data('quanly')['id'];
    	var page = jQuery('#page_xemthem').val();
    	jQuery.ajax({
		    method: "GET",
		    url : "<?php echo $this->Url->build(['controller' => 'Donglais','action' => 'xemthemdata']) ?>",
		    data: {
		    	quanly_id : quanly_id,
		    	page : page
		    },
		    success: function (reponse) {
		    	jQuery('#page_xemthem').val(parseInt(page) + 1);
		      	jQuery('#data-table-donglai').append(reponse);
		    },
		    error: function () {
		      console.log('Upload error');
		    }
	  	});
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