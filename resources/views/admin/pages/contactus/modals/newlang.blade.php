<div class="modal fade" id="trans" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">

        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Insert Category</h4>
            </div>
            <div id="newlang-modal-body" class="modal-body">
                <form role="form" method="post" id="trans-form" action="{{action('Admin\ContactUsController@postNew')}}" enctype="multipart/form-data">
                    {!! csrf_field() !!}
                    <div class="form-group">
                        <label>Name:</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Value:</label>
                        <input type="text" name="value" class="form-control">
                    </div> 
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">cancel</button>
                        <button type="button" class="transBTN btn btn-primary btn-sm btn-flat">
                            Save <span class="glyphicon glyphicon-save"> </span>
                        </button>
                    </div> 
                    <input type="hidden" id="newlang-insert-master_id"name="master_id" value=""/>
                    <input type="hidden"  id="newlang-insert-lang" name="lang" value=""/>
                </form>
            </div>
        </div>
    </div>

</div>