@extends('admin.sidebar')

@section('content')

<div class="table-responsive">
  <table class="table table-bordered border text-nowrap mb-0">
      <thead>
          <tr>
              <th>Unit</th>
              <th>Description</th>
              <th>Actions</th> <!-- For Approve, Update, and Delete -->
          </tr>
      </thead>
      <tbody>
          {{-- @foreach($measuments as $measument)
          <tr>
              <td>{{ $measument->m_name }}</td>
              <td>{{ $brand->description }}</td>

              <td>
                  @if(!$brand->approved)
                  <form action="{{ route('brands.approve', $brand->id) }}" method="POST" style="display:inline-block;">
                      @csrf
                      <button type="submit" class="btn btn-success btn-sm">Approve</button>
                  </form>
                  @endif
                  <a href="{{ route('brands.edit', $brand->id) }}" class="btn btn-warning btn-sm">Update</a>
                  <form action="{{ route('brands.destroy', $brand->id) }}" method="POST" style="display:inline-block;">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                  </form>
              </td>
          </tr>
          @endforeach --}}
      </tbody>
  </table>
