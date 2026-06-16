@extends('layouts.app')

@section('title', 'Arquitectura - Jean Arias')
@section('description', 'Arquitectura de sistemas y APIs')

@section('content')
    @include('public.partials.architecture')
    @include('public.partials.database-dashboard')
    @include('public.partials.ai-innovation')
@endsection
