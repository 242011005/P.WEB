@extends('layouts.admin') 

@section('content') 
<div class="container-fluid">
    <table class="table table-hover"> 
        <thead> 
            <tr> 
                <th>NIK</th> 
                <th>NAMA</th> 
                <th>JK</th> 
                <th>ALAMAT</th> 
            </tr> 
        </thead> 
        <tbody> 
            @foreach($warga as $item) 
            <tr> 
                <td>{{ $item->nik }}</td> 
                <td>{{ $item->nama }}</td> 
                <td>{{ $item->jk }}</td> 
                <td>{{ $item->alamat }}</td> 
            </tr> 
            @endforeach 
        </tbody> 
    </table> 
</div>
@endsection