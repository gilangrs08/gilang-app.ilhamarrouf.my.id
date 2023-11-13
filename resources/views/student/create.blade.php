@extends('templates.default')

@php
$title = 'data mahasiswa';
$pretitle = 'Tambah data';
@endphp

@section('content')
<div class="card">
    <div class="card body"></div>
<form action="{{ route('student.store') }}" class=""method="post">
   @csrf
<div class="mb-3">
                              <label class="form-label">nama</label>
                              <input type="text" name="name" class="form-control 
                              @error('name')
                                 is-invalid
                              @enderror" 
                              name="example-text-input"
                               placeholder="tulis nama lengkap" value="{{ old('name') }}">
                               @error('name')
                               <span class="invalid-feedback">{{ $message }}</span>
                               @enderror
                            </div>
                            <div class="mb-3">
                              <label class="form-label">alamat</label>
                              <input type="text" name="address" class="form-control 
                              @error('address')
                                 is-invalid
                              @enderror"
                               name="example-text-input"
                               placeholder="tulis alamat lengkap" value="{{ old('address') }}">
                               @error('address')
                               <span class="invalid-feedback">{{ $message }}</span>
                               @enderror
                            </div>
                            <div class="mb-3">
                              <label class="form-label">telpon</label>
                              <input type="text" name="phone_number" class="form-control 
                              @error('phone_number')
                                 is-invalid
                              @enderror"
                               name="example-text-input"
                               placeholder="tulis nomor telpon" value="{{ old('phone_number') }}">
                               @error('phone_number')
                               <span class="invalid-feedback">{{ $message }}</span>
                               @enderror
                            </div>
                            <div class="mb-3">
                              <label class="form-label">kelas</label>
                              <input type="text" name="class" class="form-control 
                              @error('class')
                                 is-invalid
                              @enderror"
                               name="example-text-input"
                               placeholder="tulis kelas" value="{{ old('class') }}">
                               @error('class')
                               <span class="invalid-feedback">{{ $message }}</span>
                               @enderror
                            </div>
                            
                            <div class="mb3"></div>
                            <input type="submit" value="simpan" class="btn btn primary">
</form>
</div>
@endsection
