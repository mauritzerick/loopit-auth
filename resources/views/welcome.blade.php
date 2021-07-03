@extends('layouts.app')
@section('content')
    
    <div class="flex bg-gray-100 border-b border-gray-300">
        <div class="container mx-auto">
            <router-link to='/'>Home</router-link>
            <router-link to='/'>About </router-link>
        </div>
    </div>
    <router-view></router-view>
@endsection