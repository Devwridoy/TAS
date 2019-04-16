@extends('admin.master')


@section('page-title')
	Add category 
@endsection

@section('content-heading')
	Add category
	<br>
	{{Session::get('message')}}
@endsection

@section('mainContent')
	Category Form

	<div class="panel-body">
        <div class="row">
            <div class="col-lg-6">
                
                	{!! Form::open(['url' => 'category/save','method' => 'POST', 'role' => 'form']) !!}
                    <div class="form-group">
                        <label>Category Name</label>
                        <input class="form-control" name="catagoryName">
                    </div>

                    <div class="form-group">
                        <label>Short Description</label>
                        <textarea class="form-control" name="shortDescription" placeholder="enter short Description"></textarea>
                   
                    </div>

                    <div class="form-group">
                    	<label>Publication Status</label>
                        <select name="publicationStatus">
                        	<option value="1">Published</option>
                        	<option value="0">Unpublished</option>
                        </select>
                    </div>
                     <div class="form-group">
                     		<input type="submit" value="submit" class="btn btn-block btn-primary" >
                    </div>

               {!! Form::close() !!}
            </div>
        </div>
    </div>


@endsection