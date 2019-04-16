@extends('admin.master')


@section('page-title')
	manage category 
@endsection

@section('content-heading')
	manage category
@endsection

@section('mainContent')






	<div class="panel-body">
            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr>
                        <th>SI.</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Publication </th>
                        <th>Action</th>
               	 </tr>
                </thead>
                      <tbody>
                      	<?php
                      	$i=0;
                      	?>
                      	@foreach($category as $singlecategory) 	
                           	<tr class="odd gradeX">
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $singlecategory -> categoryName}} </td>
                                    <td>{{ $singlecategory -> shortDescription }}</td>
                                   	<td class="center">{{ ($singlecategory -> publicationStatus ==1)? 'Published' : 'unpublished ' }}</td>
                                    <td class="center">Edit | Delete</td>
                            </tr>
                            @endforeach 
                        </tbody>
                </table>    
    </div>
    @endsection

