@extends('layouts.backend.master')

@section('title')
  Pending
@endsection

@section('content')
    <div id="page_content_inner">
        <div class="uk-width-large-10-10">
            <div class="md-card">
                <div class="md-card-content">
                    <div class="uk-margin-bottom">
                        <a href="#" class="md-btn uk-margin-right" id="printTable">Print Table</a>
                        <div class="uk-button-dropdown" data-uk-dropdown="{mode:'click'}">
                            <button class="md-btn">Columns <i class="uk-icon-caret-down"></i></button>
                            <div class="uk-dropdown">
                                <ul class="uk-nav uk-nav-dropdown" id="columnSelector"></ul>
                            </div>
                        </div>
                    </div>
    <div class="uk-overflow-container uk-margin-bottom">
        <table class="uk-table uk-table-align-vertical uk-table-nowrap tablesorter tablesorter-altair" id="ts_pager_filter">
            <thead>
            <tr>
             <th></th>
             
                <th data-priority="6">Name</th>
                <th data-priority="6">Email</th>
                <th data-priority="4">Phone</th>
                <th data-priority="3">Registration Date</th>
            
                <th class="filter-false remove sorter-false uk-text-center" data-priority="1">Actions</th>
            </tr>
            </thead>
              <tbody>
            @foreach($pending as $value)
              <tr>
                    <td></td>
                    <td>{!! $value->name !!}</td>
                    <td>{!! $value->email !!}</td>
                    <td>{!! $value->phone !!}</td>
                    <td>{!! $value->created_at !!}</td>
                     <td class="uk-text-center">
                        <a href="{{ route('pending_edit',$value->id) }}" data-uk-tooltip title="edit Item" class="batch-edit"><i class="md-icon material-icons uk-margin-right">&#xE254;</i></a>
                        <a href="{{ route('confirmed_confirm',$value->id) }}" data-uk-tooltip title="confirmed" class="batch-edit"><i class="material-icons">&#xE90A;</i></a>
                        <a onclick="deleterow(this); return false" href="{{ route('pending_delete',$value->id) }}" data-uk-tooltip title="delete Item" class="batch-delete"><i class="md-icon material-icons">&#xE872;</i></a>

                    </td>

            </tr>
            @endforeach
            </tbody>
            
        </table>
        <ul class="uk-pagination ts_pager">
            <li data-uk-tooltip title="Select Page">
                <select class="ts_gotoPage ts_selectize"></select>
            </li>
            <li class="first"><a href="javascript:void(0)"><i class="uk-icon-angle-double-left"></i></a></li>
            <li class="prev"><a href="javascript:void(0)"><i class="uk-icon-angle-left"></i></a></li>
            <li><span class="pagedisplay"></span></li>
            <li class="next"><a href="javascript:void(0)"><i class="uk-icon-angle-right"></i></a></li>
            <li class="last"><a href="javascript:void(0)"><i class="uk-icon-angle-double-right"></i></a></li>
            <li data-uk-tooltip title="Page Size">
                <select class="pagesize ts_selectize">
                    <option value="5">5</option>
                    <option value="10">10</option>
                    <option value="25">25</option>
                    <option value="50">50</option>
                </select>
            </li>
            </ul>
           </div>

           
                </div>
            </div>
        </div>
    </div>
   
@endsection