<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Insert Contact Data</h4>
            </div>
            <div class="modal-body">
                <form role="form" method="post" enctype="multipart/form-data">
                    {!! csrf_field() !!}
                    <div class="form-group">
                        <label>Name:</label>
                        <input type="text" name="name" class="form-control" required>
                    </div><!-- End form-group-->
                    <div class="form-group">
                        <label>Value:</label>
                        <input type="text" name="value" class="form-control">
                    </div><!-- End form-group-->
                    <div class="form-group">
                        <label>Icon:</label>
                        <select name="icon" class="fa form-control">
                            @foreach($icons as $key => $val)
                            <option value="{{$key}}">{{$val}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group" >
                        <label>Language:</label>
                        <select name="lang" class="form-control">
                            <option value=""> -- Select Language -- </option>
                            @foreach($lang as $language)
                            <option value="{{$language->lang_code}}">{{$language->lang}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">cancel</button>
                        <button type="button" class="addBTN btn btn-primary btn-sm btn-flat">
                            Save <span class="glyphicon glyphicon-save"> </span>
                        </button>
                    </div> 
                </form>
            </div>
        </div>
    </div>
</div>