@extends('layouts.app') @section('content')
<div class="container">
<a class="btn btn-primary"  href=" {{ route('new_sub_group') }} ">New</a>

<table class="table">
  <thead class="thead-inverse">
    <tr>
      <th>#</th>
      <th>Name</th>
      <th>Description</th>
      <th>Manage</th>
    </tr>
  </thead>
  <tbody>
      @foreach ($subgroups as $subgroup)
      <tr>
        <th scope="row">{{ ($subgroup->count()  - $subgroup->id) + 1 }}</th>
        <td>{{ $subgroup->name }}</td>
        <td>{{ $subgroup->description }}</td>
        <td>
            <a class="btn btn-primary " style="color:#fff">
                <i class="fa fa-pencil" aria-hidden="true"></i>
            </a>
            <a class="btn btn-danger" style="color:#fff"><i class="fa fa-close" aria-hidden="true"></i></a>
            <a class="btn btn-info" style="color:#fff"><i class="fa fa-eye" aria-hidden="true"></i></a>
        </td>
    </tr>
      @endforeach
  
  </tbody>
</table>
</div>
@endsection