<!-- First, extends to the CRUDBooster Layout -->
@extends('crudbooster::admin_template')

@section('content')


  <!-- Your html goes here -->
  <div class="box">
    <div class="box-header with-border">
    <h3 class="box-title">Title</h3>
    <div class="box-tools pull-right">
    <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="" data-original-title="Collapse">
    <i class="fa fa-minus"></i></button>
    <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="" data-original-title="Remove">
    <i class="fa fa-times"></i></button>
    </div>
    </div>
    <div class="box-body">
    Start creating your amazing application!
    </div>

    <div class="box-footer">
    Footer
    </div>

    </div>
@endsection
