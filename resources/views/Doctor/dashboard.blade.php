@section('title','dashboard')
@extends('Doctor.layout.Doc.header')
@section('content')
<div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="{{ route('chatbot') }}" class="btn btn-outline-success">💬 Chatbot</a>

    <a href="#">Appointement</a>
   {{-- <a href="#">Services</a>
    <a href="#">Clients</a>
    <a href="#">Contact</a>--}}
</div>
  
  
  <span onclick="openNav()">open</span>
  
  
<div id="main">
    <table class="table">
        <tr>
            <th>S.NO</th>
            <th>NAME</th>
            <th>email</th>
            <th>time</th>
        </tr>
        @php 
        $appoint = DB::table('appointment')->get();
        $i = 0;
        @endphp
        @foreach ($appoint as $apt)
        <tr>
            <td>{{++$i}}</td>
           <td>{{$apt->name}}</td>
           <td>{{$apt->email}}</td>
           <td>{{$apt->time}}</td>
        </tr>
            
        @endforeach
        
    </table>
</div>
@endsection