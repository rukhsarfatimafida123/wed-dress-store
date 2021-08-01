<div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">
            {{@$page_title}}
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">
                ×
            </span>
        </button>
    </div>
    <form action="{{$action}}" method="post" class="make_ajax" >

        <div class="modal-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="amount" class="control-label">amount</label>
                        <input type='text' name="amount" id="amount" class="form-control" required=""  value="{{@$row['amount']}}" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="payment_type" class="control-label">payment_type</label>
                        <input type='text' name="payment_type" id="payment_type" class="form-control" required=""  value="{{@$row['payment_type']}}" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="order_id" class="control-label">order_id</label>
                        <input type='text' name="order_id" id="order_id" class="form-control" required=""  value="{{@$row['order_id']}}" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="customer_id" class="control-label">customer_id</label>
                        <input type='text' name="customer_id" id="customer_id" class="form-control" required=""  value="{{@$row['customer_id']}}" />
                    </div>
                </div>
                
            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-info m-btn m-btn--icon" id="add_oh_period"><span><i class="la la-check"></i><span>{{ @$button_text }}</span></span></button>
            <button type="button" class="btn btn-secondary m-btn m-btn--icon" data-dismiss="modal"><span>Close</span></button>
        </div>
    </form>
</div> 