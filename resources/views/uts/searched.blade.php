@extends('base')

@section('body')
<table>
<tr>
    <th>ID</th>
    <th>Nama</th>
    <th>Telepon</th>
    <th>Email</th>
    <th>Alamat</th>
</tr>
@foreach ($utss as $uts)
<tr>
    <td>{{$uts->id}}</td>
    <td>{{$uts->Nama}}</td>
    <td>{{$uts->Telepon}}</td>
    <td>{{$uts->email}}</td>
    <td>{{$uts->alamat}}</td>
    <td><button onclick="location.href='/uts/{{$uts->id}}/edit'">edit</button></td>
    <td><button onclick="if(confirm('are you sure?'))location.href='/uts/{{$uts->id}}/delete';">delete</button></td>
    </tr>

@endforeach
</table>
