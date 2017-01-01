<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel"></h4>
            </div>
            <div class="modal-body">
                <form role="form" class="ajax-form" method="post" enctype="multipart/form-data">
                    {!! csrf_field() !!}
                    <div class="form-group">
                        <label>Name:</label>
                        <input type="text" name="name"  class="form-control" >
                    </div><!-- End form-group-->

                    <div class="form-group">
                        <label>Description:</label>
                        <textarea name="description" class="form-control" ></textarea>
                    </div><!-- End form-group-->

                    <div class="form-group">
                        <label>Language:</label>
                        <select name="lang" class="form-control" >
                            <option value="">-- select language -- </option>
                            @foreach(App\Locale::get() as $language)
                                <option value="{{$language->name}}">{{$language->alias}}</option>
                            @endforeach
                        </select>
                    </div><!-- End form-group-->
                    <div class="form-group">
                        <label>Categories:</label>
                        <select name="category_id" class="form-control" >
                            <option value="">-- select category -- </option>
                                @foreach (App\Category::all() as $cat)
                                        @php
                                            $en = $cat->translated('en');
                                            $ar = $cat->translated('ar');
                                        @endphp
                                        <option value="{{ $cat->id }}">{{ "$en->name | $ar->name" }}</option>
                                @endforeach
                            </select>
                    </div><!-- End form-group-->

                    <div class="form-group">
                        <label>Price :</label>
                        <input type="text" name="price"  class="form-control" >
                    </div><!-- End form-group-->

                    <div class="form-group">
                        <label>Amount:</label>
                        <input type="text" name="amount"  class="form-control" >
                    </div><!-- End form-group-->

                    <div class="form-group">
                        <label>Discount:</label>
                        <input type="text" name="discount"  class="form-control" >
                    </div><!-- End form-group-->

                    <div class="form-group">
                        <label>Date:</label>
                        <input type="text" name="date" class="form-control" id="calendar" >
                    </div><!-- End form-group-->

                    <div class="form-group upload-box">
                        <label>Image:</label>
                        <input type="file" name="image_name[]" class="form-control"  >
                        <button type="button" class="btn btn-default btn-xs btn-generate">add image +</button>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-lg" data-dismiss="modal">Cancel</button>
                        <button type="submit" data-loading="Wait..." class="ajax-submit btn btn-primary btn-lg btn-flat">
                            Save <span class="glyphicon glyphicon-save"> </span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
