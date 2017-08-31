@extends('layouts.backend.master')

@section('title')
   
@endsection

@section('content')


<div class="uk-grid" data-uk-grid-margin data-uk-grid-match id="user_profile">
        <div class="uk-width-large-10-10">
            <form action="{{route('assign_update',$ass->id)}}"  method="post" class="uk-form-stacked" id="class_store">
                <div class="uk-grid" data-uk-grid-margin>
                    <div class="uk-width-large-10-10">
                        <div class="md-card">
                            <div class="user_heading" data-uk-sticky="{ top: 48, media: 960 }">
                                {{ csrf_field() }}
                                <div class="user_heading_avatar fileinput fileinput-new" data-provides="fileinput">
                                    <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                </div>
                                <div class="user_heading_content">
                                    <h2 class="heading_b"><span class="uk-text-truncate" id="user_edit_uname"> Package </span></h2>
                                </div>
                            </div>
                            <div class="user_content">
                                  <div class="uk-grid">
                                   <div class="uk-width-1-3">
                                        <div class="parsley-row">
                                            <label for="phone"> Select package <span class="req"></span></label>
                                        </div>
                                    </div>
                                 
                                    <div class="uk-width-medium-1-3">
                                    <div class="parsley-row">
                                        <select data-md-selectize data-md-selectize-bottom data-uk-tooltip="{pos:'top'}" title="category" id="name" name="package">
                                            <option value="">package </option>
                                             @foreach($assign as $item)
                                             @if($item->id==$ass->specialpackage_id )
                                             <option selected value="{{ $item->id }}">{{ $item->title }}</option>
                                             @else
                                             <option  value="{{ $item->id }}">{{ $item->title }}
                                             </option>
                                             @endif
                                             @endforeach
                                        </select>
                                    </div>
                                </div>
                             </div>
                       
                                <div class="uk-grid">
                                   <div class="uk-width-1-3">
                                        <div class="parsley-row">
                                            <label for="phone"> Assign To <span class="req"></span></label>
                                        </div>
                                    </div>
                                 
                                    <div class="uk-width-medium-1-3">
                                    <div class="parsley-row">
                                        <select data-md-selectize data-md-selectize-bottom data-uk-tooltip="{pos:'top'}" title="category" id="name" name="assign">
                                            <option value="">assign </option>
                                             @foreach($user as $item)
                                             @if($item->id==$ass->users_id)
                                         <option selected value="{{ $item->id }}">{{ $item->name }}</option>
                                             @else 
                                             <option  value="{{ $item->id }}">{{ $item->name }}</option>
                                             @endif     
                                             @endforeach
                    
                                        </select>
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