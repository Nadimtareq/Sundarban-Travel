@extends('layouts.backend.master')

@section('title')
   
@endsection

@section('content')


<div class="uk-grid" data-uk-grid-margin data-uk-grid-match id="user_profile">
        <div class="uk-width-large-10-10">
            <form action="{{route('commonpackge_update',$compkge->id)}}"  method="post" enctype="multipart/form-data" class="uk-form-stacked" id="class_store">
                <div class="uk-grid" data-uk-grid-margin>
                    <div class="uk-width-large-10-10">
                        <div class="md-card">
                            <div class="user_heading" data-uk-sticky="{ top: 48, media: 960 }">
                                {{ csrf_field() }}
                                <div class="user_heading_avatar fileinput fileinput-new" data-provides="fileinput">
                                    <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                </div>
                                <div class="user_heading_content">
                                    <h2 class="heading_b"><span class="uk-text-truncate" id="user_edit_uname"> Edit Common Package </span></h2>
                                </div>
                            </div>
                            <div class="user_content">
                                  <div class="uk-grid">
                                   <div class="uk-width-1-3">
                                        <div class="parsley-row">
                                            <label for="phone"> Select category <span class="req"></span></label>
                                        </div>
                                    </div>
                                 
                                    <div class="uk-width-medium-1-3">
                              <div class="parsley-row">
                                  <select data-md-selectize data-md-selectize-bottom data-uk-tooltip="{pos:'top'}" title="category" id="name" name="category">
                                    @foreach($com_cat as $pro)
                                     @if($pro->id==$compkge->commoncat_id) 
                                   <option selected value="{{ $pro->id }}">{{ $pro->title }}</option>
                                   @else 
                                    <option value="{{ $pro->id }}">{{ $pro->title }}</option>
                                    @endif
                                        @endforeach
                                         </select>
                                    </div>
                                </div>
                             </div>
                                    <div class="uk-grid">
                                    <div class="uk-width-1-3">
                                        <div class="parsley-row">
                                            <label for="phone">Title <span class="req"></span></label>
                                        </div>
                                    </div>
                               <div class="uk-width-1-3">
                                   <div class="parsley-row">
                                      <input type="text" id="title" value="{{$compkge->title}}" name="title" required class="md-input"  />
                                        </div>
                                    </div>
                                </div>
                                 
                                 <div class="uk-grid">
                                    <div class="uk-width-1-3">
                                        <div class="parsley-row">
                                            <label for="price">Price </label>
                                        </div>
                                    </div>
                              <div class="uk-width-1-3">
                                   <div class="parsley-row">
                                       <input type="text" id="title" value="{{$compkge->price}}"name="price" class="md-input"  />
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="uk-grid">
                                    <div class="uk-width-1-3">
                                        <div class="parsley-row">
                                            <label for="details">summary</label>
                                        </div>
                                    </div>
                                    <div class="uk-width-1-3">
                                        <div class="parsley-row">
                                            <textarea class="md-input" id="details" name="summary" cols="10" rows="3" data-parsley-trigger="keyup" >{{$compkge->summary}}</textarea>
                                        </div>
                                    </div>
                                </div>
                                  
                                 <div class="uk-grid">
                                  <div class="uk-width-1-3">
                                        <div class="parsley-row">
                                            <label for="email">Upload Image </span></label>
                                        </div>
                                    </div>
                                <div class="uk-width-1-3">
                                <div class="parsley-row">
                               <div id="file_upload-drop" class="uk-file-upload">
                                <a class="uk-form-file md-btn">choose file<input id="img_url" name="img_url" type="file"></a>
                            </div>   
                        </div>
                      </div> 
                   </div> 

                <div class="thumbnail">
                    <img src="{{url($compkge->img_url)}}" alt="...." height="200" width="150"/>
                       </div>


                                <hr class="uk-grid-divider">
                                <div class="uk-grid uk-grid-small">
                                    <div class="uk-width-large-1-3">
                                        <span class="uk-text-muted uk-text-small">Created At</span>
                                    </div>
                                    <div class="uk-width-large-2-3">
                                        <span class="uk-text-large uk-text-middle">{!! isset($compkge->created_at) ? $compkge->created_at:''  !!}</span>
                                    </div>
                                </div>
                                 <div class="uk-grid uk-grid-small">
                                    <div class="uk-width-large-1-3">
                                        <span class="uk-text-muted uk-text-small">Updated At</span>
                                    </div>
                                    <div class="uk-width-large-2-3">
                                        <span class="uk-text-large uk-text-middle">{!! isset($compkge->updated_at) ? $compkge->updated_at:''  !!}</span>
                                    </div>
                                </div>
                                
                                <br>
                                <br>
                                <br>


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