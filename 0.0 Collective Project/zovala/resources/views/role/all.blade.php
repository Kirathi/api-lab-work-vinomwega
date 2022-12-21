@extends('layout')

@section('headTitle','Roles - ')
@section('pageTitle','Roles')

@section('content')

<div class="row">
    <div class='col-12'>
            <a class="btn btn-primary" href="{{URL::to('role/add')}}">
                <i class = "fas fa-plus"></i> Add Role
            </a>
        <div class="card mb-4">
            
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                        <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">#</th>
                        <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Name</th>
                        <th class="align-middle text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    
                    @forelse($roles as $role)
                    <tr>
                        <td> <p class="text-xs px-3 font-weight-bold mb-0"> {{$role->id}}</p></td>
                        <td><p class="text-xs px-3 mb-0"> {{$role->name}}</p></td>
                        <td class="align-middle text-center text-sm">
                          <a href="{{URL::to('role/edit/'.$role->id)}}">
                            <i class="fa-solid fa-pen-to-square "></i>
                          </a>
                          <a href="{{URL::to('role/delete/'.$role->id)}}">
                            <i class="fa-solid fa-trash "></i>
                          </a>  
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="3">No records found</td>
                    </tr>
                    @endforelse
                  </tbody>
                </table>
              </div>
            </div>
        </div>
    </div>
    
</div>
@endsection