@extends('templates.default')

@php
$title = 'data mahasiswa';
$pretitle = 'semua data';
@endphp

@push('page-action')
<a href="{{ route('student.create') }}" calss="btn btn-primary">tambah data</a>

@endpush

@section('content')

<<div class="card">
                  <div class="table-responsive">
                    <table class="table table-vcenter card-table">
                      <thead>
                        <tr>
                          <th>Name</th>
                          <th>Address</th>
                          <th>Phone</P></th>
                          <th>Class</th>
                          <th class="w-1"></th>
                        </tr>
                      </thead>
                      <tbody>
                       @foreach($students as $student)
                       <td>{{$student->name }}</td>
                          <td>{{$student->address }}</td>
                          <td>{{$student->phone_number }}</td>
                          <td>{{$student->class }}</td>
                          <td>
                            <a href="{{ route('student.edit', $student->id) }}">Edit</a>
                            <form action="{{ route('student.destroy', $student->id) }}"method="post">
                              @csrf
                              @method('DELETE')
                              <input type="submit" value="HAPUS" class="btn btn-danger btn-sm">
                            </form>
                          </td>
                        </tr>
                       @endforeach
                       
                      </tbody>
                    </table>
                  </div>
                </div>

@endsection()