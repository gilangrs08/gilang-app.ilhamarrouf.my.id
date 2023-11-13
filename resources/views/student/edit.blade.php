@extends('templates.default')

@php
$title = 'Data Mahasiswa';
$pretitle = 'Edit Data Mahasiswa';
@endphp

@section('content')
<div class="card">
    <div class="card body"></div>
<form action="{{ route('student.update', $student->id) }}" class=""method="post">
   @csrf
   @method('PUT')
<div class="mb-3">
                              <label class="form-label">nama</label>
                              <input type="text" name="name" class="form-control 
                              @error('name')
                                 is-invalid
                              @enderror"
                               name="example-text-input"
                               placeholder="tulis nama lengkap" value="{{ old('name') ?? $student->name }}">
                            </div>
                            <div class="mb-3">
                              <label class="form-label">alamat</label>
                              <input type="text" name="address" class="form-control 
                              @error('addres')
                                 is-invalid
                              @enderror"
                               name="example-text-input"
                               placeholder="tulis alamat lengkap" value="{{ old('addres') ?? $student->address }}">
                            </div>
                            <div class="mb-3">
                              <label class="form-label">telpon</label>
                              <input type="text" name="phone_number" class="form-control
                              @error('phone_number')
                                 is-invalid
                              @enderror"
                               name="example-text-input"
                               placeholder="tulis nomor telpon" value="{{ old('phone_number') ?? $student->phone_number }}">
                            </div>
                            <div class="mb-3">
                              <label class="form-label">kelas</label>
                              <input type="text" name="class" class="form-control 
                              @error('class')
                                 is-invalid
                              @enderror"
                               name="example-text-input"
                               placeholder="tulis kelas" value="{{ old('class') ?? $student->class }}">
                            </div>
                            
                            <div class="mb3"></div>
                            <input type="submit" value="simpan" class="btn btn primary">
</form>
</div>
@endsection
