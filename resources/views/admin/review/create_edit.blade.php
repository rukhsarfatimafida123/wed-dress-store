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
                        <label for="rating" class="control-label">rating</label>
                        <input type='text' name="rating" id="rating" class="form-control" required=""  value="{{@$row['rating']}}" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="comment" class="control-label">comment</label>
                        <input type='text' name="comment" id="comment" class="form-control" required=""  value="{{@$row['comment']}}" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="product_id" class="control-label">product_id</label>
                        <input type='text' name="product_id" id="product_id" class="form-control" required=""  value="{{@$row['product_id']}}" />
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