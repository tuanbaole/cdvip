<div class="row">
    <div class="col-sm-5">
        <div class="dataTables_info" id="datatable_info" role="status" aria-live="polite"><?= $this->Paginator->counter(['format' => __('Trang {{page}}/{{pages}}, hiển thị {{current}}/{{count}}')]) ?></div>
    </div>
    <div class="col-sm-7">
        <div class="dataTables_paginate paging_simple_numbers" id="datatable_paginate">
            <ul class="pagination">
                <?= $this->Paginator->first('<< ' . __('đầu tiên')) ?>
                <?= $this->Paginator->prev('< ' . __('lùi')) ?>
                <?= $this->Paginator->numbers() ?>
                <?= $this->Paginator->next(__('tiếp') . ' >') ?>
                <?= $this->Paginator->last(__('cuối cùng') . ' >>') ?>
            </ul>
        </div>
    </div>
</div>