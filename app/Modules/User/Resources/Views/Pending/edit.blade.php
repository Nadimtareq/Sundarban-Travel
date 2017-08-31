@extends('layouts.backend.master')

@section('title')
   
@endsection

@section('content')


<div class="uk-grid" data-uk-grid-margin data-uk-grid-match id="user_profile">
        <div class="uk-width-large-10-10">
            <form action="{{route('pending_update',$pending->id)}}"  method="post" class="uk-form-stacked" id="class_store">
                <div class="uk-grid" data-uk-grid-margin>
                    <div class="uk-width-large-10-10">
                        <div class="md-card">
                            <div class="user_heading" data-uk-sticky="{ top: 48, media: 960 }">
                                {{ csrf_field() }}
                                <div class="user_heading_avatar fileinput fileinput-new" data-provides="fileinput">
                                    <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                </div>
                                <div class="user_heading_content">
                                    <h2 class="heading_b"><span class="uk-text-truncate" id="user_edit_uname">  Edit Pending </span></h2>
                                </div>
                            </div>
                            <div class="user_content">
                                 
                                    <div class="uk-grid">
                                    <div class="uk-width-1-3">
                                        <div class="parsley-row">
                                            <label for="phone"> Name <span class="req"></span></label>
                                        </div>
                                    </div>
                                    <div class="uk-width-1-3">
                                        <div class="parsley-row">
                                 <input type="text" id="title" value="{{$pending->name}}" name="title" required class="md-input"  />
                                        </div>
                                    </div>
                                </div>
                                 
                                 <div class="uk-grid">
                                    <div class="uk-width-1-3">
                                        <div class="parsley-row">
                                            <label for="price">Email </label>
                                        </div>
                                    </div>
                                    <div class="uk-width-1-3">
                                        <div class="parsley-row">
                                            <input type="text" id="title" value="{{$pending->email}}" name="email" class="md-input"  />
                                        </div>
                                    </div>
                                </div>                                                                                                        
                                <div class="uk-grid">
                                    <div class="uk-width-1-3">
                                        <div class="parsley-row">
                                            <label for="phone"> Phone <span class="req"></span></label>
                                        </div>
                                    </div>
                                    <div class="uk-width-1-3">
                                        <div class="parsley-row">
                                            <input type="text" id="title" value="{{$pending->phone}}" name="phone" required class="md-input"  />
                                        </div>
                                    </div>
                                </div>

                              <div class="uk-grid">
                                    <div class="uk-width-1-3">
                                        <div class="parsley-row">
                                            <label for="phone"> Resgistration date </span></label>
                                        </div>
                                    </div>
                                    <div class="uk-width-1-3">
                                        <div class="parsley-row">
                            <input class="md-input" type="text" value="{{$pending->created_at}}"id="end_date" name="date" data-uk-datepicker="{format:'YYYY-MM-DD'}">
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