@extends('layouts.backend.master')

@section('title')
   
@endsection

@section('content')


<div class="uk-grid" data-uk-grid-margin data-uk-grid-match id="user_profile">
        <div class="uk-width-large-10-10">
            <form action="{{route('order_store')}}"  method="post" class="uk-form-stacked" id="class_store">
                <div class="uk-grid" data-uk-grid-margin>
                    <div class="uk-width-large-10-10">
                        <div class="md-card">
                            <div class="user_heading" data-uk-sticky="{ top: 48, media: 960 }">
                                {{ csrf_field() }}
                                <div class="user_heading_avatar fileinput fileinput-new" data-provides="fileinput">
                                    <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                </div>
                                <div class="user_heading_content">
                                    <h2 class="heading_b"><span class="uk-text-truncate" id="user_edit_uname"> Order Pending</span></h2>
                                </div>
                            </div>
                            <div class="user_content">


                                 <div class="uk-grid">
                                   <div class="uk-width-1-3">
                                        <div class="parsley-row">
                                            <label for="phone"> User *<span class="req"></span></label>
                                        </div>
                                    </div>
                                 
                                    <div class="uk-width-medium-1-3">
                                    <div class="parsley-row">
                                        <select data-md-selectize data-md-selectize-bottom data-uk-tooltip="{pos:'top'}" title="category" id="name" name="user">
                                            <option value="">user </option>
                                            @foreach($user as $item )
                                          <option  value="{{ $item->id }}">{{ $item->name }}</option>
                                          @endforeach
                                        </select>
                                    </div>
                                </div>
                             </div>
      
                                  <div class="uk-grid">
                                   <div class="uk-width-1-3">
                                        <div class="parsley-row">
                                            <label for="phone">  Package Type *<span class="req"></span></label>
                                        </div>
                                    </div>
                                 
                                    <div class="uk-width-medium-1-3">
                                    <div class="parsley-row">
                            <select data-md-selectize data-md-selectize-bottom data-uk-tooltip="{pos:'top'}" title="category" id="type_1" name="type_1">
                                             <option value="1">common package </option>
                                             <option value="2">Group fare </option>
                                             <option value="3">Special package </option>
                                        </select>
                                    </div>
                                </div>
                             </div>
                       
                                <div class="uk-grid">
                                   <div class="uk-width-1-3">
                                        <div class="parsley-row">
                                     <label for="phone"> Select package *<span class="req"></span></label>
                                        </div>
                                    </div>
                                 
                                    <div class="uk-width-medium-1-3">
                                    <div class="parsley-row">
                            <select data-md-selectize data-md-selectize-bottom data-uk-tooltip="{pos:'top'}" title="category" id="package_" name="package">
                                        <option value="1" id="op">select</option>
                                            
                                        </select>
                                    </div>
                                </div>
                             </div>
                               
                               <div class="uk-grid">
                                    <div class="uk-width-1-3">
                                        <div class="parsley-row">
                                            <label for="details">Message</label>
                                        </div>
                                    </div>
                                    <div class="uk-width-1-3">
                                        <div class="parsley-row">
                                            <textarea class="md-input" id="details" name="message" required cols="10" rows="3" data-parsley-trigger="keyup" ></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="uk-grid">
                                    <div class="uk-width-1-1 uk-float-right">
                                        <button type="submit" class="md-btn md-btn-primary" >Submit</button>
                                        <button type="button" class="md-btn md-btn-flat uk-modal-close">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </form>
    </div>
    </div>

@endsection

@section('script')
<script>
   $('#type_1').on('change',function (e){
     var type_id=e.target.value;
      
  //    $.get('/order/pending/show/'+type_id,function(data){

     
  //      // $('#package_').empty();
  //        $('#package_').html(data);
  //       console.log(data);

    
  // });
  // onchange
            // $("#province_id").change(function() {
                $.get('/order/show/'+type_id, function(jsondata) {
                    var htmldata = '';
                    var new_value_options   = '[';
                    for (var key in jsondata) {
                        htmldata += '<option value="'+jsondata[key].id+'">'+jsondata[key].title+'</option>';
                        var keyPlus = parseInt(key) + 1;
                        if (keyPlus == jsondata.length) {
                            new_value_options += '{text: "'+jsondata[key].title+'", value: '+jsondata[key].id+'}';
                        } else {
                            new_value_options += '{text: "'+jsondata[key].title+'", value: '+jsondata[key].id+'},';
                        }
                    }
                    new_value_options   += ']';
                    //convert to json object
                    console.log(new_value_options);
                    new_value_options = eval('(' + new_value_options + ')');
                    if (new_value_options[0] != undefined) {
                        $("#package_").html(htmldata);
                        var selectize = $("#package_")[0].selectize;
                        selectize.clear();
                        selectize.clearOptions();
                        selectize.renderCache['option'] = {};
                        selectize.renderCache['item'] = {};
                        selectize.addOption(new_value_options);
                        selectize.setValue(new_value_options[0].value);
                    }
                }, 'json');
            // });
  }); 
</script>  
@endsection
