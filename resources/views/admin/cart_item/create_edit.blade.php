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
                        <label for="product_id" class="control-label">product_id</label>
                        <input type='number' name="product_id" id="product_id" class="form-control" required=""  value="{{@$row['product_id']}}" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="cart_id" class="control-label">cart_id</label>
                        <input type='number' name="cart_id" id="cart_id" class="form-control" required=""  value="{{@$row['cart_id']}}" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="quantity" class="control-label">quantity</label>
                        <input type='number' name="quantity" id="quantity" class="form-control" required=""  value="{{@$row['quantity']}}" />
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